<?php
/**
 * Plab\ValueObject.
 */
namespace Plab\ValueObject;

/**
 * Class ValueObject.
 */
abstract class ValueObject
{
    /**
     * Getter of instance properties.
     *
     * @param string $key
     *
     * @return mixed
     *
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
     * Disallow setter.
     *
     * @param $key
     * @param $value
     *
     * @throws \Exception
     */
    public function __set($key, $value)
    {
        throw new \Exception('In ValueObject you are not allowed to setup property');
    }
}
