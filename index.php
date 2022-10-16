<?php
$radicals = [0, 1, 4, 9, 16, 25, 36, 49, 64, 81, 100];
function find($n){
    return (sqrt($n));
}
print_r(array_map("find", $radicals));
