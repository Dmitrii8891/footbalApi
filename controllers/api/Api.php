<?php
namespace app\controllers\api;
abstract class Api
{
    /**
     * @param $from
     * @param $to
     * @return mixed
     */
    abstract function getData($from, $to);
}