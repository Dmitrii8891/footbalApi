<?php
namespace app\controllers\api;
abstract class FactoryApiAbstract
{
    public function create($type, $data)
    {
        switch ($type) {
            case 'One':
                return new ApiFootballOne($data);
                break;
            case 'Two':
                return new ApiFootballTwo($data);
                break;
            default:
                return new ApiFootballThree($data);
        }
    }
}