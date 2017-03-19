<?php

/**
 * Plab\ValueObject.
 */
namespace Plab\ValueObject\Measure;

interface LengthInterface
{
    public static function equal(LengthInterface $left, LengthInterface $right) : bool;
    public function equalTo(LengthInterface $right) : bool;
}
