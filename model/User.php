<?php
    class User {
        private $idUser;
        private $name;
        private $email;
        private $pws;


        function setEmail($email) {
            $this->email = $email;
        }
        function getEmail() {
            return $this->email;
        }

        function setPws($pws) {
            $this->pws = $pws;
        }
        function getPws() {
            return $this->pws;
        }

        public function setName ($name){
            $this->name = $name;
        }
        public function getName (){
            return $this->name;
        }
        
        public function setIDCliente($id){
            $this->idCliente = $id;
        }
        public function getIDCliente(){
            return $this->idCliente;
        }

        function valida(){
            $erros = null;
            if ($name == ""){
                $erros .= "Nome em branco. <br>";
            }
            if ($email == ""){
                $erros .= "E-mail em branco. <br>";
            }
            if ($pws == ""){
                $erros .= "Senha em branco. <br>";
            }
            return $erros;
        }
    }
    
?>