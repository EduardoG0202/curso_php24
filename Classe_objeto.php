<?php

Class Exercicios {
    public $imc="";
    public $total="";
    public $arrayPerfeitos=[];
    public $arrayPrimos=[];
    public $comissao="";
    public $venda="";


    function imc($peso, $altura){
        $peso=110;
        $altura=1.90;
        $this->imc= $peso/($altura*$altura);

        echo "Quando o seu peso for {$peso} e sua altura for {$altura}.<br>
            O seu IMC será: {$this->imc}.";
    }

    function notas($total){
        $this->total=572;

        function divisao($total, $divisor){
            $resultado = floor($total / $divisor);
            return $resultado;
        }

        function resto($total, $divisor){
            $resultado = $total / $divisor; // 5,72
            $resto = $total - ( floor($resultado) * $divisor);
            return $resto;
        }

        $notas_cem = divisao($this->total, 100);
        $resto_cem = resto($this->total, 100);

        $notas_cinquenta= divisao($resto_cem, 50);
        $resto_cinquenta= resto($resto_cem, 50);

        $notas_vinte= divisao($resto_cinquenta, 20);
        $resto_vinte= resto($resto_cinquenta, 20);

        $notas_dez= divisao($resto_vinte, 10);
        $resto_dez= resto($resto_vinte, 10);

        $notas_cinco= divisao($resto_dez, 5);
        $resto_cinco= resto($resto_dez, 5);

        $notas_dois= divisao($resto_cinco, 2);
        $resto_dois= resto($resto_cinco, 2);


        echo "devem retornar $notas_cem notas de cem, $notas_cinquenta notas de cinquenta, $notas_vinte notas de vinte, $notas_dez notas de dez,
        $notas_cinco notas de cinco, $notas_dois notas de dois";
    }

    function Perfeitos(){
        $this->arrayPerfeitos=[];

        function isPerfeito($num){
            $arrayDiv=[];
            // $num = 6;
                
                for ($div = 1; $div < $num; $div++){
                    
                    if ($num % $div == 0){
                        $arrayDiv[]=$div;
                    }
                }
                
            $totalDiv= array_sum($arrayDiv);
                
            if ($totalDiv == $num){
                return true;
            }
        }
            
        $num=2;

        while (count($this->arrayPerfeitos) < 4){
            if(isPerfeito($num)){
                $this->arrayPerfeitos[]=$num;
            }
            
            $num++;
        }

        echo implode(" , ", $this->arrayPerfeitos);
        

    }

    function primos(){
        $this->arrayPrimos=[];

        function isPrimo($num){
        if ($num == 1){
            return false;
        }
            for($divisor = 2; $divisor < $num; $divisor++){
                if ($num % $divisor == 0){
                return false;
                }
            }
            return true;
        }

        $num=2;

        while (count($this->arrayPrimos)<5){
            if (isPrimo($num)){
            $this->arrayPrimos[]=$num;
            }
        $num++;
        }

        echo  implode(" , " , $this->arrayPrimos);
    }

    function vendas(){
        $this->venda=1000;
        $tipoPag="pix";
        $pagVista=["pix","dinheiro"];

        $a_vista= in_array ($tipoPag, $pagVista);

            if ($a_vista){
                if ($this->venda >= 1000){
                    $this->comissao= $this->venda * (5/100);
                    $vendaFinal= $this->venda - ($this->venda * 25/100);
                    echo "O valor da Comissão ficará $this->comissao e a venda ficará de $vendaFinal";
                } else if ($this->venda < 1000 && $this->venda >= 800){
                    $this->comissao= $this->venda * (5/100);
                    $vendaFinal= $this->venda - ($this->venda * 15/100);
                    echo "O valor da Comissão ficará {$this->comissao} e a venda ficará de {$vendaFinal}";
                } else if ($this->venda < 800 && $this->venda >= 500){
                    $this->comissao= $this->venda * (5/100);
                    $vendaFinal= $this->venda - ($this->venda * 10/100);
                    echo "O valor da Comissão ficará {$this->comissao} e a venda ficará de {$vendaFinal}";
                } elseif ($this->venda < 500 && $this->venda >= 250){
                    $this->comissao= $this->venda * (5/100);
                    $vendaFinal= $this->venda - ($this->venda * 5/100);
                    echo "O valor da Comissão ficará {$this->comissao} e a venda ficará de {$vendaFinal}";
                } else { 
                    $this->comissao = $this->venda * (5/100);
                    echo "O valor da Comissão ficará {$this->comissao} e a venda ficará de {$this->venda}";
                }
            } else {
                $this->comissao= $this->venda * (5/100);
                echo "O valor da Comissao ficará {$this->comissao} e a venda ficará de {$this->venda}";
            }
    }    


}

$objExercicios = new Exercicios();

echo $objExercicios->primos();
