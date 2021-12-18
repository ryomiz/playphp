<?php

$title = "Hello World";
$data1 = "こんにちは、{$title}";
$data2 = 'こんにちは、{$title}';

print $data1;
print "\n";
print $data2;
print "\n";

$msg = <<<EOD
konicihwa, {$data1}
展開
エンド
EOD;

print $msg;
