<?php
$n = 120;
$factor = array();
for ($i=2; $i < $n; $i++) { 
	if ($n % $i == 0) {
		$factor[] = $i;
	}
}

print_r($factor);
?>