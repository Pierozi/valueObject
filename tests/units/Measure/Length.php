<?php

namespace Plab\ValueObject\tests\units\Measure;
use atoum\test;

class Length extends test
{
    public function test__construct()
    {
        $this
            ->exception(function () {

                try {
                    new \Plab\ValueObject\Measure\Length();
                } catch (\TypeError $e) {
                    throw new \Exception('Error');
                }
            })
            ->isInstanceOf(\Exception::class);

        $this
            ->if($this->newTestedInstance('meter', 1))
            ->object($this->testedInstance)
            ->isInstanceOf(\Plab\ValueObject\Measure\Length::class)
        ;

        $this
            ->string($this->testedInstance->unit)
                ->isIdenticalTo('meter')

            ->integer($this->testedInstance->value)
                ->isIdenticalTo(1)
        ;
    }

    public function test__base_meter()
    {
        $this->newTestedInstance('meter', 1);

        $this
            ->float($this->testedInstance->base())
            ->isEqualTo(1)
        ;
    }

    public function test__base_decimetre()
    {
        $this->newTestedInstance('decimetre', 10);

        $this
            ->float($this->testedInstance->base())
            ->isEqualTo(1)
        ;

        $this->newTestedInstance('decimetre', 1);

        $this
            ->float($this->testedInstance->base())
            ->isEqualTo(0.1)
        ;
    }
}