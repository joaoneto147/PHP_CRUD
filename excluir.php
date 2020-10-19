<?php

use \App\Entity\Cadastro;

require 'app/Entity/Cadastro.php';

$obCadastro = Cadastro::getCadastro($_GET['id']);

if(!$obCadastro instanceof Cadastro){
  header('location: index.php?status=error');
  exit;
}

if(isset($_POST['excluir'])){

  $obCadastro->excluir();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/header.php';
include __DIR__.'/confirmar-exclusao.php';
include __DIR__.'/footer.php';