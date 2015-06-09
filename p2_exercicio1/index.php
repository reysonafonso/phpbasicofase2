<?php
    $numeros = array();

    for($i = 1; $i <= 100; $i++)
        $numeros[$i] = $i;

    foreach($numeros as $numero)
    {
        if($numero % 2 == 0)
            echo "O numero {$numero} é par<br/>";
        else
            echo "O numero {$numero} é impar<br/>";
    }