<?php

// Speedometer.php


class Speedometer
{
    /**
     * @var float
     */
    const converter = 0.621;

    public static function convertKm(float $km): string
    {
        $miles= $km*self::converter;
        return "$km km est équivalent à $miles miles.";
    }

    public static function convertMiles(float $miles): string
    {
        $km= $miles/self::converter;
        return "$miles miles est équivalent à $km km.";
    }
}

