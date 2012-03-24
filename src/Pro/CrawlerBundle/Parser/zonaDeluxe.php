<?php
namespace Pro\CrawlerBundle\Parser;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use Pro\CrawlerBundle\Entity\ZonaDeluxe as deluxe;
use Symfony\Component\DependencyInjection\ContainerInterface;

class zonaDeluxe
{
    private $url;

    private $client;

    private $container = null;

    public function __construct(ContainerInterface $container)
    {
        $this->url="http://www.zonadeluxe.com/discotecas/barcelona/";
        $this->client = new Client();
        $this->container = $container;
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function getLocalBase()
    {
        $discotecas = Array();
        $crawler = $this->client->request('GET',$this->url);
        $discos = $crawler->filter("#parte_discos")->filter(".cajaDisco2")->filter("a");
        $urls = $discos->extract(Array("href"));
        $images = $discos->filter("img")->extract(Array("title","src"));
        for($i=0;$i<count($urls);$i++){
            $discotecas[$i]["url"]=$urls[$i];
            $discotecas[$i]["title"]=$images[$i][0];
            preg_match("#_\d*#is", $images[$i][1], $aux);
            preg_match("#[^_]\d*#is", $aux[0], $aux1);
            preg_match("#(png)|(jpg)#is",$images[$i][1], $aux2);
            $discotecas[$i]["id"]=$aux1[0];
            $discotecas[$i]["image"]="http://www.zonadeluxe.com/logos/".$discotecas[$i]["id"].$aux2[0];
            $latlog = $this->getLatLog($discotecas[$i]["url"]);
            $discotecas[$i]["lat"] = $latlog["lat"];
            $discotecas[$i]["lng"] = $latlog["lng"];
            $localinfo = $this->getLocalInfo($discotecas[$i]["id"]);
            $discotecas[$i]["comment"]=$localinfo["comment"];
        }
        return $discotecas;
    }

    public function getLatLog($url)
    {
        $dicotecas = Array();
        $crawler = $this->client->request('GET',$url);
        $script = $crawler->filter("body")->filter("script")->eq(9)->text();
        preg_match("#var point = new GLatLng\([^\)]*#is", $script, $aux);
        preg_match("#\([^\)]*#is", $aux[0], $aux1);
        preg_match("#[^\(][^\)]*#is", $aux1[0], $aux2);
        $latlog = explode(",",$aux2[0]);
        $dicotecas["lat"]=(float)$latlog[0];
        $dicotecas["lng"]=(float)$latlog[1];
        return $dicotecas;

    }

    public function getLocalInfo($id)
    {
        $dicotecas = Array();
        $url = "http://www.zonadeluxe.com/dialogs/desc_disco.php";
        $crawler = $this->client->request('POST',$url, array("id" => $id));
        $comment = $crawler->filter("p")->text();
        $dicotecas["comment"]=$comment;

        return $dicotecas;
    }

    public function getLocalFlush()
    {
        $em = $this->getContainer()->get('doctrine')->getEntityManager();

        $discotecas = $this->getLocalBase();

        foreach($discotecas as $dicoteca)
        {
            $local = $em->getRepository('ProCrawlerBundle:ZonaDeluxe')->findOneByName($dicoteca["title"]);
            if(!$local)
            {
                $auxloca = new deluxe();
                $auxloca->setName($dicoteca["title"]);
                $auxloca->setComment($dicoteca["comment"]);
                $auxloca->setCreateAt(new \DateTime("now"));
                $auxloca->setIdLocal($dicoteca["id"]);
                $auxloca->setUrl($dicoteca["url"]);
                $auxloca->setUrlImages($dicoteca["image"]);
                $auxloca->setLat($dicoteca["lat"]);
                $auxloca->setLng($dicoteca["lng"]);
                $em->persist($auxloca);
                $em->flush();
            }
            else
            {
                $local->setName($dicoteca["title"]);
                $local->setComment($dicoteca["comment"]);
                $local->setCreateAt(new \DateTime("now"));
                $local->setIdLocal($dicoteca["id"]);
                $local->setUrl($dicoteca["url"]);
                $local->setUrlImages($dicoteca["image"]);
                $local->setLat($dicoteca["lat"]);
                $local->setLng($dicoteca["lng"]);
                $em->flush();
            }
        }


    }

}