<?php

echo "Welkom bij het spelletje: Steen-Papier-Schaar" . PHP_EOL;
echo "Om te beginnen moet u kiezen uit de 3: steen - papier - schaar. Typ in lower caps: " . PHP_EOL;
$speler = readline(); 

$handCPU = array('steen', 'papier', 'schaar');
shuffle($handCPU);

$CPU = $handCPU[0];

echo 'Speler: '.$speler.PHP_EOL.'Computer: '.$CPU;

if ($speler === $CPU) {
    echo PHP_EOL . "Gelijk spel!";
} elseif ($speler === "steen") {
    if ($CPU === "schaar") {
        echo PHP_EOL . "Speler wint!";
    } else {
        echo PHP_EOL . "Computer wint!";
    }
} elseif ($speler === "papier") {
    if ($CPU === "steen") {
        echo PHP_EOL . "Speler wint!";
    } else {
        if ($CPU === "schaar") {
            echo PHP_EOL . "Computer wint!";
        }
    }
} elseif ($speler === "schaar") {
    if ($CPU === "steen") {
        echo PHP_EOL . "Computer wint!";
    } else {
        if ($CPU === "papier") {
            echo PHP_EOL . "Speler wint!";
        }
    }
}

?>