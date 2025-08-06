<?php
class Endereco
{
    private string $logradouro;
    private string $numero;

    public function __construct(string $logradouro, string $numero)
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
    }

    public function getLogradouro(): string
    {
        return $this->logradouro;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function __toString()
    {
        return "{$this->logradouro}, {$this->numero}\n";
    }
}
