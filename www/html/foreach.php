<?php
// for ($i = 1; $i < 10; $i++) {
//   print "\n";
//   for ($j = 1; $j < 10; $j++) {
//     $val = $i * $j;
//     print "{$val} ";
//   }
// }

function sum()
{
  $result = 0;
  for ($i = 0; $i < 101; $i++) {
    $i % 2 !== 0 && $result += $i;
  }
  return $result;
}

print "\n";
print sum();
print "\n";
