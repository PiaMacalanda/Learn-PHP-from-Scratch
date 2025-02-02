<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-pink-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Welcome To The Course</h2>
            <p>We are going to learn Type Casting Juggling!</p>
        </div>
    </div>
</body>

</html>

<?php

$num1 =5;
$num2 = 10;
$num3 = '20';
$fruit = 'apple';
$bool1 = true; // the value in byte is 1
$bool2 =false; // the value in byte is 0
$null = null; // the value in byte is 0 for null or empty

// implicit conversion - nadedefine na ni php or interpreted na niya that the var are int

$result = $num1 + $num2; // both int
$result = $num1 + $num3; // niconvert the string to int like: int(string to int)
$result = $num3 + $num3; // both string number but it converts to: int(string to int)
$result = $num1.$num2.$num3; // concatination converts to string: int(string)
// $result = $fruit + $num1; // string text and int is not valid. shows error.
$result = $num1 + $bool1; // so, if int, the boolean true converts to 1, so 5 + 1
$result = $num1 + $bool2; // boolean false is zer, so 5 + 0
$result = $bool1 + $bool2; // int(boolean to string), so 1 + 0
$result = $null + $null; // 0 + 0, still an int


var_dump($result);

// this is a comment
?>