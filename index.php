<?php

require_once 'conexao/CConexao.php';
require_once 'conexao/Usuario.php';

$usuario = new Usuario();
$dados = $usuario->findAll();

//print '<pre>';
//print_r($dados);
?>

<!--<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Login</th>
        </tr>
    <thead>
    <tbody>
        <?php 
        /*foreach($dados as $dado):
            echo '<tr>';
                echo "<td>".$dado['nome']."</td>";
                echo "<td>".$dado['login']."</td>";
            echo '</tr>';
        endforeach; */
        ?>
    </tbody>
</table>-->

<form action="gravar.php" method="post">

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome"/>

    <label for="login">Login</label>
    <input type="text" name="login" id="login"/>

    <input type="submit" value="Gravar"/>
</form>