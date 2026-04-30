<?php

$conta = [
    "titular" => "Henrique Cipriani",
    "saldo" => 1500.00
];

echo "--- Sistema Bancário ---" . PHP_EOL;
echo "Titular: " . $conta["titular"] . PHP_EOL;
echo "Saldo Inicial: R$ " . number_format($conta["saldo"], 2, ',', '.') . PHP_EOL;

while (true) {
    echo "\nEscolha uma operação: 1 - Depositar, 2 - Sacar, 3 - Ver saldo, 4 - Sair" . PHP_EOL;
    $opcao = readline("Opção: ");

    switch ($opcao) {
        case 1:
            $valor = (float)readline("Valor para depósito: ");
            if ($valor > 0) {
                $conta["saldo"] += $valor;
                echo "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso." . PHP_EOL;
            } else {
                echo "Valor de depósito inválido." . PHP_EOL;
            }
            break;

        case 2:
            $valor = (float)readline("Valor para saque: ");
            if ($valor > 0 && $valor <= $conta["saldo"]) {
                $conta["saldo"] -= $valor;
                echo "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso." . PHP_EOL;
            } elseif ($valor > $conta["saldo"]) {
                echo "Erro: Saldo insuficiente." . PHP_EOL;
            } else {
                echo "Valor de saque inválido." . PHP_EOL;
            }
            break;

        case 3:
            echo "Titular: " . $conta["titular"] . PHP_EOL;
            echo "Saldo Atual: R$ " . number_format($conta["saldo"], 2, ',', '.') . PHP_EOL;
            break;

        case 4:
            echo "Saindo do sistema. Operação encerrada." . PHP_EOL;
            exit;

        default:
            echo "Opção inválida. Tente novamente." . PHP_EOL;
            break;
    }
}