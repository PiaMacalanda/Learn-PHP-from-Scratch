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

    foreach (str_split($name) as $char) {
        if (isset($numerologyChart[$char])) {
            $destinyNumber += $numerologyChart[$char];
            if (in_array($char, $vowels)) {
                $soulNumber += $numerologyChart[$char];
            } else {
                $personalityNumber += $numerologyChart[$char];
            }
        }
    }

    return [
        'soul_number' => reduceNumber($soulNumber),
        'personality_number' => reduceNumber($personalityNumber),
        'destiny_number' => reduceNumber($destinyNumber)
    ];
}

function reduceNumber($num) {
    while ($num > 9 && !in_array($num, [11, 22, 33])) {
        $num = array_sum(str_split($num));
    }
    return $num;
}

function getPersonalityMeaning($num) {
    $personalityChart = [
        1 => "Pioneering, leading, independent, attaining, individualistic",
        2 => "Cooperation, adaptability, considering, partnering, mediating",
        3 => "Expression, verbalization, socialization, arts, joy of living",
        4 => "Values foundation, service, struggle against limits, steady growth",
        5 => "Expansiveness, visionary, adventure, constructive use of freedom",
        6 => "Responsibility, protection, nurturing, balance, sympathy",
        7 => "Analysis, understanding, awareness, studious, meditating",
        8 => "Practical endeavors, status-oriented, power-seeking, high-material goals",
        9 => "Humanitarian, giving, selflessness, obligations, creative expression",
        11 => "Higher spiritual plane, intuitive, illumination, idealist, dreamer",
        22 => "Master builder, large endeavors, powerful force, leadership",
        33 => "Master teacher"
    ];
    
    return $personalityChart[$num] ?? "Unknown";
}

$names = ["John Smith", "Jane Doe", "Alex", "Eli", "Yvonne"];

foreach ($names as $name) {
    $numerology = getNumerologyValue($name);
    echo "Name: $name\n";
    echo "Soul Number: {$numerology['soul_number']}\n";
    echo "Personality Number: {$numerology['personality_number']} - " . getPersonalityMeaning($numerology['personality_number']) . "\n";
    echo "Destiny Number: {$numerology['destiny_number']}\n";
    echo "--------------------------\n";
}

?>
