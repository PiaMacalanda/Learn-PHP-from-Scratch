<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Welcome To The Course🍓';
    $hashtag = '#lesson2d03 #associativeArray';
    $header2 = $sentence.$hashtag;

    // Associative arrays - arrays that use named keys
    // that you assign to retrieve an element

    $output = null;

    $user = [
        'name' => 'Himiko',
        'email' => 'himiko.toga@gmail.com',
        'password' => 'iLoveBlood',
        'hobbies' => ['Drink Blood', 'Disguise as Someone', 'Admire Ochaco', ]
    ];

    // Accessing elements using key instead of index number
    $output = $user['name'];
    $output = $user['email'];

    // Accessing nested elements
    $output = $user['hobbies'][2];

    // Adding new element
    $user['address'] = '123 Main Street';

    // Remove element
    unset($user['address']);
    unset($user['hobbies'][1]);
    
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
             <p class="text-xl"><?= $output?></p>
             <h2 class="text-xl font-semibold my-4">User Array: </h2>
             <pre><?php print_r($user); ?></pre>
        </div>
    </div>
</body>

<!-- Pia Macalanda -->
</html>