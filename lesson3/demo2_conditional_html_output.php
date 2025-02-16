<?php
$header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
$sentence = 'Welcome To The Course🍓';
$hashtag = '#lesson3d02 #conditionalHTMLOutput';
$header2 = $sentence.$hashtag;

$output = '';

$isLoggedIn = false;
$name = 'Pia';


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
            <?php if($isLoggedIn && $name) :?>
                <p>Welcome <?= $name ?>!ヾ(＠⌒ー⌒＠)ノ</p>

            <?php elseif ($isLoggedIn) :?>
                <p>Welccome to the app!</p>

            <?php else: ?>
                <p>Please log in.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

<!-- Pia Macalanda -->
</html>