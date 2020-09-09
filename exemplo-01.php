<?php

class Pessoa {//Classe

    public $nome;//Atributo (Variáveis)

    public function falar(){//Método (Funções)

        return "O meu nome é ".$this->nome;//Pseudo Variável $this->

    }

}

$glaucio = new Pessoa();//Classe Instanciada
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

?>
