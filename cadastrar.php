<?php

require 'app/Entity/Cadastro.php';

use \App\Entity\Cadastro;

$obCadastro = new Cadastro;

if (isset($_POST) && !empty($_POST)) {
    $obCadastro->name = $_POST['name'];
    $obCadastro->email = $_POST['email'];
    $obCadastro->brith = $_POST['brith'];
    $obCadastro->state = $_POST['state'];
    $obCadastro->adress = $_POST['adress'];
    $obCadastro->gender = $_POST['gender'];
    $obCadastro->creditCard = $_POST['creditCard'];
    $obCadastro->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/header.php';
include __DIR__ . '/formulario.php';
include __DIR__ . '/footer.php';
