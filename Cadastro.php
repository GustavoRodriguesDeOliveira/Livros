<?php

    


    class Cadastro{

        private string $nome;
        private string $telefone;
        private string $ndata;
        private string $login;
        private string $seha;

        //Inserir a variável que representa Endereço

        public function __construct(string $nome, string $telefone, string $ndata, string $login, string $senha){

            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->ndata    = $ndata;
            $this->login    = $login;
            $this->senha    = $senha;

        }//fim do construtor


        public function getNome() : string
        {
            return $this->nome;
        }//fim do getNome

        public function setNome(string $nome) : void
        {
            $this->nome = $nome;
        }//fim do setNome

        public function getTelefone() : string
        {
            return $this->telefone;
        }

        public function setTelefone(string $telefone) : void
        {
            $this->telefone = $telefone;
        }

        public function getNdata() : string
        {
            return $this->ndata;
        }

        public function setNdata ($ndata) : void
        {
            $this->$Ndata = $ndata;
        }

        public function getLogin() : string
        {
            return $this->login;
        }

        public function setLogin(string $login) : void
        {
            $this->login = $login;
        }

        public function getSenha() : string
        {
            return $this->senha;
        }

        public function setSenha(string $seha) : void
        {
            $this->senha = $senha;
        }




    }//fim da classe Pessoa
?>