<?php
function mul(...$integers) {
    $acc = 1;
    foreach ($integers as $i) {
        $acc *= $i;
    }
    return $acc;
}
echo mul(1,2,3,4);
