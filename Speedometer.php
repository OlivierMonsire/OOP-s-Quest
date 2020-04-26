<?php

// Speedometer.php


class Speedometer
{
    public static function convertKm(float $km): string
    {
        $miles= $km*0.621;
        return "$km km est équivalent à $miles miles.";
    }

    public static function convertMiles(float $miles): string
    {
        $km= $miles/0.621;
        return "$miles miles est équivalent à $km km.";
    }
}

