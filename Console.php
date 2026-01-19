<?php
require 'vendor/autoload.php';
use League\CLImate\CLImate;

$climate = new CLImate();


$climate ->red('red');
$climate ->green('green');
$climate ->blue('blue');
$climate ->backgroundLightMagenta('ass');

$climate -> out('') ->red('Loading...') -> backgroundLightMagenta('') -> red('');
$progress = $climate-> progress() -> total (100);
for ($i = 0; $i <= 100; $i ++) {
    $progress->current($i);
    usleep(10000);
}


$climate -> white('');

$climate->table([
    ['Name', 'City', 'Age'],
    ['Kirill', 'Minsk', 15],
    ['Fyodor', 'Mosocw', 24],
    ['Oleg', 'Kiev', 10]
]) -> red('');

$climate -> draw('bender');

?>