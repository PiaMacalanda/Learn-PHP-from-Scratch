<?php
    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Lab Activity 3🍓🎮';
    $hashtag = '#lesson2 #nsumOfNumbersInArray';
    $header2 = $sentence.' '.$hashtag;
    $challenge = '<b>Challenge 2: </b> Foreach Loop and For Loop';

    $body = <<< 'EOD'
                Follow the instructions below:

                 Challenge 2: Get the sum of the numbers in an array by using a foreach loop and for loop. 

                $numbers = [1, 2, 3, 4, 5]; // sum using foreach loop
                $numbers2 = [1, 2, 3, 4, 5,6,7,8,9,19];  // sum using for loop

                EOD; // heredoc

    // Please see embedded php below for 2nd part of the solution...

    $numbers = [1, 2, 3, 4, 5]; // sum using foreach loop
    $numbers2 = [1, 2, 3, 4, 5,6,7,8,9,19]; // sum using for loop

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
             <h3 class="text-xl font-semibold mb-4">Sum array using foreach loop</h3>
             <ul class="mb-6">
             <?php 
                $sum=0; 
                foreach($numbers as $number) :
                    $sum += $number; 
                endforeach;
                echo $sum; ?>
             </ul>

             <h3 class="text-xl font-semibold mb-4">Sum array using for loop</h3>
             <ul class="mb-6">
             <?php
                $sum = 0;

                for ($i=0; $i < count($numbers2) ; $i++) : 
                    $sum += $numbers2[$i];
                endfor;
                echo $sum; ?>
             </ul>
        </div>
    </div>
</body>
<!-- Pia Macalanda -->
</html>

