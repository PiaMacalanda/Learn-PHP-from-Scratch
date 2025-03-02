<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Lab Activity 6🍓🎮';
    $hashtag = '#lesson4 #functions';
    $header2 = $sentence.' '.$hashtag;
    $challenge = '<b>Challenge 3:</b> Find the Longest Word';

    $body = <<< 'EOD'
            Let's do something a bit harder.
            1. Create a function called `findLongestWord` that takes a sentence as an argument.
            2. The function should return the longest word in the sentence.

            Hints:
            - You will need to use the `explode` function to split the sentence into an array of words.
            - You will need to use the `strlen` function to find the length of each word.
            - You will need to use a loop to loop through the array of words.
            - You will need to use a conditional to check if the current word is longer than the longest word you have found so far.

            It it should look like this:

            $sentence = 'The quick brown fox jumped over the lazy dog';
            $longestWord = findLongestWord($sentence);
            echo $longestWord; // should print 'jumped'

            ouput
            jumped
    EOD; // heredoc

    // Your solution goes here..
    function findLongestWord($sentence) {
        $words = explode(" ", $sentence);
        $longest = "";

        foreach ($words as $word) {
            if (strlen($word) > strlen($longest)) {
                $longest = $word;
            }
        }
        return $longest;
    }

    $sentence = 'The quick brown fox jumped over the lazy dog';
    $longestWord = findLongestWord($sentence);

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
                <p class="text-xl"><?= $longestWord?></p>
            </div>
        </div>
    </body>
<!-- Pia Macalanda -->
</html>