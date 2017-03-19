<?php

/**
 * Plab\ValueObject.
 */
namespace Plab\ValueObject;

/**
 * Class VoSetterDisallowTrait
 * @package Plab\ValueObject
 */
trait VoSetterDisallowTrait
{
    /**
     * Disallow setter.
     *
     * @param $property
     * @param $value
     *
     * @throws \Exception
     */
    public function __set($property, $value)
    {
        throw new \Exception('In ValueObject you are not allowed to setup property');
    }
}
