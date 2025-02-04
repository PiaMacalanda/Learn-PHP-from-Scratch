<?php
$output = null;
$string = 'Hello World';

// strlen
$output = strlen($string);

// str_word_count
$output = str_word_count($string);

// strpos
$output = strpos($string, 'World'); // output: 6

// get specific char by index
$output = $string[6]; // output: W

// substr
$output = substr($string, 6, 5); // output: World. start at index 6 and print lenght 5

// str_replace
$output = str_replace('World', 'Universe', $string); // output: Hello Universe

// strtolower
$output = strtolower($string); // output: hello world

// strtoupper
$output = strtoupper($string); // output: HELLO WORLD

// ucwords
$output = ucwords($string); // output: Hello World

// trim()
$output = trim('    Hello World     ');

// https://ww.php.net/manual/en/ref.strings.php

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
      <h1 class="text-3xl font-semibold">PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>
<!-- Pia Macalanda -->
</html>