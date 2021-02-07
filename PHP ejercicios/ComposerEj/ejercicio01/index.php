<?php
require "vendor/autoload.php";
use SebastianBergmann\Timer\Timer;

Timer::start();
sleep(2);



for ($x=0; $x<100;$x++){
    echo rand(0,10);

}
$duration = Timer::stop();

echo "<p>" . Timer::secondsToTimeString($duration) . "</p>";
