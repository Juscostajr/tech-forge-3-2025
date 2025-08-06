<?php
require_once "Endereco.php";

class Pessoa
{
    private float $massa;
    private float $altura;
    private string $nome;
    private Endereco $endereco;

    public function __construct(string $nome, float $massa, float $altura, Endereco $endereco)
    {
        $this->massa = $massa;
        $this->altura = $altura;
        $this->nome = $nome;
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

    public function getNome(): string
    {
        return $this->nome;
    }
}

