<?php
require_once './vendor/autoload.php';

$colors = new Wujunze\Colors();
// Test some basic printing with Colors class
echo $colors->getColoredString('Testando white string no yellow background.', 'white', 'yellow').PHP_EOL;
echo $colors->getColoredString('Testando Colors class, este é blue string on light gray background.', 'blue', 'light_gray').PHP_EOL;
echo $colors->getColoredString('Testando Colors class, isto é red string on black background.', 'red', 'black').PHP_EOL;
echo $colors->getColoredString('Testando Colors class, isto é cyan string on green background.', 'cyan', 'green').PHP_EOL;
echo $colors->getColoredString('Testando Colors class, isto é cyan string on default background.', 'cyan').PHP_EOL;
echo $colors->getColoredString('Testando Colors class, isto é default string on cyan background.', null, 'cyan').PHP_EOL;
