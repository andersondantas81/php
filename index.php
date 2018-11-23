<?php
require_once './FuncoesDB.php';

if (isset($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
}

$func = new FuncoesDB();
if (isset($_POST['btCadastrar'])) {
    if (mysqli_fetch_array($func->verificar($login, $password)) <= 0) {
        echo '<script type=text/javascript>alert("Login/password incorreto!");window.location.href="index.html";</script>';
    }
}
$rst = $func->pesquisarAll();
?>
<html>
    <head>
        <title>Pesquisar todos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <div class="menu-index">
            <ul style="list-style: none; display: inline" >
                <li style="display: inline">
                    <a href="cadastrar.php">Cadastrar</a>
                </li>
                <li style="display: inline">
                    <a href="apagar.php">Alterar Registro</a>
                </li>

            </ul>
        </div>
        <br><br>
        <form action='apagar.php' method="post">
        <table border='1'>
            <tr>
                <td></td>
                <td>ID</td>
                <td>LOGIN</td>
                <td>PASSWORD</td>
                <td>EMAIL</td>
                <td>SALDO</td>
                <td></td>
            </tr>

            <?php while ($valor = mysqli_fetch_array($rst)) { ?>
                <tr>         
                    <td><input type="checkbox"  name="excluir" value="<?php echo $valor['ID'] ?>"> </td> 
                    <td><?php echo $valor['ID'] ?></td>
                    <td><?php echo $valor['login'] ?></td>
                    <td><?php echo $valor['password'] ?></td>
                    <td><?php echo $valor['email'] ?></td>
                    <td><?php echo $valor['saldo'] ?></td>
                    <td><input type='submit' name="btExcluir" value="Excluir"></td>
                </tr>
            <?php } ?>
        </table>
        </form>

    </body>
</html>
