<?php

// Speedometer.php


class Speedometer
{
    public static function myStaticMethod(int $km): string
    {
        $miles= $km*0.621;
        return "$km km est équivalent à $miles miles.";
    }
}

