<?php

require "Pessoa.php";


$pessoa = new Pessoa(
    nome: 'João', 
    massa: 80, 
    altura: 2.0,
    endereco: new Endereco('Rua São Josafat', 588, new Cidade('Campo Mourão','PR'))
);

echo "O IMC de {$pessoa->getNome()} é {$pessoa->calcularIMC()}\n";

echo "{$pessoa->getNome()} mora na {$pessoa->getEndereco()->getLogradouro()}\n";

//Crie uma classe Cidade, adicione um atributo $cidade a classe Endereco;

$endereco = new Endereco('Rua dos Bobos', 0, new Cidade('Campo Mourão', 'PR'));

$aluno = new Aluno(
    ra: '9888888',
    massa: 75,
    nome: 'Juscelino',
    altura: 1.8,
    endereco: $endereco
);