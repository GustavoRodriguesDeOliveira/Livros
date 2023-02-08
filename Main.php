<?php

   require_once("Cadastro.php");
   require_once("Livros.php");
   require_once("DAO/Conexao.php");
   require_once("DAO/Cadastro.php");
   require_once("DAO/Cadastroli.php");
   require_once("DAO/Consultar.php");
   require_once("DAO/Consultarli.php");
   require_once("DAO/Atualizar.php");
   require_once("DAO/Excluir.php");

   echo "------ Teste de Banco de Dados --------<br><br>";
   $conexao = new Conexao();
   $conexao->Conectar();

   $Cadastrar = new Cadastro();
   echo $insert->cadastro($conexao, "", "Manoel mota", "Rua dos bahianos 326", "34252525324", "1999-9-9", "manu.212", "senhalegal123");

   $Cadastra = new Cadastroli();
   echo $insert->cadastro("", "bem dormido", "2000-1-21", 5.25, 30);

   $select = new Consultar();
   echo $select->consultarIndividual($conexao, "cadastro",1);
   echo $select->consultarTudo($conexao,"cadastro");

   $select = new Consultarli();
   echo $select->consultarIndividual($conexao, "livro",1);
   echo $select->consultarTudo($conexao,"livro");

   $atucl = new Atualizar();
   echo $atu->update($conexao, "cadastro", 1);

   $exc = new Excluir();
   echo $exc->deletar($conexao, "estoque", 1);
?>