<?php

use \App\Entity\Cadastro;

require 'app/Entity/Cadastro.php';

$obCadastro = Cadastro::getCadastro($_GET['id']);

if(!$obCadastro instanceof Cadastro){
  header('location: index.php?status=error');
  exit;
}

if(isset($_POST) && !empty($_POST)){ 
  $obCadastro->name = $_POST['name'];
  $obCadastro->email = $_POST['email'];
  $obCadastro->brith = $_POST['brith'];
  $obCadastro->state = $_POST['state'];
  $obCadastro->gender = $_POST['gender'];
  $obCadastro->creditCard = $_POST['creditCard'];
  $obCadastro->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/header.php';
include __DIR__.'/formulario.php';
include __DIR__.'/footer.php';