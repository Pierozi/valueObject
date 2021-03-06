<?php

/**
 * Plab\ValueObject.
 */
namespace Plab\ValueObject\Measure\Length;

use Plab\ValueObject\Measure\Length;
use Plab\ValueObject\Measure\LengthInterface;
use Plab\ValueObject\Measure\VoLengthEqualTrait;
use Plab\ValueObject\VoGetterTrait;
use Plab\ValueObject\VoSetterDisallowTrait;

/**
 * Class Nanometer
 * @package Plab\ValueObject\Measure\Length
 */
final class Nanometer implements LengthInterface
{
    use VoGetterTrait;
    use VoSetterDisallowTrait;
    use VoLengthEqualTrait;

    /**
     * @var Length
     */
    private $value;

    /**
     * Meter constructor.
     *
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = new Length('nanometer', $value);
    }
}
