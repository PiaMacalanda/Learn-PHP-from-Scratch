<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Lab Activity 2🍓🎮';
    $hashtag = '#lesson3 #arrayLoop';
    $header2 = $sentence.' '.$hashtag;
    $challenge = '<b>Challenge 5:</b> Name Challenge🏢';

    $body = <<< 'EOD'
            Instructions

            1. Take the array of names below and loop through them. The type of loop is up to you.
            $names = ['ALEC', 'BETH', 'CAROLINE', 'DAve', 'ElAnor', 'ANNa', 'Freddie', 'AdaM'];

            2. Within the loop, use a conditional statement to check if the first letter of the name is 'A'.

            3. If the first letter is 'A', skip that name and continue to the next iteration.

            4. If the first letter is not 'A', reverse the string.

            5. Make all names lowercase before printing them.
    EOD; // heredoc

    // Your solution goes here..

    $output = '';

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
                <!-- Output -->
                <p class="text-xl"><?= $output?></p>
            </div>
        </div>
    </body>
<!-- Pia Macalanda -->
</html>