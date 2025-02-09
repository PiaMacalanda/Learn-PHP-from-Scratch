<?php
$header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
$sentence = 'Lab Activity 2🍓🎮';
$hashtag = '#lesson2 #jobListingsArray';
$header2 = $sentence.' '.$hashtag;
$challenge = '<b>Challenge 3:</b> Job Listings Array🏢';

$body = <<< 'EOD'
            Follow the instructions below:

            1. Create a multi-dimensional array of associative arrays of 3 job listings shown above.
            -Also add an array field for skills. The skills array should be an array of strings with each skill a person has.
            -example   'skills' => ['PHP', 'MySQL', 'JavaScript']
            note: note for the name of array varible use this $listings[];

            2.Create a new record using the `array_push()` function. The new record should have the same fields as the others.
                4   Graphic Artist   ADOBE       princess@adobe.com   09208456544  Photoshop, Bootstrap, Flutter 

            3. Print out the job_title,company and email of the second job listing from the array.
            4. Print out the first and third skill of the third job listing in the array.
                
            EOD; // heredoc

    //Your Solution goes here...

    $listings = [
        [
            'id' => 1,
            'job_title' => 'PHP Developer',
            'company' => 'IBM',
            'email' => 'john@ibm.com',
            'contact_no' => '09168457456',
            'skills' => ['PHP', 'MySQL', 'Javascript']
        ],

        [
            'id' => 2,
            'job_title' => 'Web Designer',
            'company' => 'AWS',
            'email' => 'jane@aws.com',
            'contact_no' => '09175597456',
            'skills' => ['Photoshop', 'Illustrator', 'CSS']
        ],

        [
            'id' => 3,
            'job_title' => 'Network Admin',
            'company' => 'CISCO',
            'email' => 'james@cisco.com',
            'contact_no' => '09202224575',
            'skills' => ['Database', 'Cybersecurity', 'Networking']
        ]
    ];

    array_push($listings, [
        'id' => 4,
        'job_title' => 'Graphic Artist',
        'company' => 'ADOBE',
        'email' => 'princess@adobe.com',
        'contact_no' => '09208456544',
        'skills' => ['Photoshop', 'Bootstrap', 'Flutter']
    ]);
    
    $jobTitle2 = $listings[1]['job_title'];
    $company2 = $listings[1]['company'];
    $email2 = $listings[1]['email'];

    $selectedSkills3 = implode(', ', [$listings[2]['skills'][0], $listings[2]['skills'][2]]);


    $output = "
        <b>Job Listing #2:</b><br>
        Job Title: $jobTitle2 <br>
        Company: $company2 <br>
        Email: $email2 <br><br>

        <b>Skills from Job Listing #3:</b><br>
        Selected Skills: $selectedSkills3
    ";

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
            <h2 class="rtext-xl font-semibold my-4"><?= $challenge ?></h2>
            <p><?= nl2br($body) ?></p>

            <!-- Output -->
            <p><br>
                <b>Solution: </b><br><?php echo $output?><br><br>
                <pre><?php print_r($listings); ?></pre>
            </p>
        </div>
    </div>
</body>
<!-- Pia Macalanda -->
</html>

