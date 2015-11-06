# php-clicolor
A static class which outputs colored text when used in text terminals.

### Usage

    <?php
    use CliColor\CliColor as CliColor;
    echo CliColor::boldRed("DANGER!") . PHP_EOL;
    
This class is a work in progress and as such, only a few colors have been added. To see the full list of supported colors open src/CliColor.php and look at the $colors array.
