<?php
// string concatination - mixing/combining diff var names and texts


$firstName = 'Luffy';
$lastName = 'Monkey';

$fullName = $firstName.' '.$lastName;

// concatination assignment

$fullName .= ' Jr.'; // we added Jr on the full name.

// echo $fullName;

$sentence = 'Welcome To The Course🍓';
$hashtag = '#lesson1d04 #stringConcatination';
$header2 = $sentence.$hashtag;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Learn PHP From Scratch - Pia</title>
</head>

<body class="bg-gray-100">
  <header class="bg-pink-400 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-semibold mb-4"><?= $header2 ?></h2>
      <!-- Output -->
       <p class ="text-xl"><?= 'Hello, my name is '.$fullName; ?></p> 
       <!-- preferred. advisable in adding elements -->

       <p class ="text-xl"><?= "Hello, my name is $fullName"; ?></p> 

       <p class ="text-xl"><?= "Hello, my name is {$fullName}"; ?></p> 
       <!-- used in laravel, preferred also -->

       <p class ="text-xl"><?= 'Hello, my name is \'Luffy\''; ?></p> 

    </div>
  </div>
</body>
<!-- Pia Macalanda -->
</html>
