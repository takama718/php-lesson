<?php
function array_square($n)
{
    return($n * $n);
	}

	$a = array(1, 2, 3);
	$b = array_map("array_square", $a);
	print_r($b);
	?>
