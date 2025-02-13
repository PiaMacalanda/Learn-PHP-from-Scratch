<?php
    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Lab Activity 3🍓🎮';
    $hashtag = '#lesson2 #nsumOfNumbersInArray';
    $header2 = $sentence.' '.$hashtag;
    $challenge = '<b>Challenge 3: </b> Foreach Loop and For Loop';

    $body = <<< 'EOD'
                Follow the instructions below:

                Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key 'grades'.

                1. Create an array of students with their names and grades (0 - 100)
                    john 85,90,92,88
                    jane 95,88,91,87
                    joe  75,82,79,88
                2. Iterate over the students array with a foreach loop
                3. Calculate the average grade for each student

                EOD; // heredoc

      // Please see embedded php below for 2nd part of the solution...

    $students = [
        ['name' => 'John','grades' => [85, 90, 92, 88]],
        ['name' => 'Jane', 'grades' => [95, 88, 91, 87]],
        ['name' => 'Joe', 'grades' => [75, 82, 79, 88]],
    ];

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
                <p class="font-bold mb-4">Average Grade</p>
                <?php 
                    foreach ($students as $student) :
                        $name = $student['name'];
                        $grades = $student['grades'];
                        $average = array_sum($grades) / count($grades); ?>
                <li>
                    <?= $name.": Average Grade = ". number_format($average, 2)?>
                </li>
                <?php endforeach; ?>
             </ul>
        </div>
    </div>
</body>
<!-- Pia Macalanda -->
</html>

