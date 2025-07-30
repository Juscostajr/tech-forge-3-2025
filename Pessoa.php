<?php

class Pessoa
{
    public float $massa;
    public float $altura;

    public function calcularIMC(): float
    {
        return $this->massa / ($this->altura ** 2);
    }
}

$pessoa = new Pessoa();
$pessoa->massa = 80;
$pessoa->altura = 1.8;
echo "O IMC da pessoa é {$pessoa->calcularIMC()}\n";