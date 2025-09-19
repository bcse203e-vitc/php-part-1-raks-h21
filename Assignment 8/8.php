<?php
$people = array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Ramesh"=>"40");

echo "<strong>Original Array:</strong><br>";
print_r($people);

asort($people);
echo "<br><br><strong>a) Ascending order sort by value:</strong><br>";
print_r($people);

ksort($people);
echo "<br><br><strong>b) Ascending order sort by key:</strong><br>";
print_r($people);

arsort($people);
echo "<br><br><strong>c) Descending order sort by value:</strong><br>";
print_r($people);

krsort($people);
echo "<br><br><strong>d) Descending order sort by key:</strong><br>";
print_r($people);
?>
