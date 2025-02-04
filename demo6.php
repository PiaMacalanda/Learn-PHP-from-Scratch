<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

// basic arithmetic
$num1 =20;
$num2 = 15;

$output = "$num1 + $num2 = ".$num1 + $num2;
$output = "$num1 - $num2 = ".$num1 - $num2;
$output = "$num1 * $num2 = ".$num1 * $num2;
$output = "$num1 / $num2 = ".$num1 / $num2;
$output = "$num1 % $num2 = ".$num1 % $num2;

//  appending assignment operator!!!
$num3 = 10;
$num3 += 20; // $num3 = $num3 +20;
$num3 -= 5; // naminus man itu
$num3 *= 2;
$num3 /= 2;

$output = $num3;

// rand() - Generates a RANDOM number
$output = rand();
$output = rand(1, 10); // creates random number from 1 to 10

// round() - Rounds a floating point number
$output = round(4.5);

// ciel() - Rounds a number ip to the nearesy integer
$output = ceil(4.3);

// floor() - Rounds a number to the nearest integer
$output = floor(4.7);

// sqrt() - Returns the square root of a number
$output = sqrt(64);

// pi() - Returns value of Pi
$output = pi();

// abs() - Returns the absolute (positive) value of a number
$output = abs(-4.7);

// max() - Returns the highest value in a list or array of arguments
$output = max(1, 2, 3);

// min() - Returns the lowest value in a list ir array of arguments
$output = min([1, 2, 3]);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch - Pia</title>
</head>

<body class="bg-gray-100">
  <header class="bg-pink-400 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output (●'◡'●) -->
       <?= $output ?>
    </div>
  </div>
</body>
<!-- Pia Macalanda -->
</html>