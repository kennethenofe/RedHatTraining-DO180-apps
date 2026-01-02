<?php
header("Content-Type: text/plain");

if  (!isset($_GET['c'])) {
	echo "Usage: ?c=25 converts 25°C to Fahrenheit\n";
	exit;
}

$c = floatval($_GET['c']);
$f = ($c * 9/5) + 32;

echo "{$c}C = {$f}F\n";
?>

