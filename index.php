<?php

    require_once("config.php");

    // Carrega um usuário:
    //$root = new Usuario();
    //$root->loadbyID(4);
    //echo $root;

    // Carrega uma lista de usuários:
    //$lista = Usuario::getList();
    //echo json_encode($lista);

    //Carrega uma lista de usuários buscando pelo login:
    //$search = Usuario::search("oo");
    //echo json_encode($search);

    //Carrega um usuário usando o login e a senha:
    //$usuario = new Usuario();
    //$usuario->login("LOGIN", "SENHA");

    //echo $usuario;

    //Criando um novo usuário
    //$aluno = new Usuario("joaozinho", "senha123");
    //$aluno->insert();
    //echo $aluno;

    $usuario = new Usuario();

    $usuario->loadbyID(10);

    $usuario->update('professor', 'novasenha');

    echo $usuario;
