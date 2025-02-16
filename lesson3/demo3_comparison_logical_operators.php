<?php
$header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
$sentence = 'Welcome To The Course🍓';
$hashtag = '#lesson3d03 #comparisonAndLogicalOperators';
$header2 = $sentence.$hashtag;

$output = '';

/* 
    | Comparison Operators
    | Operator | Description 
    | -------------------------------- |
    | ==       | Equal to              |
    | ===      | Identical to          |
    | !=       | Not equal to          |
    | <>       | Not equal to          |
    | !==      | Not identical to      |
    | <        | Less than             |
    | >        | Greater than          |
    | <=       | Less than or equal    |
    | >=       | Greater than or equal |
*/

$x = 10;
$y = '10';

/*
    🍓FOR HTML EMBEDDING PURPOSE ONLY! 
    Capture var_dump output using ob_star(); and ob_get_clen();
*/

ob_start(); // starts output buffering

// var_dump($x == $y); // true
// var_dump($x === $y); // false, type of variable- x is int, y is string
// var_dump($x != $y); // false
// var_dump($x <> $y); // false
// var_dump($x !== $y); // false
// var_dump($x < $y); // false
// var_dump($x > $y); // false
// var_dump($x <= $y); // true
// var_dump($x >= $y); // true


$output = ob_get_clean(); // gets buffer and clears it


/* 
    | Logical Operators
    | Operator | Description 
    | ---------------------------------- |
    | and      | True if both are true   | 
    | &&       | True if both are true   |
    | or       | True if either is true  |
    | ||       | True if either is true  |
    | xor      | True if only one is true|
    | !        | True if it is not true  |
*/

$a = 10;
$b = 20;

ob_start();

// var_dump($a == 10 and $b == 20); // true

// var_dump($a == 10 or $b == 20); // true

// var_dump($a == 10 xor $b == 20); // false

// var_dump($a == 10 && $b == 20); // true

// var_dump($a == 10 || $b == 20); // true

// var_dump(!($a == 5)); // true

$output = ob_get_clean();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>
        <?= "Learn PHP From Scratch - Pia" ?>
    </title>
</head>

<body class="bg-gray-100">
    <header class="bg-pink-400 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $header1 ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $header2 ?></h2>
            <!-- Output -->
            <p class="text-gray-700"><?= $output ?></p>
        </div>
    </div>
</body>

<!-- Pia Macalanda -->
</html>
