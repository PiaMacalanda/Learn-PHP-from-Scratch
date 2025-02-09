<?php
    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Lab Activity 2🍓🎮';
    $hashtag = '#lesson2 #colorsArray';
    $header2 = $sentence.' '.$hashtag;
    $challenge = '<b>Challenge 2:</b> Colors Array🎨';

    $body = <<< 'EOD'
                Follow the instructions below:

                1. Sort the `$colors` array in ascending order. 
                2. Add 'purple' and 'orange' to the end of the array.
                3. Add 'Red Apple' to the beginning of the array.
                4. Replace the green color of the array to Green mango.

                You should end up with the output of the following array: 
                Array ( [0] => Red Apple [1] => blue [2] => Green mango [3] => red [4] => yellow [5] => purple [6] => orange )
                
                EOD; // heredoc

    //Given array color value
    $colors = ['red', 'blue', 'green', 'yellow'];  //don't make  any changes on this to do the challenge!

    //Your Solution goes here...
    sort($colors);
    array_push($colors, 'purple', 'orange');
    array_unshift($colors, 'Red Apple');
    $colors[2] = 'Green mango'; // or $colors[array_search('green', $colors)] = 'Green mango';
        
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
             <h2 class="rtext-xl font-semibold my-4"><?= $challenge ?></h2>
             <p><?= nl2br($body) ?></p>
             <!-- Output -->
             <p><br><b>Solution: </b><?php print_r($colors)?></p>
        </div>
    </div>
</body>
<!-- Pia Macalanda -->
</html>

