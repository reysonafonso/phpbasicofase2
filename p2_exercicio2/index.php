<?php

$alunos = array('Reyson' => 9, 'Suelen' => 9,'Denes' => 9,'Ray' => 9,'Giovanni' => 6,
    'Andrea' => 7,'Eduardo' => 4,'Terliani' => 6,'Diony' => 6,'Jessica' => 10,'Ronaldo' => 9,
    'Rafaella' => 6,'Marloy' => 5,'Gabriella' => 3,'Pedro' => 5,'Alcilene' => 7,
    'Viviane' => 3, 'Eneas' => 4,'Monik' => 3,'Paulo' => 2);

?>

<html>
<head>
    <title>Notas dos Alunos</title>
    <h1>Nota e Situação dos Alunos</h1>
    <ul>
    <?php foreach($alunos as $aluno => $nota):?>
        <li>
            <?php if($nota >= 7)
                    echo $aluno." - ". $nota . " | <font color = 'blue'> Aprovado </font>";
                else
                    echo $aluno." - ". $nota . " | <font color = 'red'> Reprovado </font>";
            ?>
        </li>
    <?php endforeach?>
    </ul>

</head>
</html>