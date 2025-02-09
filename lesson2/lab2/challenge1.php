<?php
 /*
      Challenge 1: Sum of an array
      Follow the instructions below

      1. Create an array of numbers: 1,2,3,4,5
      2. Get the sum of all of the numbers combined and put into a variable. $sum
      3. Count the number of elements in the array and put into a variable. $quantity
      4. Print out 'The sum of the {quantity} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'.
 */
      echo '<h3> Sum of An Array</h3>';
     //Your Solution goes here...



?>


<?php
$header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
$sentence = 'Welcome To The Course🍓';
$hashtag = '#lesson2d03 #associativeArray';
$header2 = $sentence.$hashtag;

$output = null;


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
             <p class="text-xl"><?= $output?></p>
             <h2 class="rtext-xl font-semibold my-4">Use Array: </h2>
             <pre><?= print_r($user); ?></pre>
        </div>
    </div>
</body>

<!-- Pia Macalanda -->
</html>