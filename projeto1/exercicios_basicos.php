<?php
echo "1 - Escreva um programa em PHP que exiba seu nome na tela.";
echo "\n Herique Cipriani";

echo"\n\n2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.";
$nota1 = 8;
$nota2 = 7;
$nota3 = 9;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "\nA média é: " . $media;


echo"\n\n3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.";

$metros = 5;
$centimetros = $metros * 100;
echo "\n" . $metros . " metros é igual a " . $centimetros . " centímetros.";


echo"\n\n4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.";

$ano = 2020;
if (($ano % 4 == 0) && ($ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "\n" . $ano . " é um ano bissexto.";
} else {
    echo "\n" . $ano . " não é um ano bissexto.";
}


echo"\n\n5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.";

$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;
echo "\n" . $celsius . "°C é igual a " . $fahrenheit . "°F.";

echo"\n\n6 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.";

for ($i = 1; $i <= 100; $i += 2) {
    echo " " . $i;
}

echo"\n\n7 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.";

$altura = 1.75;
$peso = 70;
$imc = $peso / ($altura * $altura);
echo "\nExemplo usando altura de " . $altura . " metros e peso de " . $peso . " kg.";
if ($imc < 18.5) {
    echo "\nSeu IMC é " . $imc . " e você está abaixo do peso.";
} elseif ($imc < 25) {
    echo "\nSeu IMC é " . $imc . " e você está com o peso ideal.";
} else {
    echo "\nSeu IMC é " . $imc . " e você está acima do peso.";
}

echo"\n\n8 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).";

$horas = random_int(0, 23);
echo"\nExemplo usando " . $horas . " horas.";
if ($horas >= 6 && $horas < 12) {
    echo "\nBom dia!";
} elseif ($horas >= 12 && $horas < 18) {
    echo "\nBoa tarde!";
} else {
    echo "\nBoa noite!";
}

echo"\n\n9 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].";

$array = [1, 2, 2, 3, 4, 4, 5];
$array = array_unique($array);
echo "\nArray resultante: " . implode(", ", $array);
echo "";
echo"\n\n10 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não. Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.";
$notas = [5, 7, 8, 4, 6];
foreach ($notas as $nota) {
    if ($nota > 6) {
        echo "\nNota: " . $nota . " - Aprovado";
    } else {
        echo "\nNota: " . $nota . " - Reprovado";
    }
}
echo "";

echo"\n\n11 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.";
$contaBancaria = [
    "titular" => "Henrique Cipriani",
    "saldo" => 1500.00
];
echo "\nTitular: " . $contaBancaria["titular"];
echo "\nSaldo: " . $contaBancaria["saldo"];
echo "";

echo"\n\n12 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.";
$familiares = ["Maria", "João", "Ana"];
$familiares[] = "Pedro";
$familiares[] = "Carla";
echo "\nFamiliares: " . implode(", ", $familiares);
