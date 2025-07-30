<?php

class Pessoa
{
    private float $massa;
    private float $altura;

    public function __construct(float $massa, float $altura)
    {
        $this->massa = $massa;
        $this->altura = $altura;
    }

    public function calcularIMC(): float
    {
        return $this->massa / ($this->altura ** 2);
    }

    public function getMassa(): float
    {
        return $this->massa;
    }
}


$pessoa = new Pessoa(massa: 70, altura: 1.7);

echo "A massa da pessa é {$pessoa->getMassa()}\n";
echo "O IMC da pessoa é {$pessoa->calcularIMC()}\n";