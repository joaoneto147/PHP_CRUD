<?php

use App\Entity\Cadastro;

require 'app/Entity/Cadastro.php';

$cadastros = Cadastro::getCadastros();

include __DIR__.'/header.php';
include __DIR__.'/listagem.php';
include __DIR__.'/footer.php';