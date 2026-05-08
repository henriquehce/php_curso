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

echo"\n\n13 - Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.";
function calcular(int $num1, int $num2, string $operacao) {
    switch ($operacao) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            return $num1 / $num2;
        default:
            return "Operação inválida";
    }
}
echo "\nExemplo usando os números 10 e 5 com a operação '+'.";
calcular(10, 5, "+");

echo "\nResultado da operação: " . calcular(10, 5, "+");

echo"\n\n14 - Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.";
function calcularIMC(float $altura, float $peso): float {
    return $peso / ($altura * $altura);
}

$altura = 1.75;
$peso = 70;
$imc = calcularIMC($altura, $peso);
echo "\nExemplo usando altura de " . $altura . " metros e peso de " . $peso . " kg.";
echo "\nIMC: " . $imc;
            
echo"\n\n15 - Crie uma função em PHP que converta graus celsius para Fahrenheit.";
function celsiusParaFahrenheit(float $celsius): float {
    return ($celsius * 9/5) + 32;
}
$celsius = 25;
$fahrenheit = celsiusParaFahrenheit($celsius);
echo "\n" . $celsius . "°C é igual a " . $fahrenheit . "°F.";

echo"\n\n16 - Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.";
$notas = [8, 7, 9, 6, 10, 5, 8];
echo "\nArray de notas: " . implode(", ", $notas);
rsort($notas);
$maioresNotas = array_slice($notas, 0, 3);
echo "\nAs 3 maiores notas são: " . implode(", ", $maioresNotas);

echo"\n\n17 - Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.";
$string = "Vinicius Dias,1997,Programador";
$array = explode(",", $string);
echo "\nArray resultante: ";
print_r($array);

echo"\n\n18 - Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.";
function ordenarStrings(array $strings): array {
    sort($strings);
    return $strings;
}
$frutas = ["banana", "maçã", "laranja", "uva"];
$frutasOrdenadas = ordenarStrings($frutas);
echo "\nArray de frutas: " . implode(", ", $frutas);
echo "\nFrutas ordenadas: " . implode(", ", $frutasOrdenadas);

echo"\n\n19 -Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.";
$arquivo = fopen("teste.txt", "r");
$primeiraLinha = fgets($arquivo);
echo "\nPrimeira linha do arquivo: " . $primeiraLinha;
fclose($arquivo);

echo"\n\n20 - Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase “PHP é incrível!” no final do arquivo e depois o feche.";
$arquivo = fopen("teste.txt", "a");
fputs($arquivo, " PHP é incrível!\n");
fclose($arquivo);

echo"\n\n21 - Crie um programa que converta a string '{\"nome\":\"Vinicius\",\"anoNascimento\":1997,\"profissao\":\"Dev\"}' em um objeto.";
$string = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
$objeto = json_decode($string);
echo "\nObjeto resultante: ";
print_r($objeto);