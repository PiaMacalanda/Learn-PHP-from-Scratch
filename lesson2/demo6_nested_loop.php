<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Welcome To The Course🍓';
    $hashtag = '#lesson2d06 #nestedLoop';
    $header2 = $sentence.$hashtag;

    /* for ($i=0; $i < 5; $i++) { 
        
        for ($j=0; $j < 10; $j++) {
            echo $i .' - '.$j. '<br>';
        }
    } */

    $i=0;

    while ($i < 5) {

        $j=0;

        while ($j < 10) {
            echo $i .' - '.$j. '<br>';
            $j++;
        }

        $i++;
    }
?>

