<?php

$cod = $_POST['cod'];
$desc = $_POST['desc'];
$val = $_POST['val'];
$quant = $_POST['quant'];

$linhas = date('d/m/Y H:i:s'). " | " . $cod . " | " . $desc . " | " . $val . " | " . $quant . PHP_EOL;

file_put_contents('../Tabela.txt',$linhas, FILE_APPEND);

header('location: ../_HTML/index.html');
exit();

?>