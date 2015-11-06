<?php

namespace CliColor;

class CliColor
{

    public static $colors = array(
        'reset' => "\e[0m",

        // regular
        'regularRed' => "\e[0;31m",
        'regularGreen' => "\e[0;32m",
        'regularYellow' => "\e[0;33m",

        // bold
        'boldRed' => "\e[1;31m",
        'boldGreen' => "\e[1;32m",
        'boldWhite' => "\e[1;37m",
        'boldYellow' => "\e[1;33m"
    );

    public static function __callStatic($name, $arguments)
    {
        $color = static::$colors[$name];
        if (posix_isatty(STDOUT)) {
            return $color . $arguments[0] . static::$colors['reset'];
        }
        return $arguments[0];
    }
}
