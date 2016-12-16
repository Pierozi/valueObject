<?php

namespace Plab\ValueObject;

abstract class ValueObject
{
    /**
     * @param string $key
     * @return mixed
     * @throws \Exception
     */
    public function __get(string $key)
    {
        if (!property_exists($this, $key)) {
            throw new \Exception('Property not exist');
        }

        return $this->$key;
    }

    /**
     * @param $key
     * @param $value
     * @throws \Exception
     */
    public function __set($key, $value)
    {
        throw new \Exception('In ValueObject you are not allowed to setup property');
    }

    /**
     * Compare left and right if they are equal
     * @param $left
     * @param $right
     */
    abstract public function equal($left, $right);
}
