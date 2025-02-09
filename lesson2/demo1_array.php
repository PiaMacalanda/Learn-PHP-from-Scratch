<?php

    $output = null;
    $user = null;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindscss.com"></script>
        <title>PHP From Scratch - Pia</title>
    </head>
    <body class="bg-gray-100">
        <header class="bg-blue-500 text-white p-4">
            <div class="container mx-auto">
                <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
            </div>
        </header>
        <div class="container mx-auto p-4 mt-4">
            <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                <!-- Output -->
                <p class="text-xl"><?= $output?></p>
                <h2 class="text-xl font-semibold my-4">User: Array</h2>
                <pre><?php print_r($user); ?></pre>
            </div>
        </div> 
    </body>
</html>

<?php

    // Introduction to Array

    $names = array('John', 'Jack', 'Jill');
    $numbers = [1, 2, 3, 4, 5, 6];

    //var_dump($names); // shows number of arrays, index, value, and string length *since string*

    // var_dump($names[1]); // output: string(4) "Jack"

    //echo $names[0]; // output: John

    $numbers[] = 100; // it adds 100 to the $numbers
    $numbers[] = 101;

    $numbers[3] = 400; // you can replace value on specific index

    unset($numbers[3]); // to remove

    $numbers = array_values($numbers); // reindex - to correct index num after unset action

    echo '<pre>';
    var_dump($numbers);
    echo '<pre>';

?>