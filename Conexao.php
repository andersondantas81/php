<?php

class Conexao {

    private $host;
    private $username;
    private $passwd;
    private $dbname;
    private static $con;

    public function __construct() {

        $this->host = 'localhost';
        $this->username = 'root';
        $this->passwd = '';
        $this->dbname = 'db_objetive';
    }
    
    public function conectar() {
        
        try {
            if (is_null(self::$con)) {
                self::$con = new mysqli($this->host, $this->username, $this->passwd, $this->dbname);
            }
            return self::$con;   
            
        } catch (mysqli_sql_exceptio $exc) {
            echo $exc->getMessage();
        }
    }    
    
    public function desconectar() {
        if (!is_null(self::$con)) {
            mysqli_close(self::$con);   
        }
    }
    
    
}

?>
