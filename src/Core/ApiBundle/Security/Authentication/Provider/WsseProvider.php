<?php
namespace Core\ApiBundle\Security\Authentication\Provider;

use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\NonceExpiredException;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Core\ApiBundle\Security\Authentication\Token\WsseUserToken;

class WsseProvider implements AuthenticationProviderInterface
{
    private $userProvider;
    private $cacheDir;

    public function __construct(UserProviderInterface $userProvider, $cacheDir)
    {
        $this->userProvider = $userProvider;
        $this->cacheDir     = $cacheDir;
    }

    public function authenticate(TokenInterface $token)
    {

        $user = $this->userProvider->loadUserByUsername($token->getUsername());
        
        $encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
        
        $password = $encoder->encodePassword($token->digest,$user->getSalt());

        if ($user && ($password === $user->getPassword())) {
            $authenticatedToken = new WsseUserToken($user->getRoles());
            $authenticatedToken->setUser($user);

            return $authenticatedToken;
        }

        throw new AuthenticationException('The WSSE authentication failed.');
    }
    

    protected function validateDigest($digest, $nonce, $created, $secret)
    {
        // Expire timestamp after 5 minutes
        if (time() - strtotime($created) > 300) {
            return false;
        }

        // Validate nonce is unique within 5 minutes
        if (file_exists($this->cacheDir.'/'.$nonce) && file_get_contents($this->cacheDir.'/'.$nonce) + 300 < time()) {
            throw new NonceExpiredException('Previously used nonce detected');
        }
        file_put_contents($this->cacheDir.'/'.$nonce, time());

        // Validate Secret
        $expected = base64_encode(sha1(base64_decode($nonce).$created.$secret, true));

        return $digest === $expected;
    }

    public function supports(TokenInterface $token)
    {
        return $token instanceof WsseUserToken;
    }
}