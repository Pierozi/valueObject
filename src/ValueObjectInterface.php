<?php
/**
 * Plab\ValueObject
 */
namespace Plab\ValueObject;
/**
 * Interface \Plab\ValueObject\ValueObjectInterface.
 *
 * Interface representing an immutable ValueObject
 *
 * @copyright  Copyright © 2017
 * @license    GPL-3.0
 */
interface ValueObjectInterface
{
    /**
     * Compare left and right for equality values.
     *
     * @param ValueObjectInterface $left
     * @param ValueObjectInterface $right
     * @return bool
     */
    public function equal(ValueObjectInterface $left, ValueObjectInterface $right) : bool;

    /**
     * Compare current instance with another valueObject.
     *
     * @param ValueObjectInterface $object
     * @return mixed
     */
    public function equalTo(ValueObjectInterface $object) : bool;
}
