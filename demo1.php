<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo 'Learn PHP From Scratch!'; ?></title> <!-- you can insert php inside html -->
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?='Learn PHP From Scratch~ wink wink' ?></h1> <!-- shorthand method using ?= -->
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Welcome To The Course</h2>
            <?= '<p>In this course, you will learn the fundamentals of the PHP language</p>'?> <!-- or also like this -->
            <p>Omsim</>
        </div>
    </div>
</body>

</html>

<?php

echo 'Welcome to my first PHP page :))';
echo '<br>';

print 'This is a print statement.';
print '<br>';

echo 'This is line string 1', 'This is string 2', 'Still in same line';

// single-line comment

/* 
 * This is a mulit-line comment
 * This is line 2
 * This is line3
 */


 /* if it is pure php, 
    no need to put ?>
 */
?> 

<!-- vscode shortcut for HTML and PHP comment is ctrl+/ -->
