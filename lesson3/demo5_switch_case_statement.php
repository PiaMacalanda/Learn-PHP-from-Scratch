<?php
$header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
$sentence = 'Welcome To The Course🍓';
$hashtag = '#lesson3d05 #switchCaseStatement';
$header2 = $sentence.$hashtag;

$output = '';

$daysOfWeek = 'Monday';

// switch case statement
switch ($daysOfWeek) {
    case 'Monday':
        $message = 'Monday blues';
        $color = 'blue';
        break;

    case 'Tuesday':
        $message = 'At least it\'s not Monday';
        $color = 'green';
        break;

    case 'Wenedsday':
        $message = 'Hump day!';
        $color = 'orange';
        break;

    case 'Thursday':
        $message = 'One more day until Friday!';
        $color = 'red';
        break;

    case 'Friday':
        $message = 'TGIF!';
        $color = 'purple';
        break;

    case 'Saturday':
        $message = 'Have a nice weekedn!';
        $color = 'yellow';
        break;
    
    case 'Sunday':
        $message = 'Have a nice weekend!';
        $color = 'yellow';
        break;

    default:
        $message = 'Invalid day';
        $color = 'black';
        break;
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

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: <?php echo $color ?>;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
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
            <h1><?= strtoupper($message)?></h1>
        </div>
    </div>
</body>

<!-- Pia Macalanda -->
</html>
