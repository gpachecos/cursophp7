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
$usuario = new Usuario();
$usuario->login("root","!@#$");

echo $usuario;

?>