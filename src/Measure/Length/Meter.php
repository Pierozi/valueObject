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
 * Class Meter.
 */
final class Meter implements LengthInterface
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
        $this->value = new Length('meter', $value);
    }
}
