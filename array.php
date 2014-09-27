<?php
// define an array
$my_array = array(1, 4, 6); // In PHP 5.4+: $my_array = [1, 4, 6];

// accessing a value
echo $my_array[0] . "<br/>"; // first value. index 0

// print the array
print_r($my_array);
echo "<br/>";

// accessing all the value using loop
for ($i = 0; $i < count($my_array); $i++) {
    echo $i . "<br/>";
}

// accessing both key and value using foreach
foreach ($my_array as $key => $value) {
    echo "Key " . $key . " refers to value " . $value . "<br/>";
}