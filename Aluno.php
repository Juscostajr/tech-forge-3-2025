<?php
require "Pessoa.php";

class Aluno extends Pessoa
{
    private string $ra;

    public function __construct(
        string $ra, 
        float $massa, 
        string $nome, 
        float $altura, 
        Endereco $endereco
    )
    {
        $this->ra = $ra;
        parent::__construct(
            nome: $nome,
            massa: $massa,
            altura: $altura,
            endereco: $endereco
        );
    }

    public function getRa(): string
    {
        return $this->ra;
    }
}
