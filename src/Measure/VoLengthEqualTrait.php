<?php

/**
 * Plab\ValueObject.
 */
namespace Plab\ValueObject\Measure;

/**
 * Class VoEqualTrait
 * @package Plab\ValueObject
 */
trait VoLengthEqualTrait
{
    /**
     * Compare left and right for equality values.
     *
     * @param LengthInterface $left
     * @param LengthInterface $right
     * @return bool
     */
    static public function equal(LengthInterface $left, LengthInterface $right) : bool
    {
        return $left->value->equalTo($right->value);
    }

    /**
     * Compare current instance with another valueObject.
     *
     * @param LengthInterface $right
     * @return bool
     */
    public function equalTo(LengthInterface $right) : bool
    {
        return $this->value->equalTo($right->value);
    }
}
