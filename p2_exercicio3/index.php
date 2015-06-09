<hr/>
<h2>Lista da Turma</h2>

<?php
$turma = array(
        array("nome"=>"Reyson", "matricula" => "130879", "altura" => 1.73),
        array("nome"=>"Denes", "matricula" => "120676", "altura" => 1.62),
        array("nome"=>"Vilton", "matricula" => "120280", "altura" => 1.69),
        array("nome"=>"Marcos","matricula" => "080784", "altura" => 1.71),
        array("nome"=>"Marcio","matricula" => "300686", "altura" => 1.69),
        array("nome"=>"Rodrigo","matricula" => "220384", "altura" => 1.69),
        array("nome"=>"Chicao","matricula" => "040976", "altura" => 1.82),
        array("nome"=>"Fabricio","matricula" => "300684", "altura" => 1.71),
        array("nome"=>"Joao","matricula" => "230586", "altura" => 1.78),
        array("nome"=>"Cleusson","matricula" => "120678", "altura" => 1.69),
        array("nome"=>"Mirclei","matricula" => "130484", "altura" => 1.61),
        array("nome"=>"Josue","matricula" => "150681", "altura" => 1.89),
        array("nome"=>"Arnaldo","matricula" => "080675", "altura" => 1.75),
        array("nome"=>"Marcelo","matricula" => "130679", "altura" => 1.78),
        array("nome"=>"James","matricula" => "230678", "altura" => 1.67),
        array("nome"=>"Jones","matricula" => "150779", "altura" => 1.71),
        array("nome"=>"Giovanni","matricula" => "030377", "altura" => 1.75),
        array("nome"=>"Marcelinho","matricula" => "300488", "altura" => 1.71),
        array("nome"=>"Jander","matricula" => "240575", "altura" => 1.74),
        array("nome"=>"Moises","matricula" => "221178", "altura" => 1.88));

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Matricula</th>
        <th>Altura</th>
    </tr>
    <?php foreach($turma as $item): ?>
        <tr>
            <td><?php print $item['nome']; ?></td>
            <td><?php print $item['matricula']; ?></td>
            <td><?php print $item['altura']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
foreach($turma as $key => $row){
    $matricula[$key] = $row['matricula'];
    $altura[$key] = $row['altura'];
}

array_multisort($altura, SORT_DESC, $matricula, SORT_ASC, $turma);

?>
<br/>
<hr/>
<h3>Alunos mais altos</h3>
<table border="1">
    <tr>
        <th>Matricula</th>
        <th>Altura</th>
    </tr>
    <?php for($i = 0; $i <= 5; $i++){?>
        <tr>
            <td><?php print $turma[$i]['matricula']; ?></td>
            <td><?php print $turma[$i]['altura']; ?></td>
        </tr>
    <?php } ?>
</table>
