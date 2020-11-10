<?php

require_once "../vendor/autoload.php";

use App\Service\ChangeOptimizer\ChangeOptimizer;

$changeOptimizer = new ChangeOptimizer();
$change = $changeOptimizer->getOptimalChange(99);
var_dump($change);

