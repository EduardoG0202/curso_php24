<?php

/*$salario=1412.00;
$fgts=11;
$aumento=10;
$salarioFinal= $salario + ($salario * $aumento /100);
$salarioFinal= $salarioFinal - ($salarioFinal * $fgts /100);

// echo "O salario final do empregado ficará! {$salarioFinal}";

/*reaproveitar o primeiro algoritimo e conceder o aumento confrme o cargo
10% empregado normal
12% supervisor
14% gerente
16% direção8*/

$salario=1412.00;
$fgts=11;
$aumento=10;
$salarioFinal= $salario + ($salario * $aumento /100);
$salarioFinal= $salarioFinal - ($salarioFinal * $fgts /100);

$tipoEmpregado="direcao";

if ($tipoEmpregado == "empregado"){
$aumento=10;
$salarioFinal= $salario + ($salario * $aumento /100);
$salarioFinal= $salarioFinal - ($salarioFinal * $fgts /100);
    echo "Se o funcionario ocupar o cargo {$tipoEmpregado} ele receberá $salarioFinal ";
} elseif ($tipoEmpregado == "supervisor"){
$aumento=12;
$salarioFinal= $salario + ($salario * $aumento /100);
$salarioFinal= $salarioFinal - ($salarioFinal * $fgts /100);
    echo "Se o funcionario ocupar o cargo {$tipoEmpregado} ele receberá $salarioFinal ";
} elseif ($tipoEmpregado == "gerente"){
$aumento=14;
$salarioFinal= $salario + ($salario * $aumento /100);
$salarioFinal= $salarioFinal - ($salarioFinal * $fgts /100);
    echo "Se o funcionario ocupar o cargo {$tipoEmpregado} ele receberá $salarioFinal" ;
} elseif ($tipoEmpregado == "direcao"){
$aumento=16;
$salarioFinal= $salario + ($salario * $aumento /100);
$salarioFinal= $salarioFinal - ($salarioFinal * $fgts /100);
    echo "Se o funcionario ocupar o cargo {$tipoEmpregado} ele receberá $salarioFinal ";
}