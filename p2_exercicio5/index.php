<?php

function verificaSituacao($nota)
{
    if($nota >= 7)
        return "Aprovado";
    else
        return "Reprovado";
}

$alunos = array('Reyson' => 9, 'Suelen' => 9,'Denes' => 9,'Ray' => 9,'Giovanni' => 6,
    'Andrea' => 7,'Eduardo' => 4,'Terliani' => 6,'Diony' => 6,'Jessica' => 10,'Ronaldo' => 9,
    'Rafaella' => 6,'Marloy' => 5,'Danielle' => 3,'Pedro' => 5,'Alcilene' => 7,
    'Viviane' => 3, 'Eneas' => 4,'Monik' => 3,'Paulo' => 2);


?>

<html>
<head>
    <title>Notas dos Alunos</title>
    <h1>Situação dos Alunos</h1>
    <h3>Alunos aprovados</h3>
    <ul>
        <?php foreach($alunos as $aluno => $nota):?>
            <li>
                <?php echo $aluno.' - '.verificaSituacao($nota)?>;
            </li>
        <?php endforeach?>
    </ul>

</head>
</html>