<?
/* Big php-script generator for Performance test  */

$out = '';
$out .= '$a = 0;' . PHP_EOL;

for($i = 1; $i < 1000000; $i++) {
	$out .= '$a + ' . $i . ';' . PHP_EOL;
}

file_put_contents('bigphp.php', $out);

?>