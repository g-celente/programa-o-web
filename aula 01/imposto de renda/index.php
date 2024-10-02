<?php

session_start();

function receive_dados() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $rendimentoMensal = isset($_POST['rendimentoMensal']) ? floatval($_POST['rendimentoMensal']) : 0;
        $dependentes = isset($_POST['dependentes']) ? floatval($_POST['dependentes']) : 0;
        $pensao = isset($_POST['pensao']) ? floatval($_POST['pensao']) : 0;
        $deducao = isset($_POST['deducao']) ? floatval($_POST['deducao']) : 0;
        $deducaoDependente = 189.59;
            
        $baseCalculo = $rendimentoMensal + ($deducaoDependente * $dependentes) + $pensao + $deducao;

        calcular($baseCalculo);
    }

    return false;
}

function calcular($baseCalculo) {
    if ($baseCalculo <= 1903.98) {

        $imposto = 0;
        $aliquota = 0;
        $faixa = "Faixa 1: 0% (até R$ 1.903,98)";

    } elseif ($baseCalculo <= 2826.65) {

        $imposto = ($baseCalculo - 1903.98) * 0.075; // 7,5%
        $aliquota = 0.075;
        $faixa = "Faixa 2: 7,5% (até R$ 2.826,65)";

    } elseif ($baseCalculo <= 3751.05) {

        $imposto = (2826.65 - 1903.98) * 0.075 + ($baseCalculo - 2826.65) * 0.15; // 15%
        $aliquota = 0.15;
        $faixa = "Faixa 3: 15% (até R$ 3.751,05)";

    } elseif ($baseCalculo <= 4664.68) {

        $imposto = (2826.65 - 1903.98) * 0.075 + (3751.05 - 2826.65) * 0.15 + ($baseCalculo - 3751.05) * 0.225; // 22,5%
        $aliquota = 0.225;
        $faixa = "Faixa 4: 22,5% (até R$ 4.664,68)";

    } else {

        $imposto = (2826.65 - 1903.98) * 0.075 + (3751.05 - 2826.65) * 0.15 + (4664.68 - 3751.05) * 0.225 + ($baseCalculo - 4664.68) * 0.275; // 27,5%
        $aliquota = 0.275;
        $faixa = "Faixa 5: 27,5% (acima de R$ 4.664,68)";
        
    }

    $alicotaEfetiva = $imposto / $baseCalculo;

    $_SESSION['imposto'] = number_format($imposto, 2, '.', ',');
    $_SESSION['faixa'] = $faixa;
    $_SESSION['aliquotaEfetiva'] = number_format($alicotaEfetiva * 100, 2, '.', ',');

    header('Location: views/calculo.php');
    exit();
}

receive_dados();






