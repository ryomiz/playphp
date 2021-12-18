<?php

$val1 = "108";
$val2 = "13";

function plus(string $val1, string $val2): string
{
  return $val1 . $val2;
}

$data1 = plus($val1, $val2);

print "\n";
print $data1;
print "\n";
