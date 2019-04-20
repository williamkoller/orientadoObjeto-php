<?php
// Diego é uma pessoa > Diego objeto and pessoa classe
require "Pessoa.php";
require "Programador.php";
$programador = new Programador("William", "PHP");
echo $programador->getNome();

#constantes

echo $programador::ESPECIE;
