<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Lab Activity 6🍓🎮';
    $hashtag = '#lesson4 #functionsy';
    $header2 = $sentence.' '.$hashtag;
    $challenge = '<b>Challenge 2:</b> Print Names In Uppercase';

    $body = <<< 'EOD'
            Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.

            Hints:
            $names = ['Alice', 'Bob', 'Charlie', 'David'];
            - You can use the `strtoupper` function to convert a string to uppercase.

            Sample  output:
                    ALICE
                    BOB
                    CHARLIE
                    DAVID

    EOD; // heredoc

    // Your solution goes here..
    $names = ['Alice', 'Bob', 'Charlie', 'David'];
    
    function printNamesToUpperCase($names) {
        return array_map('strtoupper', $names);
    }

    $uppercaseNames = printNamesToUpperCase($names);
    $output = implode('<br>', $uppercaseNames);
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
                <h2 class="text-xl font-semibold my-4"><?= $challenge ?></h2>
                <p><?= nl2br($body)?></p>
                <p class="font-bold mb-4"><br>Solution: </p>
                <!-- Output -->
                <p class="text-xl"><?= $output?></p>
            </div>
        </div>
    </body>
<!-- Pia Macalanda -->
</html>