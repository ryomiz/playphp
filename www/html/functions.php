<?php

$arr = [];

for ($i = 0; $i < 100; $i++) {
  $arr[] = $i;
}

$oddArr = array_filter($arr, function (int $num) {
  return $num % 2 === 1;
});

$sum = array_reduce($oddArr, function ($carry, $val) {
  return $carry + $val;
});

$result = $sum;

print "\n";
print_r($result);
print "\n";
