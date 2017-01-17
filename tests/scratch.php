<?php

require dirname(__DIR__).'/vendor/autoload.php';

$meter = new \Plab\ValueObject\Measure\Length('meter', 1);
$cm100 = new \Plab\ValueObject\Measure\Length('centimeter', 100);

var_dump($meter->equalTo($cm100));

$foo = new \Plab\ValueObject\Measure\Length\Meter(1);
$bar = new \Plab\ValueObject\Measure\Length\Centimeter(100);
$baz = new \Plab\ValueObject\Measure\Length\Decimetre(10);

var_dump($foo->equalTo($bar));
var_dump($baz->equalTo($foo));
