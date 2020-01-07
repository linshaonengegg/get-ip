<?php
require 'vendor/autoload.php';

//hello world
$hello = new Sky\Demo\Hello('worlddd ');

echo $hello->hello() . PHP_EOL;

$local = new Sky\Demo\Common\Local();
echo $local->show();