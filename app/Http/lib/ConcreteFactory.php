<?php

namespace DesignPatterns\SimpleFactory;

/**
* 
*/
class ConcreteFactory
{
    function __construct(argument)
    {
        $this->typeList = array(
            'bicycle' => __NAMESPACE__.'\Bicycle',
            'other' => __NAMESPACE__.'\Scooter'
        );
    }

    public function createVehicle($type)
    {
        if(!array_key_exists($type, $this->typeList))
        {
            throw new \InvalidArgumentException("$type is not valid vehicle");
        }

        $className = $this->typeList[$type];

        return new $className;
    }
}