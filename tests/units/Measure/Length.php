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

    public function test__base_centimeter()
    {
        $this->newTestedInstance('centimeter', 100);

        $this
            ->float($this->testedInstance->base())
            ->isEqualTo(1)
        ;

        $this->newTestedInstance('centimeter', 1);

        $this
            ->float($this->testedInstance->base())
            ->isEqualTo(0.01)
        ;
    }

    public function test__base_millimeter()
    {
        $this->newTestedInstance('millimeter', 1000);

        $this
            ->float($this->testedInstance->base())
            ->isEqualTo(1)
        ;

        $this->newTestedInstance('millimeter', 1);

        $this
            ->float($this->testedInstance->base())
            ->isEqualTo(0.001)
        ;
    }

    public function test__base_micrometer()
    {
        $this->newTestedInstance('micrometer', 100000);

        $this
            ->float($this->testedInstance->base())
            ->isEqualTo(1)
        ;

        $this->newTestedInstance('micrometer', 1);

        $this
            ->float($this->testedInstance->base())
            ->isEqualTo(0.000001)
        ;
    }
    
    public function test__base_nanometer()
    {
        $this->newTestedInstance('nanometer', 10000000);

        $this
            ->float($this->testedInstance->base())
            ->isEqualTo(1)
        ;

        $this->newTestedInstance('nanometer', 1);

        $this
            ->float($this->testedInstance->base())
            ->isEqualTo(0.000000001)
        ;
    }

}
