<?php
/**
 * Plab\ValueObject
 */
namespace Plab\ValueObject;
/**
 * Interface \Plab\ValueObject.
 *
 * Abstract class with Immutable access to avoid miss usage.
 *
 * @copyright  Copyright © 2017
 * @license    GPL-3.0
 */
abstract class ValueObject
{
    /**
     * Getter of instance properties.
     *
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
     * Disallow setter.
     *
     * @param $key
     * @param $value
     * @throws \Exception
     */
    public function __set($key, $value)
    {
        throw new \Exception('In ValueObject you are not allowed to setup property');
    }
}
