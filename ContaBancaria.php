<?php

//transferencia / deposito

class ContaBancaria {
    Public $saldo = 1500;
    public $titular = "Eduardo Bussolotto";
    public $agencia = 6675;
    public $conta = 8806 - 5;
    public $titularDestinatario = "";
    public $agenciaDestinatario = 0;
    public $contaDestinatario = 0;

    public function setConta($titular, $agencia, $conta){
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->conta = $conta;
    }

    public function setContaDestinatario($titular, $agencia, $conta){
        $this->titularDestinatario = $titular;
        $this->agenciaDestinatario = $agencia;
        $this->contaDestinatario = $conta;
    }

        
    
    public function saque($valor){
        if ($this->saldo >= $valor){
            $this->saldo -= $valor;
            return $this->saldo;
        } else {
            echo "Saldo Insuficiente! Seu saldo atual é: {$this->saldo}";
        }
    }
    public function transferencia($valorTransferencia){
        
        if ($this->saldo >= $valorTransferencia){
            $this->saldo -= $valorTransferencia;
            
            $transferencia = (
            "O valor a ser transferido é: {$valorTransferencia}\nDa conta:\n" . $this->getInfoConta() . "\npara a conta:\n" . 
            $this->getInfoContaDestinatario() . "O Seu saldo atual é: {$this->saldo}.\n"
        );
            echo "$transferencia";
            return $this->saldo;
        } else {
            echo "Saldo Insuficiente! Seu saldo atual é: {$this->saldo}";
        }
    }

    public function deposito($valor){
        $this->saldo += $valor;
        return $this->saldo;
    }

    public function exibirSaldo(){
        echo "O seu saldo atual é: $this->saldo";
    }

    public function getInfoConta(){
        return "Titular: $this->titular.
        Agencia: $this->agencia.
        Conta: $this->conta.";
    }
    
    public function getInfoContaDestinatario(){
        return "Titular: $this->titularDestinatario.
        Agencia: $this->agenciaDestinatario.
        Conta: $this->contaDestinatario.\n";
    }
}

Class Banco_do_Brasil extends ContaBancaria {
    public $titular = "Eduardo Bussolotto";
    public $agencia = 1050;
    public $conta = 5555 - 5;
    $bb = new Banco_do_Brasil;
    
}

Class Bradesco extends ContaBancaria {
    public $titular = "Eduardo Bussolotto";
    public $agencia = 2050;
    public $conta = 6666 - 5;
    $bradesco = new Bradesco;
}

Class Itau extends ContaBancaria {
    public $titular = "Eduardo Bussolotto";
    public $agencia = 3050;
    public $conta = 777 - 5;
    $itau = new Itau;
}

$itau->getInfoConta;