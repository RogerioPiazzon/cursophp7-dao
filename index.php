<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios=$sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(3); 
//echo $root;

//Carrega uma lista de Usuario
//$list = Usuario::getList();
//echo json_encode($list);

//Carrega uma lista de Usuarios buscando pelo Login
//$search = Usuario::search("Jo");
//echo json_encode($search);

//Carrega um usuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("root","senha");
//echo $usuario;

//Insert de usuario novo
$aluno = new Usuario("aluno2","senha2");
$aluno->insert();
echo $aluno;



 ?>