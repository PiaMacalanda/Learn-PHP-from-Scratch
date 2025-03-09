<?php
$subTitle = "Home - Pia";
$header = "🐘 Learn PHP from Scratch 🍓";
$subject = "Applications Development & Emerging Technologies";
$name = "Pia Katleya V. Macalanda";
$code = "CCC311-18/CCL311-18";
$instructor = "Prof. Nelson C. Gaspar";
$header2 = "\ud83c\udf53 PHP Activities";

$lessons = [
    "Lesson 1: Data Types, Variables, and Built in Functions" => [
        "lesson1.php",
        "files" => ["lesson1\demo1.php", 
                    "lesson1\demo2.php", 
                    "lesson1\demo3.php", 
                    "lesson1\demo4.php", 
                    "lesson1\demo5.php", 
                    "lesson1\demo6.php", 
                    "lesson1\demo7.php", 
                    "lesson1\demo8.php"]
    ],
    "Lesson 2: Arraw and Iteration" => [
        "lesson2.php",
        "files" => ["lesson2\demo1_array.php",
                    "lesson2\demo2_array_fuctions.php",
                    "lesson2\demo3_associative_array.php", 
                    "lesson2\demo4_multidimensional_array.php", 
                    "lesson2\demo5_basic_loops.php", 
                    "lesson2\demo6_nested_loop.php", 
                    "lesson2\demo7_looping_through_array.php", 
                    "lesson2\demo8_multidimensional_array_iteration.php"]
    ],

    "Lesson 3: Control Structures and Conditionals" => [
        "lesson3.php",
        "files" => ["lesson3\demo1_if_else.php", 
                    "lesson3\demo2_conditional_html_output.php", 
                    "lesson3\demo3_comparison_logical_operators.php", 
                    "lesson3\demo4_conditional_in_loop.php"]
    ],

    "Lesson 4: Functions 🚧" => [
        "lesson4.php",
        "files" => [".php"]
    ],

    
    "Lesson 5: Object Oriented Programming 🚧" => [
        "lesson5.php",
        "files" => [".php"]
    ],

    "Lesson 6: Super Globals 🚧" => [
        "lesson6.php",
        "files" => [".php"]
    ],

    "Lesson 7: Database Integration and PDO 🚧" => [
        "lesson7.php",
        "files" => [".php"]
    ]
];

$lab_activities = [
    "Lab 1: John Doe Output display" => ["lesson1\lab1.php" => "Challenge 1: John Doe Output display"],
    "Lab 2: Array Challenge" => [ 
        "lesson2\lab2\challenge1.php" => "Challenge1: Sum of Array", 
        "lesson2\lab2\challenge2.php" => "Cahllenge2: Colors of Array", 
        "lesson2\lab2\challenge3.php" => "Cahallenge3: Job Listing"],
    "Lab 3: Control Structures and COnditionals" => [
        "lesson2\lab3\challenge1.php",
        "lesson2\lab3\challenge2.php", 
        "lesson2\lab3\challenge3.php"],
    "Lab 4: Functions" => [
        "lesson3\lab4\challenge.php"],
    "Lab 5:" => [
        "lesson3\lab5\challenge.php"],
    "Lab 6" => [
        "lesson4\lab6\challenge1.php", 
        "lesson4\lab6\challenge2.php", 
        "lesson4\lab6\challenge3.php"]

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $subTitle; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-pink-900 font-sans">
    <div class="container mx-auto my-10 p-6 bg-white rounded-lg shadow-lg max-w-4xl border-4 border-pink-300">
        <h1 class="text-4xl font-bold text-center text-pink-700"> <?php echo $header; ?> </h1>
        <p class="text-center text-pink-600 text-lg mt-2"> <?php echo $subject; ?> - <?php echo $code; ?> </p>
        <p class="text-center text-pink-500 text-md mt-1"> Instructor: <?php echo $instructor; ?> </p>
        <p class="text-center text-pink-500 text-md mt-1"> Owner: <?php echo $name; ?> </p>

        <div class="mt-6">
            <h3 class="text-xl font-semibold text-pink-700 flex items-center">🧺 Lessons</h3>
            <div class="bg-pink-100 p-4 rounded-md shadow-md border-2 border-pink-400 max-h-52 overflow-y-auto">
                <?php foreach ($lessons as $title => $lesson): ?>
                    <details class="mb-2 bg-white p-2 rounded-md shadow-sm">
                        <summary class="cursor-pointer font-semibold text-pink-800 flex items-center"> 🍃 <?php echo $title; ?> </summary>
                        <ul class="list-disc pl-6 text-pink-700">
                            <?php foreach ($lesson['files'] as $file): ?>
                                <li><a href="<?php echo $file; ?>" class="text-pink-600 hover:underline">🍓 <?php echo $file; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-6">
            <h3 class="text-xl font-semibold text-pink-700 flex items-center">🧺 Lab Activities</h3>
            <div class="bg-pink-200 p-4 rounded-md shadow-md border-2 border-pink-400 max-h-52 overflow-y-auto">
                <?php foreach ($lab_activities as $title => $labs): ?>
                    <details class="mb-2 bg-white p-2 rounded-md shadow-sm">
                        <summary class="cursor-pointer font-semibold text-pink-800 flex items-center"> 🍃 <?php echo $title; ?> </summary>
                        <ul class="list-disc pl-6 text-pink-700">
                            <?php foreach ($labs as $lab): ?>
                                <li><a href="<?php echo $lab; ?>" class="text-pink-600 hover:underline">🍓 <?php echo $lab; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>