<?php
require_once 'vendor/autoload.php';

use DG\Twitter\Twitter;



$consumerKey = '20KjZ7X5m3E745wAR7AyZo7R0';
$consumerSecret = 'by73asCYnpRnw8T3eqf2p7KRVWBvoon8oPNRCeYhs0nkNjzba5';

$accessToken = '3303751769-XXjnm0DGVE0whICTHJmmbPybN1gkj9kfaS4JTn0';
$accessTokenSecret = 'pUt9xtKjNEpP9RyHJ2VQKlQlAhszw3tba8ExLBXK8bGvg';


$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);


$results = $twitter->search('filmao');


foreach($results as $status)
{
    try {
        $statuses = $twitter->request('statuses/retweet/'.$status->id.'.json', 'POST', ['id' => 21]);
    } catch (Exception $e) {
        echo 'Erro: '.$e->getMessage().'<br>';
    }
}

//