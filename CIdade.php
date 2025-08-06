<?php

class Cidade
{
    private string $nome;
    private string $uf;

    public function __construct(string $nome, string $uf)
    {
        $this->nome = $nome;
        $this->uf = $uf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getUf(): string
    {
        return $this->uf;
    }
}