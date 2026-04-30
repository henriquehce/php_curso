alert('1 - Mostre um alerta com a mensagem "Boas vindas ao nosso site!".');
alert('Boa vindas ao nosso site!');

alert('2 -Declare uma variável chamada nome e atribua a ela o valor "Lua".');
var nome = "Lua";

alert('3 - Declare uma variável chamada cidade e atribua a ela o valor "São Paulo".');
var cidade = "São Paulo";

alert('4 - Crie uma variável chamada idade e atribua a ela o valor 25.');
var idade = 25;

alert('5 - Defina uma variável numeroDeVendas e atribua a ela o valor 50.');
var numeroDeVendas = 50;

alert('6 - Defina uma variável saldoDisponivel e atribua a ela o valor 1000.');
var saldoDisponivel = 1000;

alert('7 - Exiba um alerta com o texto "Erro! Preencha todos os campos"');
var mensagemDeErro = "Erro! Preencha todos os campos";
alert(mensagemDeErro);

alert('8 - Para o próximo código, use um novo prompt para perguntar o nome do usuário e armazená-lo em uma variável, pode chamá-la de nome ou adicionar o que desejar .');
var nome = prompt('Qual é o seu nome?');
alert('Olá, ' + nome + '!');

alert('9 - Peça ao usuário para digitar sua idade usando um prompt e armazene-a na variável idade.');
var idade = prompt('Qual é a sua idade?');

alert('10 - Agora, para validar a idade que capturamos no desafio 09, caso a idade seja maior ou igual que 18, exiba um alerta com a mensagem "Pode tirar a habilitação!".');
if (idade >= 18) {
    alert('Pode tirar a habilitação!');
}

alert('11 - Pergunte ao usuário qual é o dia da semana. Se a resposta for "Sábado" ou "Domingo", mostre "Bom fim de semana!". Caso contrário, mostre "Boa semana!".');
var diaDaSemana = prompt('Qual é o dia da semana?');
if (diaDaSemana === "Sábado" || diaDaSemana === "Domingo") {
    alert('Bom fim de semana!');
} else {
    alert('Boa semana!');
}

alert('12 - Verifique se um número digitado pelo usuário é positivo ou negativo. Mostre um alerta informando.');
var numero = parseFloat(prompt('Digite um número:'));
if (numero > 0) {
    alert('O número é positivo.');
} else if (numero < 0) {
    alert('O número é negativo.');
} else {
    alert('O número é zero.');
}

alert('13 - Crie um sistema de pontuação para um jogo. Se a pontuação for maior ou igual a 100, mostre "Parabéns, você venceu!". Caso contrário, mostre "Tente novamente para ganhar.".');
var pontuacao = parseFloat(prompt('Digite sua pontuação:'));
if (pontuacao >= 100) {
    alert('Parabéns, você venceu!');
} else {
    alert('Tente novamente para ganhar.');
}

alert('14 - Crie uma mensagem que informa o usuário sobre o saldo da conta, usando uma template string para incluir o valor do saldo.');
var saldo = parseFloat(prompt('Digite o valor do saldo:'));
var mensagem = `Seu saldo é R$ ${saldo.toFixed(2)}.`;
alert(mensagem);

alert('15 - Peça ao usuário para inserir seu nome usando prompt. Em seguida, mostre um alerta de boas-vindas usando esse nome.');
var nome = prompt('Qual é o seu nome?');
alert(`Olá, ${nome}! Bem-vindo ao nosso jogo.`);

alert('16 - Crie um contador que comece em 1 e vá até 10 usando um loop while. Mostre cada número.');
var contador = 1;
while (contador <= 10) {
    alert(contador);
    contador++;
}

alert('17 - Crie um contador que começa em 10 e vá até 0 usando um loop while. Mostre cada número.');
var contador = 10;
while (contador >= 0) {
    alert(contador);
    contador--;
}

alert('18 - Crie um programa de contagem regressiva. Peça um número e conte deste número até 0, usando um loop while no console do navegador.');
var numero = parseInt(prompt('Digite um número para a contagem regressiva:'));
while (numero >= 0) {
    console.log(numero);
    numero--;
}

alert('19 - Crie um programa de contagem progressiva. Peça um número e conte de 0 até esse número, usando um loop while no console do navegador.');
var numero = parseInt(prompt('Digite um número para a contagem progressiva:'));
var contador = 0;
while (contador <= numero) {
    console.log(contador);
    contador++;
}

