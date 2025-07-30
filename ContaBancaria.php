<?php

class ContaBancaria
{
    private float $saldo;
    private float $limiteEspecial;
    private string $titular;
    private string $numero;

    public function __construct(
        // (valor inicial, padrão R$ 0,00)
        string $titular,
        string $numero,
        float $limiteEspecial = 0
    )
    {
        $this->limiteEspecial = $limiteEspecial;
        $this->saldo = 0;
        $this->titular = $titular;
        $this->numero = $numero;
    }

    public function deposito(float $valor): void
    {
        $this->saldo += $valor;
    }

    public function saque(float $valor): void
    {
        if($valor <= $this->consultarLimiteDisponivel()) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo Insuficiente";
        }
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }

    public function consultarLimiteDisponivel(): float
    {
        return $this->limiteEspecial + $this->saldo;
    }
}

$conta = new ContaBancaria(
    titular: 'João',
    numero: '897856'
);

//Verificar se o saldo é iniciado em zero.
echo "O saldo inicial é {$conta->consultarSaldo()}\n";

//Verificar se é possível sacar dinheiro sem saldo.
$conta->saque(10);


$conta2 = new ContaBancaria(
    titular: 'Ana',
    numero: '398570',
    limiteEspecial: 100
);

//Vericar se com o limite especial, é possível sacar sem saldo
echo "O saldo inicial da conta 2 é {$conta2->consultarSaldo()}\n";

//Verificar se é possível sacar sem saldo.
$conta2->saque(50);

//Verificar o saldo
echo "O saldo da conta 2 agora é {$conta2->consultarSaldo()}\n";