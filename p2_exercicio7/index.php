<?php

function fibonnaci($n)
{
    if($n >= 2) {
        $f = [1, 1];
        for($i = 2; $i <= $n; $i++){
            $f[$i] = $f[$i-1] + $f[$i-2];
        }
        return $f;
    }
    return ($n == 1) ? [1] : [];
}


?>


<hr/>
<table border="1">
    <tr>
        <th>Indice</th>
        <th>Valor</th>
    </tr>
    <?php $fib = fibonnaci(100);
    foreach ($fib as $i=>$v) {?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $v;?></td>
        </tr>
    <?php } ?>
</table>


