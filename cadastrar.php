<?php
require_once './FuncoesDB.php';

if (isset($_POST['login'])) {
    $funcao = new FuncoesDB();
    $funcao->inserir($_POST['login'], $_POST['password'], $_POST['email'], $_POST['saldo']);
    $funcao->close();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <a href="index.php">Voltar</a>
        <div>
            <form name="formulario" action="" method="post" >
                <label>Login: </label>
                <input type="text" required="required" name="login"><br>
                <label>Password: </label>
                <input type="text" required="required" name="password"><br>
                <label>Email: </label> 
                <input type="text" required="required" name="email"><br>
                <label>Saldo: </label>
                <input type="text" required="required" name="saldo"><br>

                <input type="submit" name="s" value="Cadastrar"> <br> <br>
            </form>
        </div>

        <?php
        ?>
    </body>
</html>