alert('20 - Crie um programa que utilize o console.log para exibir uma mensagem de boas-vindas.');
console.log('Bem-vindo ao nosso jogo!');

alert('21 - Crie uma variável chamada "nome" e atribua a ela o seu nome. Em seguida, utilize o console.log para exibir a mensagem "Olá, [seu nome]!" no console do navegador.');
var nome = prompt('Qual é o seu nome?');
console.log(`Olá, ${nome}!`);

alert('22 - Crie uma variável chamada "nome" e atribua a ela o seu nome. Em seguida, utilize o alert para exibir a mensagem "Olá, [seu nome]!" .');
var nome = prompt('Qual é o seu nome?');
alert(`Olá, ${nome}!`);

alert('23 - Utilize o prompt e faça a seguinte pergunta: Qual a linguagem de programação que você mais gosta?. Em seguida, armazene a resposta em uma variável e mostre no console do navegador.');
var linguagem = prompt('Qual a linguagem de programação que você mais gosta?');
console.log(`Sua linguagem de programação favorita é ${linguagem}.`);

alert('24 - Crie uma variável chamada "valor1" e outra chamada "valor2", atribuindo a elas valores numéricos de sua escolha. Em seguida, realize a soma desses dois valores e armazene o resultado em uma terceira variável chamada "resultado". Utilize o console.log para mostrar a mensagem "A soma de [valor1] e [valor2] é igual a [resultado]." no console.');
var valor1 = parseFloat(prompt('Digite o primeiro valor:'));
var valor2 = parseFloat(prompt('Digite o segundo valor:'));
var resultado = valor1 + valor2;
console.log(`A soma de ${valor1} e ${valor2} é igual a ${resultado}.`);

alert('25 - Crie uma variável chamada "valor1" e outra chamada "valor2", atribuindo a elas valores numéricos de sua escolha. Em seguida, realize a subtração desses dois valores e armazene o resultado em uma terceira variável chamada "resultado". Utilize o console.log para mostrar a mensagem "A diferença entre [valor1] e [valor2] é igual a [resultado]." no console.');
var valor1 = parseFloat(prompt('Digite o primeiro valor:'));
var valor2 = parseFloat(prompt('Digite o segundo valor:'));
var resultado = valor1 - valor2;
console.log(`A diferença entre ${valor1} e ${valor2} é igual a ${resultado}.`);

alert('26 - Peça ao usuário para inserir sua idade com prompt. Com base na idade inserida, utilize um if para verificar se a pessoa é maior ou menor de idade, exibindo uma mensagem apropriada no console.');
var idade = parseInt(prompt('Digite sua idade:'));
if (idade >= 18) {
    console.log('Você é maior de idade.');
} else {
    console.log('Você é menor de idade.');
}

alert('27 - Crie uma variável "numero" e peça um valor com prompt verifique se é positivo, negativo ou zero. Use if-else para imprimir a respectiva mensagem.');
var numero = parseFloat(prompt('Digite um número:'));
if (numero > 0) {
    console.log('O número é positivo.');
} else if (numero < 0) {
    console.log('O número é negativo.');
} else {
    console.log('O número é zero.');
}

alert('28 - Use um loop while para imprimir os números de 1 a 10 no console.');
var contador = 1;
while (contador <= 10) {
    console.log(contador);
    contador++;
}

alert('29 - Crie uma variável "nota" e atribua um valor numérico a ela. Use if-else para determinar se a nota é maior ou igual a 7 e exiba "Aprovado" ou "Reprovado" no console.');
var nota = parseFloat(prompt('Digite sua nota:'));
if (nota >= 7) {
    console.log('Aprovado');
} else {
    console.log('Reprovado');
}

alert('30 - Use o Math.random para gerar qualquer número aleatório e exiba esse número no console.');
console.log(Math.random());

alert('31 - Use o Math.random para gerar um número inteiro entre 1 e 10 e exiba esse número no console.');
console.log(Math.floor(Math.random() * 10) + 1);

alert('32 - Use o Math.random para gerar um número inteiro entre 1 e 1000 e exiba esse número no console.');
console.log(Math.floor(Math.random() * 1000) + 1);