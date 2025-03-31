<?php

function getNumerologyValue($name) {
    $vowels = ['A', 'E', 'I', 'O', 'U'];
    
    $numerologyChart = [
        'A' => 1, 'B' => 2, 'C' => 3, 'D' => 4, 'E' => 5, 'F' => 6, 'G' => 7, 'H' => 8, 'I' => 9,
        'J' => 1, 'K' => 2, 'L' => 3, 'M' => 4, 'N' => 5, 'O' => 6, 'P' => 7, 'Q' => 8, 'R' => 9,
        'S' => 1, 'T' => 2, 'U' => 3, 'V' => 4, 'W' => 5, 'X' => 6, 'Y' => 7, 'Z' => 8
    ];

    $name = strtoupper(str_replace(' ', '', $name));
    $soulNumber = 0;
    $personalityNumber = 0;
    $destinyNumber = 0;
    
    $soulSolution = [];
    $personalitySolution = [];
    $destinySolution = [];

    foreach (str_split($name) as $char) {
        if (isset($numerologyChart[$char])) {
            $destinyNumber += $numerologyChart[$char];
            $destinySolution[] = $numerologyChart[$char];
            
            if (in_array($char, $vowels)) {
                $soulNumber += $numerologyChart[$char];
                $soulSolution[] = $numerologyChart[$char];
            } 
            else {
                $personalityNumber += $numerologyChart[$char];
                $personalitySolution[] = $numerologyChart[$char];
            }
        }
    }

    return [
        'soul_number' => reduceNumber($soulNumber),
        'soul_solution' => implode(" + ", $soulSolution),
        'personality_number' => reduceNumber($personalityNumber),
        'personality_solution' => implode(" + ", $personalitySolution),
        'destiny_number' => reduceNumber($destinyNumber),
        'destiny_solution' => implode(" + ", $destinySolution)
    ];
}

function reduceNumber($num) {
    while ($num > 9) {
        if (in_array($num, [11, 22, 33])) {
            return $num == 11 ? 2 : ($num == 22 ? 4 : 6);
        }
        $num = array_sum(str_split($num));
    }
    return $num;
}

function getDestinyMeaning($num){
    $destinyChart = [
        1 => "Primal Force",
        2 => "All Knowing",
        3 => "Creative Child",
        4 => "Slat of the Earth",
        5 => "Dynamic Force",
        6 => "The Caretaker",
        7 => "The Seeker",
        8 => "Balance and Power",
        9 => "The Caretaker",
    ];
    
    return $destinyChart[$num] ?? "Unknown";
}

function getPersonalityMeaning($num){
    $personalityChart = [
        1 => "pioneering, leading, independent, attaining, individualistic",
        2 => "cooperation, adaptability, considering, partnering, mediating",
        3 => "expression, verbalization, socialization, arts, joy of living",
        4 => "values foundation, service, struggle, against limits, steady growth",
        5 => "expansiveness, visionary, adventure, constructive use of freedom",
        6 => "responsibility, protection, nurturing, balance, sympathy",
        7 => "analysis, understanding, awareness, studious, meditating",
        8 => "practical endeavors, status-oriented, power-seeking, high-material goals",
        9 => "humanitarian, giving, selflessness, obligations, creative expression",
    ];
    
    return $personalityChart[$num] ?? "Unknown";
}

$names = ["John Smith"];

foreach ($names as $name) {
    $numerology = getNumerologyValue($name);
    echo "Hi $name! Your name number in Numerology is:\n";
    
    echo "Soul Number: {$numerology['soul_number']} (Calculation: {$numerology['soul_solution']})\n";
    echo "Meaning of Soul Number: " . getDestinyMeaning($numerology['soul_number']) . "\n\n";
    
    echo "Personality Number: {$numerology['personality_number']} (Calculation: {$numerology['personality_solution']})\n";
    echo "Meaning of Personality Number: " . getPersonalityMeaning($numerology['personality_number']) . "\n\n";
    
    echo "Destiny Number: {$numerology['destiny_number']} (Calculation: {$numerology['destiny_solution']})\n";
    echo "Meaning of Destiny Number: " . getDestinyMeaning($numerology['destiny_number']) . "\n\n";
}
?>
