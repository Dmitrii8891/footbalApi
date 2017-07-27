<?php
namespace app\controllers\api;
class ApiFootballOne extends Api
{
    public $apiKey;

    public function __construct($data)
    {   $apiKey = json_decode($data);
        $this->apiKey = $apiKey->apiKey;
    }

    /**
     * @param $from
     * @param $to
     * @return array|mixed
     */
    public function getData($from, $to)
    {
        $curl_options = array(
            CURLOPT_URL => "https://apifootball.com/api/?action=get_events&from=$from&to=$to&APIkey=$this->apiKey",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array( $curl, $curl_options );
        $result = curl_exec( $curl );

        $result = (array) json_decode($result);

        return $result;
    }
}