<?php

class BancoDados{
    private $servername = '127.0.0.1';
    private $username = 'root';
    private $password = '';
    private $dbname = 'fatec';
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function __destruct(){
        mysqli_close($this->conn);
    }

    private function validar_ra($ra){
        if ($ra < 0){
            echo "numero RA tem que ser positivo";
            return FALSE;
        }
        return TRUE;
    }
    public function adicionar_aluno_fatec($nome, $sobrenome, $curso, $ra){
        if ($this->validar_ra($ra)){
            $sql = "INSERT INTO aluno_fatec ( `nome`, `sobrenome`, `curso`, `ra`) ";
            $sql = $sql. "VALUES ('".$nome."', '".$sobrenome."', '".$curso."', '".$ra."')";
            if (mysqli_query($this->conn, $sql)) {
                echo "Cadastro feito com sucesso";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
        

    }
}

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$curso = $_POST['curso'];
$ra = $_POST['ra'];
$DBMagico = new BancoDados;
$DBMagico->adicionar_aluno_fatec($nome, $sobrenome, $curso, $ra);


?>