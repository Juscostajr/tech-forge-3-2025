<?php
require "Pessoa.php";

$pessoa = new Pessoa(
    massa: 70, 
    altura: 1.7,
    endereco: new Endereco('Rua São Josafat',55)
);

echo "A massa da pessa é {$pessoa->getMassa()}\n";
echo "O IMC da pessoa é {$pessoa->calcularIMC()}\n";
echo "O endreco da pessoa é {$pessoa->getEndereco()->getLogradouro()}, ";
echo "{$pessoa->getEndereco()->getNumero()}\n";
//Com o metodo __toString() é possível imprimir o objeto em forma de string.
echo $pessoa->getEndereco();