<?php
require_once 'CConexao.php';

class Usuario extends CConexao{

    public function findAll(){
        $sql = "SELECT * FROM usuarios";
        $query = $this->executar($sql);
        return $this->retorna_array($query);
    }

    public function save($nome= null, $login = null){
        $sql = "INSERT INTO usuarios (login, nome) VALUES ('$login', '$nome')";
        return $this->executar($sql);
    }
    
}