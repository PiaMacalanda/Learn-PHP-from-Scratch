<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Welcome To The Course🍓';
    $hashtag = '#lesson2d04 #multidimensionalArray';
    $header2 = $sentence.$hashtag;

    // Multidimensional Array

    $output = null;
    $user = null;

    $fruits = [
        // 0        // 1
        ['Apple', 'Red'],     // 0
        ['Orange', 'Orange'], // 1
        ['Banna', 'Yellow']   // 2

    ];

    $output = $fruits[2][1]; // [row][column]

    $user = [
        ['name' => 'John', 'email' => 'john@gmail.com', 'password' => 'secret'],
        ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => 'secret'],
        ['name' => 'Jane', 'email' => 'jane@gmail.com', 'password' => ['secrect', 'other']]
    ];

    // access email for the first user
    $output = $user[0]['email']; // output: john@gmail.com

    // concatenation
    $output = $user[0]['name'].' '. $user[1]['email'].' '. $user[2]['password'][1];

    // add array
    $user[] = ['name' => 'Alex', 'email' => 'alex@gmail.com', 'password' => 'secret'];

    // remove the LAST element of the array
    array_pop($user);

    // remove the FIRST element of the array
    array_shift($user);

    // count number of elements
    $output = count($user). ' users in the array';
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
             <h2 class="text-xl font-semibold my-4">User Array: </h2>
             <p class="text-xl"><?= $output?></p><br>
             <pre><?php print_r($user); ?></pre>
        </div>
    </div>
</body>

<!-- Pia Macalanda -->
</html>