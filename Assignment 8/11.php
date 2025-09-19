<?php
function change_case($array, $mode = 'lower') {
    if ($mode === 'lower') {
        return array_map('strtolower', $array);
    } elseif ($mode === 'upper') {
        return array_map('strtoupper', $array);
    } else {
        return $array; 
    }
}

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

$lowercase = change_case($Color, 'lower');
echo "Values are in lower case.<br>";
print_r($lowercase);

$uppercase = change_case($Color, 'upper');
echo "<br><br>Values are in upper case.<br>";
print_r($uppercase);
?>

