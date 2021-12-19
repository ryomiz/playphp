<?php


// function getTriangleArea(float $base, float $height): float
// {
//   return $base * $height / 2;
// }

// function getDiamondArea(float $diagonal1, float $diagonal2): float
// {
//   return $diagonal1 * $diagonal2 / 2;
// }


// function product(float $val1, float ...$args): float
// {

//   $result = $val1;

//   foreach ($args as $val) {
//     $result = $result * $val;
//   }

//   return $result;
// }

$arr = [3, 7, 9];

$result = array_map(
  fn ($val) =>   $val * $val,
  $arr
);

print "\n";
print_r($result);
print "\n";
