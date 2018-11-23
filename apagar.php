<?php

require_once './FuncoesDB.php';

if (isset($_POST['excluir'])) {
    $funcao = new FuncoesDB();
    $funcao->deletar($_POST['excluir']);
    $funcao->close();
    header('Location:index.php');
}
?>

