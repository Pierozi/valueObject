<?php

/**
 * Plab\ValueObject.
 */
namespace Plab\ValueObject;

/**
 * Class VoGetterTrait
 * @package Plab\ValueObject
 */
trait VoGetterTrait
{
    public function get(string $property)
    {
        if (!property_exists($this, $property)) {
            throw new \Exception('Property not exist');
        }

        return $this->$property;
    }

    public function __get(string $property)
    {
        if (!property_exists($this, $property)) {
            throw new \Exception('Property not exist');
        }

        return $this->$property;
    }
}
