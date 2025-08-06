<?php

class Endereco
{
    private string $logradouro;
    private int $numero;
    private Cidade $cidade;

    public function __construct(string $logradouro, int $numero, Cidade $cidade)
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    public function getCidade(): Cidade
    {
        return $this->cidade;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getLogradouro(): string
    {
        return $this->logradouro;
    }
}
//Crie uma classe Cidade, adicione um atributo $cidade a classe Endereco;