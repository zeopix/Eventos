<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pro\CrawlerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/**
 * @author Antoine Hérault <antoine.herault@gmail.com>
 */
class zonaDeluxeCommand extends ContainerAwareCommand
{
    /**
     * @see Command
     */
    protected function configure()
    {
        $this
            ->setName('pro:crawler:zonaDeluxe')
            ->setDescription('Crawler de zona deluxe ')
            ->setDefinition(array(

        ))
            ->setHelp(<<<EOT
The <info>pro:crawler:zonaDeluxe</info> Crawler de zona deluxe:
EOT
        );
    }

    /**
     * @see Command
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //$source = $input->getArgument('source');

        $crawl = $this->getContainer()->get('pro_crawler.parser.zonaDeluxe')->getLocalFlush();


        $output->writeln("Hecho");
    }
}