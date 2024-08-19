<?php
// $array = [1, 2, 3];
// array_push($array, 4, 5);
// // Result: [1, 2, 3, 4, 5]
// print_r($array);


echo"<br>";
// $array = [1, 2, 3, 4];
// $last = array_pop($array);
// // Result: [1, 2, 3]
// // $last: 4
// print_r($array);
// echo $last;


echo"<br>";
// $array = [1, 2, 3, 4];
// $first = array_shift($array);
// // Result: [2, 3, 4]
// // $first: 1
// print_r($array);
// echo $first;


// echo"<br>";
// $array = [2, 3, 4];
// array_unshift($array, 1);
// // Result: [1, 2, 3, 4]
// print_r($array);


echo"<br>";

// $array = [1, 2, 3, 4, 5];
// $removed = array_splice($array, 2, 2);
// // Result: [1, 2, 5]
// // $removed: [3, 4]
// print_r($array);
// print_r($removed);

echo"<br>";

// $array = [1, 2, 3, 4, 5];
// $removed = array_splice($array, 2, 1, [6, 7]);
// // Result: [1, 2, 6, 7, 4, 5]
// // $removed: [3]
// print_r($array);
// print_r($removed);

echo"<br>";

// $array1 = [1, 2, 3];
// $array2 = [4, 5, 6];
// $result = array_merge($array1, $array2);
// // Result: [1, 2, 3, 4, 5, 6]
// print_r($result);

echo"<br>";

// $array1 = ['a' => ['b' => 'c']];
// $array2 = ['a' => ['d' => 'e']];
// $result = array_merge_recursive($array1, $array2);
// // Result: ['a' => ['b' => 'c', 'd' => 'e']]
// print_r($result);

echo"<br>";

// $array = [1, 2, 3, 4, 5];
// $slice = array_slice($array, 2, 2);
// // Result: [3, 4]
// print_r($slice);

echo"<br>";
// $array = ['a' => 1, 'b' => 2];
// $exists = array_key_exists('a', $array);
// // Result: true
// echo $exists ? 'Key exists' : 'Key does not exist';

echo"<br>";

$array = ['a' => 1, 'b' => 2, 'c' => 1];
$keys = array_keys($array, 1);
// Result: ['a', 'c']
print_r($keys);

echo"<br><br>";

$array = ['a' => 1, 'b' => 2];
$values = array_values($array);
// Result: [1, 2]
print_r($values);


echo"<br><br>";


function array_extract(array $array, array $keys): array {
    $result = [];
    foreach ($keys as $key) {
        if (array_key_exists($key, $array)) {
            $result[$key] = $array[$key];
        }
    }
    return $result;
}
// Example usage
$array = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = ['a', 'c'];
$extracted = array_extract($array, $keys);
// Result: ['a' => 1, 'c' => 3]
print_r($extracted);

echo"<br><br>";

$color = 'blue';
$size = 'medium';
$shape = 'circle';
$result = compact('color', 'size', 'shape');
// Result: ['color' => 'blue', 'size' => 'medium', 'shape' => 'circle']
print_r($result);

echo"<br><br>";
// Range from 1 to 10
$range = range(1, 10);
// Result: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
print_r($range);

echo"<br><br>";
// Range from 0 to 20 with a step of 5
$range = range(0, 20, 5);
// Result: [0, 5, 10, 15, 20]
print_r($range);

echo"<br><br>";

// Range from 'a' to 'e'
$range = range('a', 'e');
// Result: ['a', 'b', 'c', 'd', 'e']
print_r($range);


echo"<br><br>";

// Range from 10 to 1 in reverse
$range = range(10, 1);
// Result: [10, 9, 8, 7, 6, 5, 4, 3, 2, 1]
print_r($range);

echo"<br><br>";

// Range from 10 to 1 with a step of -2
$range = range(10, 1, -2);
// Result: [10, 8, 6, 4, 2]
print_r($range);


$string = "apple,banana,cherry";
$array = explode(",", $string);
// Result: ['apple', 'banana', 'cherry']
print_r($array);


echo"<br><br>";

$string = "apple,banana,cherry,dates";
$array = explode(",", $string, 3);
// Result: ['apple', 'banana', 'cherry,dates']
print_r($array);

echo"<br><br>";

$string = "one|two|three";
$array = explode("|", $string);
// Result: ['one', 'two', 'three']
print_r($array);

