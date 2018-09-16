<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Fitri\Distance;

$distance = Distance\circle_distance('-7.795580', '110.369492', '-6.917464', '107.619125');

echo $distance.' km';
