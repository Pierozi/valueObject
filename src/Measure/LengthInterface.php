<?php

/**
 * Plab\ValueObject.
 */
namespace Plab\ValueObject\Measure;

interface LengthInterface
{
    //private $value;

    static public function equal(LengthInterface $left, LengthInterface $right) : bool;
    public function equalTo(LengthInterface $right) : bool;
}