echo"<br><br>";
$array = ['apple', 'banana', 'cherry'];
$string = implode(",", $array);
// Result: "apple,banana,cherry"
echo $string;

echo"<br><br>";
$array = ['one', 'two', 'three'];
$string = implode(" | ", $array);
// Result: "one | two | three"
echo $string;
echo"<br><br>";

$array = ['a', 'b', 'c'];
$string = implode("", $array);
// Result: "abc"
echo $string;

echo"<br><br>";
$string = "hello";
$array = str_split($string);
// Result: ['h', 'e', 'l', 'l', 'o']
print_r($array);

echo"<br><br>";
$string = "abcdefghij";
$array = str_split($string, 3);
// Result: ['abc', 'def', 'ghi', 'j']
print_r($array);

echo"<br><br>";

$string = "123456789";
$array = str_split($string, 4);
// Result: ['1234', '5678', '9']
print_r($array);


echo"<br><br>";
$string = "abcdefghijklmnopqrstuvwxyz";
$chunked = chunk_split($string, 5);
// Result: "abcde\nfghij\nklmno\npqrst\nuvwxy\nz"
echo $chunked;

echo"<br><br>";
$string = "1234567890";
$chunked = chunk_split($string, 3, "-");
// Result: "123-456-789-0-"
echo $chunked;

echo"<br><br>";
$string = "abcdefghijkl";
$chunked = chunk_split($string, 4, " ");
// Result: "abcd efgh ijkl "
echo $chunked;

echo"<br><br>";

$originalString = "Hello World!";
$lowercaseString = strtolower($originalString);
echo $lowercaseString; // Output: hello world!

echo"<br><br>";

$originalString = "Hello World!";
$uppercaseString = strtoupper($originalString);
echo $uppercaseString; // Output: HELLO WORLD!

echo"<br><br>";

$string = "Hello, world!";
$length = strlen($string);
echo $length; // Output: 13

echo"<br><br>";

$str = "HAROONNADIR"; 
$length = mb_strlen($str); 
echo "The length of the string is $length"; 

echo"<br><br>";

$str = "This is nice";
echo strlen($str)."<br>"; // Using strlen() to return the string length
echo substr_count($str,"is")."<br>"; // The number of times "is" occurs in the string
echo substr_count($str,"is",2)."<br>"; // The string is now reduced to "is is nice"
echo substr_count($str,"is",3)."<br>"; // The string is now reduced to "s is nice"
echo substr_count($str,"is",3,3)."<br>"; // The string is now reduced to "s i"

echo"<br><br>";
$haystack = "Hello, world!";
$needle = "world";
$position = strpos($haystack, $needle);
echo $position;  // Output: 7

echo"<br><br>";
$haystack = "Hello, world! World is big.";
$needle = "world";
$position = strrpos($haystack, $needle);
echo $position;  // Output: 19

echo"<br><br>";
$haystack = "Hello, World!";
$needle = "world";
$position = stripos($haystack, $needle);
echo $position;  // Output: 7

echo"<br><br>";
$haystack = "Hello, World! World is big.";
$needle = "world";
$position = strripos($haystack, $needle);
echo $position;  // Output: 19

echo"<br><br>";
$haystack = "Hello, world!";
$needle = "world";
$result = strstr($haystack, $needle);
echo $result;  // Output: world!

echo"<br><br>";
$haystack = "Hello, world! World is big.";
$needle = "world";
$result = strrchr($haystack, $needle);
echo $result;  // Output: world! World is big.

echo"<br><br>";

$haystack = "Hello, world!";
$pattern = '/world/';
if (preg_match($pattern, $haystack, $matches, PREG_OFFSET_CAPTURE)) {
    echo $matches[0][1];  // Output: 7
}

echo"<br><br>";
$haystack = "Hello, world!";
$needle = "world";
$result = strstr($haystack, $needle);
echo $result;  // Output: world!

echo"<br><br>";
$haystack = "Hello, World!";
$needle = "world";
$result = stristr($haystack, $needle);
echo $result;  // Output: World!

echo"<br><br>";
$haystack = "Hello, world!";
$needle = "world";
$result = strchr($haystack, $needle);
echo $result;  // Output: world!

echo"<br><br>";
$haystack = "Hello, world! World is big.";
$needle = "world";
$result = strrchr($haystack, $needle);
echo $result;  // Output: world! World is big.

echo"<br><br>";
$haystack = "Hello, world!";
$charList = "w,!";
$result = strpbrk($haystack, $charList);
echo $result;  // Output: world!

