<?php
$numbers = range(200, 250);

$divisibleBy4 = array_filter($numbers, fn($n) => $n % 4 === 0);

echo implode(",", $divisibleBy4);
?>
