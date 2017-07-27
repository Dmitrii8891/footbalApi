<?php

class ApiFootballOne extends Api
{
    public function getData()
    {
        $APIkey='3681972507b2eda3b2f50a5e4db9e7dc3b802789b7295e237247a7784faa15a3';
        $from = '2017-02-13';
        $to = '2017-03-13';

        $curl_options = array(
            CURLOPT_URL => "https://apifootball.com/api/?action=get_events&from=$from&to=$to&APIkey=$APIkey",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array( $curl, $curl_options );
        $result = curl_exec( $curl );

        $result = (array) json_decode($result);
        var_dump($result);
    }
}