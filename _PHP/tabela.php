<?php
 $linhas = file("../Tabela.txt", FILE_IGNORE_NEW_LINES);
 $totalgeral = 0;
?>

<table border="1">
    <tr>
        <th>DATA/HORA</th>
        <th>CÓDIGO</th>
        <th>DESCRIÇÃO</th>
        <th>VALOR</th>
        <th>QUANTIDADE</th>
        <th>TOTAL</th>
    </tr>

    <?php foreach ($linhas as $linha) {

        $partes = explode("|", $linha);
        $total = $partes[3] * $partes[4];
        $totalgeral = $total + $totalgeral;
        
    ?>

    <tr>
        <td><?=$partes[0]?></td>
        <td><?=$partes[1]?></td>
        <td><?=$partes[2]?></td>
        <td><?=$partes[3]?></td>
        <td><?=$partes[4]?></td>
        <td><?=$total?></td>
        
    </tr>
    <?php } ?>
    <tr>
        <td colspan="4"></td>
        <td>TOTAL GERAL</td>
        <td><?=$totalgeral?></td>
    </tr>

</table>