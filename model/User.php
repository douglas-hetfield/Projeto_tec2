<?php
    class Cliente {
        private $idCliente;
        private $nome;
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

        public function setNome ($nome){
            $this->nome = $nome;
        }
        public function getNome (){
            return $this->nome;
        }
        
        public function setIDCliente($id){
            $this->idCliente = $id;
        }
        public function getIDCliente(){
            return $this->idCliente;
        }
    }
    
?>