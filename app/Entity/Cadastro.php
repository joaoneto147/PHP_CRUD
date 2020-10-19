<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

require 'app/Db/Database.php';

class Cadastro
{

  public $id;
  public $name;
  public $email;
  public $brith;
  public $state;
  public $adress;
  public $gender;
  public $creditCard;

  public function cadastrar()
  {    

    $obDatabase = new Database('cadastros');
    $this->id = $obDatabase->insert([
      'name' => $this->name,
      'email' => $this->email,
      'brith' => $this->brith,
      'state' => $this->state,
      'adress' => $this->adress,
      'gender' => $this->gender,
      'creditCard' => $this->creditCard
    ]);

    return true;
  }

  public function excluir()
  {
    return (new Database('cadastros'))->delete('id = ' . $this->id);
  }

  public function atualizar()
  {   

    return (new Database('cadastros'))->update(
      'id = ' . $this->id,
      [
        'name' => $this->name,
        'email' => $this->email,
        'brith' => $this->brith,
        'state' => $this->state,
        'adress' => $this->adress,
        'gender' => $this->gender,
        'creditCard' => $this->creditCard
      ]
    );
  }

  public static function getCadastros($where = null, $order = null, $limit = null)
  {
    return (new Database('cadastros'))->select($where, $order, $limit)
      ->fetchAll(PDO::FETCH_CLASS, self::class);
  }

  public static function getCadastro($id)
  {
    return (new Database('cadastros'))->select('id = ' . $id)
      ->fetchObject(self::class);
  }
}