echo"<br><br>";
$string = "Hello, world!";
$substring = substr($string, 7);
echo $substring;  // Output: world!

echo"<br><br>";
$string = "Hello, world!";
$substring = substr($string, 7, 5);
echo $substring;  // Output: world

echo"<br><br>";
$string = "Hello, world!";
$substring = substr($string, -6);
echo $substring;  // Output: world!

echo"<br><br>";
$string = "Hello, world!";
$substring = substr($string, 0, -7);
echo $substring;  // Output: Hello,

echo"<br><br>";
$string = "Hello, world!";
$substring = substr($string, -6, -1);
echo $substring;  // Output: world

echo"<br><br>";
// Replace a single occurrence
$text = "Hello, world!";
$newText = str_replace("world", "PHP", $text);
echo $newText;  // Output: Hello, PHP!
// Replace multiple occurrences
$text = "apple orange banana apple";
$newText = str_replace("apple", "grape", $text);
echo $newText;  // Output: grape orange banana grape
// Using arrays for search and replace
$text = "I like apple and banana.";
$search = ["apple", "banana"];
$replace = ["orange", "kiwi"];
$newText = str_replace($search, $replace, $text);
echo $newText;  // Output: I like orange and kiwi.

echo"<br><br>";
$text = "Hello, World!";
$newText = str_ireplace("world", "PHP", $text);
echo $newText;  // Output: Hello, PHP!

echo"<br><br>";
// Replace using regular expression
$text = "Hello, World! Welcome to the world of PHP.";
$newText = preg_replace("/world/i", "universe", $text);
echo $newText;  // Output: Hello, Universe! Welcome to the universe of PHP.
// Replace only the first occurrence
$text = "One, two, three, one";
$newText = preg_replace("/one/i", "four", $text, 1);
echo $newText;  // Output: Four, two, three, one

echo"<br><br>";

// Replace using a callback function
$text = "The price is 100 dollars.";
$newText = preg_replace_callback("/(\d+)/", function($matches) {
    return $matches[1] * 2;  // Double the price
}, $text);
echo $newText;  // Output: The price is 200 dollars.

echo"<br><br>";

$result = strcmp("apple", "banana"); // Returns a negative integer

echo"<br><br>";
$result = strncmp("applepie", "apple", 5); // Returns 0
echo"<br><br>";
$result = strcasecmp("Apple", "apple"); // Returns 0
echo"<br><br>";
$result = strncasecmp("ApplePie", "apple", 5); // Returns 0
echo"<br><br>";
$result = strnatcmp("img12.png", "img2.png"); // Returns a positive integer
echo"<br><br>";
$result = strnatcasecmp("Img12.png", "img2.png"); // Returns a positive integer
echo"<br><br>";

$result = substr_compare("HelloWorld", "World", 5); // Returns 0

echo"<br><br>";
$percent = 0;
$matches = similar_text("hello", "helo", $percent); // $matches = 4, $percent = 80
echo"<br><br>";

$original = "hello";
$reversed = strrev($original);
echo $reversed;  // Output: "olleh"

echo"<br><br>";
$original = "hello";
$shuffled = str_shuffle($original);
echo $shuffled;  // Output might be: "lehol" or any other permutation

echo"<br><br>";

$original = "PHP";
$padded = str_pad($original, 10, "-", STR_PAD_BOTH);
echo $padded;  // Output: "---PHP----"


echo"<br><br>";
$original = "abc";
$repeated = str_repeat($original, 3);
echo $repeated;  // Output: "abcabcabc"



$original = "  \t\nHello, World!  \n ";
$trimmed = trim($original);
echo $trimmed;  // Output: "Hello, World!"
// Custom character mask
$customTrimmed = trim($original, " \t\n\r");
echo $customTrimmed;  // Output: "Hello, World!"

$original = "Hello, World!    ";
$chopped = chop($original);
echo $chopped;  // Output: "Hello, World!"
// Custom character mask
$customChopped = chop($original, " ");
echo $customChopped;  // Output: "Hello, World!"


$input = "This is a 'quote' and a \"double quote\".";
$escaped = addslashes($input);
echo $escaped;  // Output: This is a \'quote\' and a \"double quote\".


$escaped = "This is a \'quote\' and a \"double quote\".";
$unescaped = stripslashes($escaped);
echo $unescaped;  // Output: This is a 'quote' and a "double quote".


