<?php

function parImpar($n)
{
    if($n % 2 == 0)
        return "Número Par";
    else
        return "Número Impar";
}

for($i=1; $i<=100; $i++) {
    echo $i.' é '.parImpar($i).'<br/>';
}
