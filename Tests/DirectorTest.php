<?php

namespace Builder\Tests;

use Builder\TruckBuilder;
use Builder\CarBuilder;
use Builder\Director;

require __DIR__ . "/../Parts/Vehicle.php";
foreach (array_merge(glob("*.php"), glob("Parts/*.php")) as $filename) {
    if (file_exists($file = __DIR__ . '/../' . $filename)) {
        require_once $file;
    }
}

class DirectorTest
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        return (new Director())->build($truckBuilder);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        return (new Director())->build($carBuilder);
    }
}

$director = new DirectorTest();
print_r($director->testCanBuildCar());
echo "\n";
print_r($director->testCanBuildTruck());
echo "\n";
