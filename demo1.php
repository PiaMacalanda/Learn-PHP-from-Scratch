
<?php
$header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
$sentence = 'Welcome To The Course🍓';
$hashtag = '#lesson1d01 #printing&comments';
$header2 = $sentence.$hashtag;
$body = 'This is a body';
$paragraph= 'This is a paragraph';


// This is single-line PHP comment

/*
 * THis is a multi-line comment in PHP
 */

?>

<!-- This is an HTML comment -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>
        <?= "Learn PHP From Scratch - Pia" ?> // shorthand method to display php
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
            <?= '<p>Hi, my name is Pia Katleya V. Macalanda</p>' ?>
        </div>
    </div>
</body>

<!-- Pia Macalanda -->
</html>