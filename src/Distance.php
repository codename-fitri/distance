<?php

declare(strict_types=1);

namespace Fitri\Distance;

function circle_distance($lat1, $lon1, $lat2, $lon2)
{
    $rad = M_PI / 180;
    return acos(sin($lat2*$rad) * sin($lat1*$rad) + cos($lat2*$rad) * cos($lat1*$rad) * cos($lon2*$rad - $lon1*$rad)) * 6371; // Kilometers
}
