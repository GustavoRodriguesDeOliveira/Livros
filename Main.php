<?php

    require_once('Livros.php');
    require_once('Cadastro.php');
    require_once('Endereco.php');



    $endereco = new Endereco("Ave. alagoas","9070","valab","Sul","Mendialopolis","Zanagaoa","CN","China","04343435");
    echo "<br><br> Logradouro: ".$endereco->getLogradouro();
    echo "<br><br> Número: ".$endereco->getNumero();
    echo "<br><br> Nome da unidade:  ".$endereco->getComplemento();
    echo "<br><br> Bairro: ".$endereco->getBairro();
    echo "<br><br> Estado: ".$endereco->getEstado();
    echo "<br><br> UF: ".$endereco->getUF();
    echo "<br><br> Pais: ".$endereco->getPais();
    echo "<br><br> CEP: ".$endereco->getCEP();


    $cadastro = new Cadastro("Cleber bral","11 95848548","1997-12-25","cleibal12","senhalegal123");
    echo "<br><br> Nome completo: ".$cadastro->getNome();
    echo "<br><br> Telefone: ".$cadastro->getTelefone();
    echo "<br><br> Data de nacimento:  ".$cadastro->getNdata();
    echo "<br><br> Login: ".$cadastro->getLogin();
    echo "<br><br> Senha: ".$cadastro->getSenha();


    $livros = new Livros("Vrau nalabra","Livre","2001-12-12",2412,23,5);

    echo "<br><br> Titulo: ".$livros->getTitulo();
    echo "<br><br> Categoria: ".$livros->getCategoria();
    echo "<br><br> Data de lançameto: ".$livros->getDatadel();
    echo "<br><br> Codigo: ".$livros->getCodigo();
    echo "<br><br> Quantidade: ".$livros->getQuantidade();
    echo "<br><br> Valor: ".$livros->getVenda();
    




?>