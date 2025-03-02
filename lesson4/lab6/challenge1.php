<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Lab Activity 6🍓🎮';
    $hashtag = '#lesson4 #functions';
    $header2 = $sentence.' '.$hashtag;
    $challenge = '<b>Challenge 1:</b> Fahrenheit to Celsius';

    $body = <<< 'EOD'
            Write a function called `fahrenheitToCelsius` that takes a temperature in Fahrenheit as an argument and returns the temperature in Celsius.

            - Create a named function called `fahrenheitToCelsius` that takes a fahrenheit temperature as an argument. 
            - Return the temperature converted to Celsius.
            - Print to the screen like "68F = 20C. You can use the &deg; entity for the degrees symbol. and 
                &degC for celsius
            - For extra points, convert to an arrow function +2pts

                sample output   68°F = 20°
    EOD; // heredoc

    // Your solution goes here..
    $fahrenheit = 68;

    // function fahrenheitToCelsius($fahrenheit) {
    //     return ($fahrenheit - 32) * 5 / 9;
    // }

    // Using Arrow Function
    $fahrenheitToCelsius = fn($fahrenheit) => ($fahrenheit - 32) * 5 / 9;

    $celsius = $fahrenheitToCelsius($fahrenheit);
    $output = "$fahrenheit&deg;F = " . round($celsius) . "&deg;C";

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

<!-- 
🍓 Arrow function sses fn instead of function.
No need for {} or return keyword.
Arrow functions are one-liners and automatically return the result. 
-->