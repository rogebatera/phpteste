<?php

abstract class CConexao {

    protected $conexao;
    private $banco = "kanban";
    private $usuario = "postgres";
    private $senha = "postgres";
   
    public function __construct(){
        $this->openConect();
    }

    private function openConect(){
        $this->conexao = pg_connect("host=10.29.225.14 port=5432 dbname='{$this->banco}' user='{$this->usuario}' password='{$this->senha}'");
    }

    public function executar($sql){
        return pg_query($sql);
    } 

    public function GetRegistro($result){
        return pg_fetch_array($result);
    }

    
    public function GetObjeto($rst) {
        return pg_fetch_object($rst);
    }

    public function retorna_array($sql){
        $arrAux = null;
        $arrI = 0;
        while($pront = $this->GetRegistro($sql)){
            $arrAux[$arrI] = $pront;
            $arrI++;
        }
        return $arrAux;
    }
    
}