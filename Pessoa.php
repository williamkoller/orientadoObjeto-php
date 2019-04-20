<?php

// class Pessoa
// {
//   public $nome;
//   public $site;
//
//   public function falarNome()
//   {
//     echo $this->nome;
//
//   }
//   public function falarSite()
//   {
//     echo $this->site;
//   }
// }


class Pessoa
{
  protected $nome;
  const ESPECIE = "Humana";

  public function __construct($tmpNome)
  {
    $this->nome = $tmpNome;
  }

  public function setNome($novoNome)// definir variável
  {
    $this->nome = $novoNome;
  }

  public function getNome()// return da variável $nome
  {
    return $this->nome;

  }
}