$input = '<div class="test">This is a "quote".</div>';
$safe = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
echo $safe;  // Output: &lt;div cl

$input = '<div class="test">This is a "quote".</div>';
$safe = htmlentities($input, ENT_QUOTES, 'UTF-8');
echo $safe;  // Output: &lt;div class=&quot;test&quot;&gt;This is a &quot;quote&quot;.&lt;/div&gt;


$input = "Hello, World!";
$hash = md5($input);
echo $hash;  // Output: 65a3a1c4b2de5e30f88b2b9b38b9d3cc
// Raw output
$raw_hash = md5($input, true);
echo bin2hex($raw_hash);  // Output: 65a3a1c4b2de5e30f88b2b9b38b9d3cc


$input = "Hello, World!";
$hash = sha1($input);
echo $hash;  // Output: d3486ae9136e7856bc42212385ea797094475802
// Raw output
$raw_hash = sha1($input, true);
echo bin2hex($raw_hash);  // Output: d3486ae9136e7856bc42212385ea797094475802

$binary_data = "This is a test.";
$encoded = convert_uuencode($binary_data);
echo $encoded;// Output will be a UUencoded string


$encoded = "begin 644 test.txt\n#0V%T\n`\nend\n";
$decoded = convert_uudecode($encoded);
echo $decoded;  // Output will be the original binary data

echo"<br><br>";
$binary_data = "Hello";
$hexadecimal = bin2hex($binary_data);
echo $hexadecimal;  // Output: 48656c6c6f

echo"<br><br>";
$hexadecimal = "48656c6c6f";
$binary_data = hex2bin($hexadecimal);
echo $binary_data;  // Output: Hello


echo"<br><br>";
$ascii_value = 65;
$character = chr($ascii_value);
echo $character;  // Output: A

echo"<br><br>";

$character = 'A';
$ascii_value = ord($character);
echo $ascii_value;  // Output: 65

echo"<br><br>";

$html = "<p>This is a <b>bold</b> paragraph with <a href='#'>a link</a>.</p>";
$clean_text = strip_tags($html);
echo $clean_text;  // Output: This is a bold paragraph with a link.
$clean_text_with_allowed = strip_tags($html, '<a>');
echo $clean_text_with_allowed;  // Output: This is a <b>bold</b> paragraph with <a href='#'>a link</a>.

$text = "This is a long string that needs to be wrapped at a certain width to ensure it fits properly in the display area.";
$wrapped_text = wordwrap($text, 20);
echo $wrapped_text;

$min_value = min(5, 10, 2, 8);
echo $min_value;  // Output: 2


$numbers = [5, 10, 2, 8];
$min_value = min(...$numbers);  // Unpacking array into arguments
echo $min_value;  // Output: 2



$max_value = max(5, 10, 2, 8);
echo $max_value;  // Output: 10

$numbers = [5, 10, 2, 8];
$max_value = max(...$numbers);  // Unpacking array into arguments
echo $max_value;  // Output: 10

echo ceil(4.3);   // Output: 5
echo ceil(9.99);  // Output: 10
echo ceil(-1.1);  // Output: -1


echo floor(4.3);   // Output: 4
echo floor(9.99);  // Output: 9
echo floor(-1.1);  // Output: -2

echo round(4.3);            // Output: 4
echo round(4.7);            // Output: 5
echo round(4.567, 2);       // Output: 4.57
echo round(4.567, 2, PHP_ROUND_HALF_DOWN);  // Output: 4.56


echo abs(4.3);   // Output: 4.3
echo abs(-4.3);  // Output: 4.3
echo abs(-7);    // Output: 7


echo intdiv(10, 3);  // Output: 3
echo intdiv(20, 4);  // Output: 5
echo intdiv(-10, 3); // Output: -3


echo sqrt(16);    // Output: 4
echo sqrt(25);    // Output: 5
echo sqrt(2);     // Output: 1.4142135623731

echo pow(2, 3);   // Output: 8
echo pow(5, 2);   // Output: 25
echo pow(9, 0.5); // Output: 3 (since 0.5 is the square root)


echo rand();         // Outputs a random integer between 0 and getrandmax()
echo rand(1, 10);    // Outputs a random integer between 1 and 10


echo mt_rand();       // Outputs a random integer between 0 and mt_getrandmax()
echo mt_rand(1, 10);  // Outputs a random integer between 1 and 10


echo lcg_value(); // Outputs a random float between 0 and 1.
?>
