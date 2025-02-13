<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Welcome To The Course🍓';
    $hashtag = '#lesson2d05 #basicLoops';
    $header2 = $sentence.$hashtag;

    // Your solution goes here..

    $output = null;
    $user = null;

    /*
    for ($i=0; $i <= 10; $i++) { 
        echo $i;
        echo '<br>';
    }
    */

    /*
    $i = 0;

    while ($i <= 10) {
        echo $i;
        echo '<br>';
        $i++;
    }
    */

    /*
    $i = 10;

    do {
        echo $i;
        echo '<br>';
        $i++;
    } while ($i <= 10);
    */


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
            <!-- 🍓how to loop in HTML -->
            <ul>
                <?php for ($i=0; $i < 10; $i++) :?>
                    <li>
                        Number <?= $i ?>
                    </li>
                <?php endfor; ?> <!-- insted {}, we used endfor -->
            </ul>
        </div>
    </div>
</body>

<!-- Pia Macalanda -->
</html>