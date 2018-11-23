<?php
include_once './Conexao.php';;

class FuncoesDB {

    private $con;
    private $conectado;

    public function __construct() {
        $this->con = new Conexao();
    }

    public function inserir($login, $password, $email, $saldo){
        $sql = "INSERT INTO usuarios(login, password, email, saldo) VALUES('$login', '$password', '$email', '$saldo')";       
        if(is_null($this->con)){
           return $this->con->conectar()->query($sql);
        }
        return $this->con->conectar()->query($sql);
        
    }
    public function deletar($id){
        
        $sql = "DELETE FROM usuarios WHERE ID = '$id'";
        if(is_null($this->con)){
           return $this->con->conectar()->query($sql);
        }
        return $this->con->conectar()->query($sql);
        
    }
    public function alterar($id, $email, $saldo){
        
        $sql = "UPDATE usuarios SET email = '$email', saldo = '$saldo' WHERE ID = '$id'";
        if(is_null($this->con)){
           return $this->con->conectar()->query($sql);
        }
        return $this->con->conectar()->query($sql);
        
    }
    public function pesquisarAll(){
        
        $sql = "SELECT * FROM usuarios";
         if(is_null($this->con)){
           return $this->con->conectar()->query($sql);
        }
        return $this->con->conectar()->query($sql);
        
    }
    public function verificar($login, $password){
        
        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND password='$password'";
         if(is_null($this->con)){
           return $this->con->conectar()->query($sql);
        }
        return $this->con->conectar()->query($sql);
        
    }
    public function close(){
        if(is_null($this->con)){
            $this->con->desconectar();            
        }
    }
}
