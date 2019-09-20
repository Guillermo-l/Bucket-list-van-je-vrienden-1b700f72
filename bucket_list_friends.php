<?php

$vrienden = [];

echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$aantalVrienden = readline(">");

if (is_numeric($aantalVrienden)) {

    for ($i = 0; $i < $aantalVrienden; $i++) {
        echo "Wat is jouw naam?" . PHP_EOL;
        $namen = readline(">");
        echo "Wat is jouw droom?" . PHP_EOL;
        $vrienden[$namen] = readline(">");
    }

    foreach ($vrienden as $naam => $droom) {
        echo $naam . "heeft dit als droom: " . $droom . PHP_EOL;
    }
} else {
    echo "'$aantalVrienden' is geen geldig getal, probeer het opnieuw!" . PHP_EOL;
    exit();
}

?>