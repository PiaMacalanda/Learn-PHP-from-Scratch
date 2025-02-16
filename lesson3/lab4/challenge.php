<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Lab Activity 4🍓🎮';
    $hashtag = '#lesson3 #printDivisibleInContinousFormat';
    $header2 = $sentence.' '.$hashtag;
    $challenge = '<b>Challenge 4:</b> Conditional Formatting.🏢';

    $body = <<< 'EOD'
            - Write a program that prints the numbers from 1 to 100.  
            
            - But for number is divisible of three print “is divisible to 3” instead of the numberand for the number is divisible of five print “is divisible to 5”. 
            
            - For numbers which are divisible of both three and five print “is divisible to 3 and 5”.
            
            - Remember, you can use the modulus operator to check if a number is divisible by another number.
    
            EOD; // heredoc

    $output = '';

    // Your solution goes here..
    for ($i=1; $i <= 100; $i++) { 
        if ($i %3 == 0 && $i %5 == 0) {
            $output .= $i . ' is is divisible to 3️⃣ and 5️⃣<br>';
            continue;
        } elseif ($i %3 == 0) {
            $output .= $i . ' is divisible to 3️⃣<br>';
            continue;
        } if ($i %5 == 0) {
            $output .= $i . ' is divisible to 5️⃣<br>';
            continue;
        } else {
            $output .= $i . '<br>';
        }
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