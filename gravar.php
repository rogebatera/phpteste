<?php

require_once 'conexao/CConexao.php';
require_once 'conexao/Usuario.php';

$nome = $_POST['nome'];
$login = $_POST['login'];

$usuario = new Usuario();
$gravar = $usuario->save($nome, $login);

if($gravar){
    echo 'Gravado com Sucesso';
}else{
    echo 'Algum Problema ao Gravar';
}