<?php
ini_set('display_errors' ,1);
class UserDAO {
    public function salvar(User $user) {
        $pwsCrypt = md5(crypt($user->getEmail(),$user->getPws()));
        var_dump($user->getNome());
        var_dump($pwsCrypt);
        die();

        require_once 'ConnectDB.php';
        try {
            $con = new Conecta();
            $sql = "INSERT INTO users (nome, email, pws, created_at) VALUES (:nome,:email, :pw1, :created_at)";
            $stmt = $con->getConection()->prepare($sql);
            $stmt->bindParam(":nome",$user->getNome());
            $stmt->bindParam(":email",$user->getEmail());
            $stmt->bindParam(":pw1",crypt($user->getEmail(),$user->getPws()));
            $stmt->bindParam(":created_at",date("Y-m-d"));
            
            $stmt->execute();
            return true;
        } catch (PDOException $exc){
            echo "Erros de:". $exc->getMessage();
        }
    }
    public function listarTodos(){
        require_once 'ConnectDB.php';
        try {
            $con = new Conecta();
            $sql = "SELECT * from Cliente";
            $stmt = $con->getConection()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exc){
            echo "Erros de:". $exc->getMessage();
        }
    }
    public function buscarLogin($email, $pw1) {
        $pwsCrypt = md5(crypt($email,$pw1));
        var_dump($email);
        var_dump($pwsCrypt);
        die();

        require_once 'ConnectDB.php';
         try {
            $con = new Conecta();
            $sql = "SELECT nome, email from users where email=:email and pw1=:pw1 limit 1";
            $stmt = $con->getConection()->prepare($sql);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pw1", $pwsCrypt);
            $stmt->execute();
            $dados = $stmt->fetch(PDO::FETCH_BOTH); 
            return $dados["name"];
        } catch (PDOException $exc){
            echo "Erros de:". $exc->getMessage();
        }
    }
     public function buscarID($id){
        require_once 'ConnectDB.php';
        try {
            $con = new Conecta();
            $sql = "SELECT * from Cliente where idCliente = :id";
            $stmt = $con->getConection()->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exc){
            echo "Erros de:". $exc->getMessage();
        }
    }
}