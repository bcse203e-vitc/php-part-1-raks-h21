<?php
$x = array(1, 2, 3, 4, 5);

echo "Original array :<br>";
foreach ($x as $value) {
    echo $value . " ";
}

array_splice($x, 3, 0, '$');

echo "<br><br>After inserting '\$' the array is :<br>";
foreach ($x as $value) {
    echo $value . " ";
}
?>
