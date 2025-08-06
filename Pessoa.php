<?php
require_once "Endereco.php";

class Pessoa
{
    private float $massa;
    private float $altura;
    private Endereco $endereco;

    public function __construct(float $massa, float $altura, Endereco $endereco)
    {
        $this->massa = $massa;
        $this->altura = $altura;
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
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
