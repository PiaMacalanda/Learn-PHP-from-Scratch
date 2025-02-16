<?php
$header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
$sentence = 'Welcome To The Course🍓';
$hashtag = '#lesson3d01 #ifElseStatement';
$header2 = $sentence.$hashtag;

$output = '';

$age = 14;
$ave = 80;

// if statement
if ($age >= 18) {
    $output .= 'You are allowed to vote.<br>';
}

// if-else
if ($ave >= 75) {
    $output .= 'Your average is Passed.<br>';
} else {
    $output .= 'Your average is Failed.<br>';
}

// nested if statement
if ($age >= 18) {
    $output .= 'You are allowed to vote.<br>';
} else {
    if ($age == 17) {
        $output .= 'Wait for 1 year to vote.<br>';
    } else {
        $output .= 'You are not allowed to vote.<br>';
    }
}

// if else if
if ($ave == 100) {
    $output .= 'Your average is Excellent.<br>';
} else if ($ave == 90) {
    $output .= 'Your average is Very Good.<br>';
} else if ($ave >= 80) {
    $output .= 'Your average is Good.<br>';
} else {
    $output .= 'Your average is Failed.<br>';
}

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
            <p class="text-gray-700"><?= $output ?></p>
        </div>
    </div>
</body>

<!-- Pia Macalanda -->
</html>
