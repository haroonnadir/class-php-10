<?php
    $array = [1, 2, 3, 4, 5];
    // Callback function to sum elements
    function sum($carry, $item) {
        return $carry + $item;
    }
    // Reduce array to a single sum value
    $result = array_reduce($array, 'sum', 0);
    // Result: 15
    echo $result;

    echo"<br>";
    $array = ['Hello', 'World', 'PHP'];
    // Callback function to concatenate strings
    function concatenate($carry, $item) {
        return $carry . ' ' . $item;
    }
    // Reduce array to a single concatenated string
    $result = array_reduce($array, 'concatenate');
    // Result: 'Hello World PHP'
    echo $result;

    echo"<br>";
    $array = [4, 2, 8, 6];
    // Callback function to find the maximum value
    function max_value($carry, $item) {
        return ($carry > $item) ? $carry : $item;
    }
    // Reduce array to the maximum value
    $result = array_reduce($array, 'max_value');
    // Result: 8
    echo $result;

echo"<br>";
$array = [2, 3, 5, 7];
// Anonymous function to calculate the product of values
$result = array_reduce($array, function($carry, $item) {
    return $carry * $item;
}, 1);
// Result: 210
echo $result;

echo"<br>";
$array = [1, 2, 3, 4, 5];
// Callback function to concatenate values
$result = array_reduce($array, function($carry, $item) {
    return $carry . $item;
});
// Result: '12345'
echo $result;


echo"<br>";
$array = [3, 1, 4, 1, 5, 9];
// Sort the array
sort($array);
// Result: [1, 1, 3, 4, 5, 9]
print_r($array);


echo"<br>";
$array = [3, 1, 4, 1, 5, 9];
// Sort the array in descending order
rsort($array);
// Result: [9, 5, 4, 3, 1, 1]
print_r($array);


echo"<br>";

$array = ['a' => 3, 'b' => 1, 'c' => 4];
// Sort the array by values while maintaining keys
asort($array);
// Result: ['b' => 1, 'a' => 3, 'c' => 4]
print_r($array);

echo"<br>";
$array = ['a' => 3, 'b' => 1, 'c' => 4];
// Sort the array by values in descending order while maintaining keys
arsort($array);
// Result: ['c' => 4, 'a' => 3, 'b' => 1]
print_r($array);

echo"<br>";
$array = ['c' => 1, 'a' => 3, 'b' => 2];
// Sort the array by keys
ksort($array);
// Result: ['a' => 3, 'b' => 2, 'c' => 1]
print_r($array);

echo"<br>";
$array = ['c' => 1, 'a' => 3, 'b' => 2];
// Sort the array by keys in descending order
krsort($array);
// Result: ['c' => 1, 'b' => 2, 'a' => 3]
print_r($array);


echo"<br>";

$array = [3, 1, 4, 1, 5, 9];
// Callback function to sort in ascending order
function compare($a, $b) {
    return $a - $b;
}
// Sort the array using the custom comparison function
usort($array, 'compare');
// Result: [1, 1, 3, 4, 5, 9]
print_r($array);


echo"<br>";
$array = ['a' => 3, 'b' => 1, 'c' => 4];
// Callback function to sort in ascending order
function compare_values($a, $b) {
    return $a - $b;
}
// Sort the array using the custom comparison function while maintaining keys
uasort($array, 'compare_values');
// Result: ['b' => 1, 'a' => 3, 'c' => 4]
print_r($array);




echo"<br>";
$array = ['b' => 1, 'a' => 3, 'c' => 4];
// Callback function to sort keys in alphabetical order
function compare_keys($a, $b) {
    return strcmp($a, $b);
}
// Sort the array using the custom key comparison function
uksort($array, 'compare_keys');
// Result: ['a' => 3, 'b' => 1, 'c' => 4]
print_r($array);


echo"<br>";
$array = [1, 2, 3, 4, 5];
// Loop through each element
foreach ($array as $value) {
    echo $value . " ";
}
// Output: 1 2 3 4 5


echo"<br>";
$array = ['a' => 1, 'b' => 2, 'c' => 3];
// Loop through each element with keys
foreach ($array as $key => $value) {
    echo "$key => $value\n";
}
// Output:
// a => 1
// b => 2
// c => 3

echo"<br>";
$array = [1, 2, 3];
// Callback function to add 10 to each element
function add_ten(&$value, $key) {
    $value += 10;
}
// Apply callback
array_walk($array, 'add_ten');
// Result: [11, 12, 13]
print_r($array);

echo"<br>";
$array = [
    'fruit' => ['apple', 'banana'],
    'vegetables' => ['carrot', 'celery']
];
// Callback function to convert values to uppercase
function uppercase(&$value, $key) {
    $value = strtoupper($value);
}
// Apply callback recursively
array_walk_recursive($array, 'uppercase');
// Result: ['fruit' => ['APPLE', 'BANANA'], 'vegetables' => ['CARROT', 'CELERY']]
print_r($array);

echo"<br>";
$array = [1, 2, 3];
// Callback function to square each element
function square($value) {
    return $value * $value;
}
// Apply callback
$result = array_map('square', $array);
// Result: [1, 4, 9]
print_r($result);


echo"<br>";
$array = [1, 2, 3, 4, 5];
// Callback function to filter even numbers
function is_even($value) {
    return $value % 2 === 0;
}
// Filter the array
$result = array_filter($array, 'is_even');
// Result: [2, 4]
print_r($result);


echo"<br>";
$array = [1, 2, 3, 4, 5];
// Callback function to calculate the sum
function sum($carry, $item) {
    return $carry + $item;
}
// Reduce the array to the sum of its elements
$result = array_reduce($array, 'sum', 0);
// Result: 15
echo $result;


echo"<br>";
$array = [
    ['id' => 1, 'name' => 'John'],
    ['id' => 2, 'name' => 'Jane'],
];
// Get the names
$result = array_column($array, 'name');
// Result: ['John', 'Jane']
print_r($result);



echo"<br>";
$array = [
    ['id' => 1, 'name' => 'John'],
    ['id' => 2, 'name' => 'Jane'],
];
// Get the names indexed by id
$result = array_column($array, 'name', 'id');
// Result: [1 => 'John', 2 => 'Jane']
print_r($result);

?>