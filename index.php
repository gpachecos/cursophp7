<?php

require_once("config.php");


//carrega um usuario
// $root = new Usuario();
// $root->loadById(4);
// echo $root;

//carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

//carrega um usuario usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("root","!@#$");
// echo $usuario;

//criando um novo usuario
// $aluno = new Usuario("aluno","@alun0");
// $aluno->insert();
// echo $aluno;

//alterar um usuario
// $usuario = new Usuario();
// $usuario->loadById(8);
// $usuario->update("professor","!@#$%¨&*");
// echo $usuario;

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete(); 

echo $usuario;

?>