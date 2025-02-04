<?php

$title = "Introduction to PHP";
$author = "John Doe";
$body = <<< EOD
            PHP (Hypertext Preprocessor) is a widely used server-side scripting
            language that has revolutionized web development. With its simplicity,
            flexibility, and vast community support, PHP has become the backbone of
            countless dynamic websites and web applications.
            <a href="https://www.php.net/manual/en/" style="color: purple;"> Visit PHP Documentation here.</a>
            EOD; // heredoc
$pageTitle = "Brad's PHP Blog | ". $title;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title><?= $pageTitle ?></title>
    </head>
    <body class="bg-purple-100">
        <main>
            <header class="bg-purple-800 text-white p-8">
                <div class="container mx-auto">
                    <h1 class="text-3xl font-semibold font-serif"><?= $title ?></h1>
                    <p>By: <?= $author ?></p>
                <div>
            </header>
            <div class="container mx-auto p-4 mt-4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p> <?= $body ?> </p>
                </div>
            </div>
        </main>
    </body>
    <!-- Pia Macalanda -->
</html>

<!-- NOTES🍓:
The difference between heredoc and nowdoc is that 
 PHP code embedded in a heredoc gets executed, 
 while PHP code in nowdoc will be printed out as is. 
 EOT : End of transmission, EOD: End of data
 https://stackoverflow.com/questions/1848945/best-practices-working-with-long-multiline-strings-in-php 
 https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc 
 -->