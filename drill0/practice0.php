<?php
$a = range(1, 5);

array_map(function($i){
    return $i * $i;
}, $a);
// Array
// (
//     [0] => 2
//     [1] => 4
//     [2] => 6
//     [3] => 8
//     [4] => 10
// )
var_dump(array_map(5,$a));

array_reduce($a, function($carry, $next){
    return $carry + $next;
});
// 15 = 1 + 2 + ...


array_reduce($a, function($carry, $next){
    return $carry * $next;
}, 1);
// 120 = 1 * 2 * ...

array_filter($a, function($i){
    return $i % 2 === 0;
});
// Array
// (
//     [1] => 2
//     [3] => 4
// )

array_values(["a"=>1, "b"=>2, "c"=>3]);
// [1,2,3]

array_keys(["a"=>1, "b"=>2, "c"=>3]);
// ["a","b","c"]
