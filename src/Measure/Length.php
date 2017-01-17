<?php

declare (strict_types=1);

namespace Plab\ValueObject\Measure;

use Plab\ValueObject\ValueObject;

/**
 * Class Length.
 */
final class Length extends ValueObject
{
    protected $unit;
    protected $value;

    const UNITS = [
        'meter' => 1,
        'decimetre' => 0.1,
        'centimeter' => 0.01,
        'millimeter' => 0.001,
    ];

    const SYMBOL = [
        'meter' => 'm',
        'decimetre' => 'dm',
        'centimeter' => 'cm',
        'millimeter' => 'mm',
    ];

    /**
     * Length constructor.
     *
     * @param string $unit
     * @param int    $value
     *
     * @throws \Exception
     */
    public function __construct(string $unit, int $value)
    {
        if (false === array_keys(static::units, $unit)) {
            throw new \Exception('Unit specified not supported');
        }

        $this->unit = $unit;
        $this->value = $value;

        if (0 > $this->value) {
            throw new \Exception('Value cannot be negative');
        }
    }

    /**
     * Return the value calculated with the base unit (meter).
     *
     * @return int
     */
    public function base() : float
    {
        return (float) ($this->value * static::units[$this->unit]);
    }

    /**
     * Compare left and right for equality values.
     *
     * @param Length $left
     * @param Length $right
     *
     * @return bool
     */
    public function equal(Length $left, Length $right) : bool
    {
        return $left->base() === $right->base();
    }

    /**
     * Compare current instance with another valueObject.
     *
     * @param $right
     *
     * @return bool
     */
    public function equalTo($right)
    {
        return $this->equal($this, $right);
    }
}
