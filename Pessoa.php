<?php

class Pessoa
{
    public float $massa;
    public float $altura;
    public string $nome;

    public function calcularIMC(): float
    {
        return $this->massa / ($this->altura ** 2);
    }
}

$joao = new Pessoa();
$joao->nome = 'João';
$joao->altura = 1.60;
$joao->massa = 70;

echo "O IMC de {$joao->nome} é {$joao->calcularIMC()}";