<?php

require_once '../test/PictureTest.php';
require_once 'PHPUnit.php';

$suite = new PHPUnit_TestSuite("PictureTest");
$result = PHPUnit::run($suite);

echo $result->toString();
