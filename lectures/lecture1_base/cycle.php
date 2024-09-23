<?php

// Цикл for:


for ($i = 0; $i < 5; $i++) {
    echo $i . " "; // Выведет: 0 1 2 3 4
}


// Цикл while:

    $i = 0;
    while ($i < 5) {
        echo $i . " "; // Выведет: 0 1 2 3 4
        $i++;
    }
    
// Цикл do...while:

    $i = 0;
    do {
        echo $i . " "; // Выведет: 0 1 2 3 4
        $i++;
    } while ($i < 5);


// Цикл foreach (для массивов):

    $array = [1, 2, 3, 4, 5];
    foreach ($array as $value) {
        echo $value . " "; // Выведет: 1 2 3 4 5
    }
    