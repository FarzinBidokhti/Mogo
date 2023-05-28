<?php

use Synon\Mogo\Mogo;

require_once "vendor/autoload.php";

$exportObject = new Mogo('localhost', '', '', '', '');
echo $exportObject->export();
