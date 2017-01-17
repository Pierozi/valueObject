<?php

// .atoum.php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use mageekguy\atoum\reports;
use mageekguy\atoum\reports\telemetry;
use mageekguy\atoum\writers\std;

$extension = new reports\extension($script);
$extension->addToRunner($runner);

$script->addDefaultReport();

$telemetry = new telemetry();
$telemetry->setProjectName('plab/value-object');
$telemetry->addWriter(new std\out());
$runner->addReport($telemetry);

