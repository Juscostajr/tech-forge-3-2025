<?php

class Pessoa
{
    private float $massa;
    private float $altura;
    private string $nome;

    public function __construct(string $nome, float $massa, float $altura)
    {
        $this->massa = $massa;
        $this->altura = $altura;
        $this->nome = $nome;
    }

    public function calcularIMC(): float
    {
        return $this->massa / ($this->altura ** 2);
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}

$pessoa = new Pessoa(nome: 'João', massa: 70, altura: 1.75);

echo "O IMC de {$pessoa->getNome()} é {$pessoa->calcularIMC()}\n";
