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
// Array Functions

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

// 🍓count()  - returns the number of elements in an array
echo '<pre>';
// var_dump(count($users));
echo '<pre>';

// 🍓sort() - sorts an indexed array in ascending order
sort($users); // sorting value process, boolean(true)

echo '<pre>';
// var_dump($users); // to check output
echo '<pre>';

// 🍓sort() - sorts an indexed array in descending order
rsort($ids);
rsort($users);

echo '<pre>';
// var_dump($ids);
echo '<pre>';

// 🍓array_push() - inserts one or more element at the end of array
array_push($ids, 100, 101);
array_push($users, 'user4');

echo '<pre>';
// var_dump($ids);
echo '<pre>';

// 🍓array_pop() - deletes the last element of an array
array_pop($ids);
array_pop($users);

echo '<pre>';
// var_dump($ids);
echo '<pre>';

// 🍓array_shift() - removes the first element of an array
array_shift($ids);
array_shift($users);

echo '<pre>';
// var_dump($ids);
echo '<pre>';

// 🍓array_unshift() - prepend/add new elements to the beginning of an array
$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

array_unshift($ids, 33);
array_unshift($users, 'user5');

echo '<pre>';
// var_dump($users);
echo '<pre>';

// 🍓array_slice() - returns selected part of an array
$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

$ids2 = array_slice($ids, 1, 3); // variable, start, length

echo '<pre>';
// var_dump($ids2);
echo '<pre>';

// 🍓array_sub() - calculate SUM of values of an array
$output = 'Sum of IDs: ' . array_sum($ids);

// echo $output; 
// output: Sum of IDs: 192

// 🍓array_search() - Searches the array for a given value 
//  and returns the first corresponding key if successful
$output = 'User 2 is at index: ' . array_search('user2', $users);

// echo $output; 
// output: User 2 is at index: 0

// 🍓explode() - breaks a string into an array
$tags = 'tech,code,programming';

$tagsArr = explode(',', $tags);

echo '<pre>';
// var_dump($tagsArr);
echo '<pre>';

// 🍓implode() - join array elements with a string

$output = implode(', ', $users);

echo $output;
// output: user2, user1, user3

// 🔗PHP documentation (https://www.php.net/manual/en/ref.array.php)
?>