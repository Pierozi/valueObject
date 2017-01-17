<?php

namespace Plab\ValueObject\Measure\Length;

use Plab\ValueObject\Measure\Length;
use Plab\ValueObject\ValueObject;

final class Decimetre extends ValueObject
{
    /**
     * @var Length
     */
    protected $value;

    public function __construct(int $value)
    {
        $this->value = new Length('decimetre', $value);
    }

    /**
     * Compare left and right for equality values.
     *
     * @param Length $left
     * @param Length $right
     * @return bool
     */
    public function equal(ValueObject $left, ValueObject $right) : bool
    {
        return $left->value->equal($left->value, $right->value);
    }

    /**
     * Compare current instance with another valueObject.
     *
     * @param $right
     * @return bool
     */
    public function equalTo($right)
    {
        return $this->equal($this, $right);
    }
}