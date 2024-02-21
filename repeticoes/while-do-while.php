<?php 

const LIMIT = 10;
$count = 0;

while ($count <= LIMIT) {
    echo "$count\r\n";
    $count++;
}

$count = 0;
do {
    echo "$count\r\n";
    $count++;
} while ($count <= LIMIT);


