<!-- 
 PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource 
-->

<?php

// string
$name ='Monkey, D. Luffy';
$name2 ="Ror Zoro";

var_dump($name); // var_dump shows variable info and display variable

echo '<br>';
echo getType($name); // show var type info ONLY
echo '<br>';

// integer
$age = 21;
var_dump($age);
print'<br>';

// float
$rating =4.5;
var_dump($rating);
echo '<br>';

// boolean
$is_Loaded= true;
var_dump($is_Loaded);
echo '<br>';

// array
$fruits = array('Apple', 'Banna', 'Mango');
var_dump($fruits);
echo '<br>';
echo getType($fruits);
echo '<br>';

// object
$person = new stdClass();
var_dump($person);
echo '<br>';
echo getType($person);
echo '<br>';

// null
$president = null;
var_dump($president);
echo '<br>';

// resource - it opens file
$file = fopen('sample.txt', 'r'); // r is read
echo getType($file); // resource. basta nasa loob ng text folder





// In summary, php already knows what type of variable you are declaring. 
// Unlike java, you need to declare the type

?>