<?php
namespace Core\Foursquare\Parser;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class VenuesSearch
{
    private $url = "https://api.foursquare.com/v2/venues/search?";

    private $clientId;

    private $clientSecret;

    private $parameters = Array();

    public function __construct($clientId="FXZ0YOZZJ525TEVS2U055IAO32SD52BTI0GOOQIULZHYQRUT", $clientSecret="45RPLWS1DSXZ2HPEUME4RBNFZ20UKTXMIQ1YPQ3TRLVRBIFQ")
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }



}