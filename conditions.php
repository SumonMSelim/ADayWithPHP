<?php
$another_value = 27;
//$another_value = '27'; // try this too

if ($another_value === 27) // checks both value and data type
{
    $another_msg = 'Both value and data type matched!';
} elseif ($another_value == 27) {
    $another_msg = 'Only value matched!';
} else {
    $another_msg = 'Nothing matched!';
}
echo $another_msg;
echo '<br/>';

// ternary operator
$msg = ($value == 27) ? "A Day with PHP" : "Nothing!";
echo $msg;
echo '<br/>';

// switch
$value = 2;
//$value = 5; // try this too

switch ($value) {
    case 1:
        echo "Value is 1";
        break;
    case 2:
        echo "Value is 2";
        break;
    default:
        echo "No value matches!";
}

