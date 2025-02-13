<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Welcome To The Course🍓';
    $hashtag = '#lesson2d04 #multidimensionalArray';
    $header2 = $sentence.$hashtag;

    // Your solution goes here..

    $output = null;
    $user = null;

    $names = ['John Doe', 'Matthew Thomas', 'Jose Ramirez', 'Mary Jane'];

    $users = [
    ['name' => 'John', 'email' => 'john@email.com'],
    ['name' => 'Jane', 'email' => 'jane@email.com'],
    ['name' => 'Joe', 'email' => 'joe@email.com'],
    ['name' => 'Mary', 'email' => 'mary@email.com']
    ];

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
            <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
            <ul class="mb-6">
                <?php for ($i=0; $i < count($names); $i++) : ?>
                <li><?= $names[$i] ?></li>
                <?php endfor; ?>
            </ul>

            <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
            <ul class="mb-6">
                <?php foreach($names as $name) : ?>
                    <li><?= $name ?></li>
                <?php endforeach ?>
            </ul>

            <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
            <ul class="mb-6">
                <?php foreach($names as $index => $name) : ?>
                    <li><?= $index.' - '.$name ?></li>
                <?php endforeach ?>
            </ul>

            <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
            <ul class="mb-6">
                <?php foreach($users as $user) : ?>
                    <li><?= $user['name'].' - '.$user['email'] ?></li>
                <?php endforeach ?>
            </ul>

            <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative array</h3>
            <ul class="mb-6">
                <?php foreach($users as $user) : ?>
                    <?php foreach($user as $key => $value) : ?>
                    <li><?= $key.' - '.$value ?></li>
                    <?php endforeach ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</body>
<!-- Pia Macalanda -->
</html>