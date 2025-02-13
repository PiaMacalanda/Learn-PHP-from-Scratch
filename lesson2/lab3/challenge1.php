<?php
    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Lab Activity 3🍓🎮';
    $hashtag = '#lesson2 #nestedForLoop';
    $header2 = $sentence.' '.$hashtag;
    $challenge = '<b>Challenge 1: </b> Multiplication Table';

    $body = <<< 'EOD'
                Follow the instructions below:

                Create a multiplication table using a nested `for` loop.
                EOD; // heredoc

    // Your solution goes here...

   /* for ($num1=1; $num1 <= 10 ; $num1++) { 
        for ($num2=1; $num2 <= 10; $num2++) { 
            $product = $num1 * $num2;
            echo $num1.' x '.$num2.' = '.$product.'<br>';
        }
    } */

    // Inside the block comment is my PHP Solution without HTML
    // Please look below for 'PHP in HTML' solution
        
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

             <!-- Solution -->
             <p class="font-bold mb-4"><br>Solution: </p>
             <ul class="mb-6">
                <p class="font-bold mb-4">Multiplication Table</p>
                <?php for ($num1=1; $num1 <=10; $num1++) :?>
                    <?php for ($num2=1; $num2 <=10; $num2++) : ?>
                    <li>
                        <?php $product = $num1 * $num2; ?>
                        <?= $num1.' x '.$num2.' = '.$product ?>
                    </li>
                    <?php endfor; ?>
                <?php endfor; ?>
             </ul>
        </div>
    </div>
</body>
<!-- Pia Macalanda -->
</html>

