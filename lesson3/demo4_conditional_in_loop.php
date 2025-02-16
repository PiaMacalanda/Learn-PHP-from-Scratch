<?php
$header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
$sentence = 'Welcome To The Course🍓';
$hashtag = '#lesson3d01 #ifElseStatement';
$header2 = $sentence.$hashtag;

/* 
    Message in printing values:
        Concatenate (.=) each message to $output – This ensures all outputs are collected.
        example: $output .='This is a concatinated stored output'; 
*/

$output = '';

$number = 1;

/* while ($number <= 10) {
    if ($number % 2 == 0) {
        $output .= $number . ' is even.<br>';
    } else {
        $output .= $number . ' is odd.<br>';
    }
    $number++;
} */

// 🍓break out of loop
/* for ($i=1; $i <= 10; $i++) { 
    if ($i == 5) {
        break;
    }
    $output .= $i . '<br>';
} */

//🍓skip and continue
/* for ($i=1; $i <= 10; $i++) { 
    if ($i ==5) {
        // $output .= $i . ' 5 is found <br>';
        continue;
    }
    $output .= $i . '<br>';
} */

$studentGrades = array(
    'John' => 75,
    'Jack' => 92,
    'Jill' => 100,
    'Joan' => 80
);

foreach ($studentGrades as $name => $grade){
    if ($grade >= 90) {
        $output .= $name . ' has and excellent grade <br>';
    }
};






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
