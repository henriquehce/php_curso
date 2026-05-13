<?

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem vindo ao projeto de página de cinema web!";

$filme = new Filme('O Poderoso Chefão', 1972, 'Crime');

$filme->avaliar(9.5);
$filme->avaliar(9.0);
$filme->avaliar(8.5);



echo $filme->nome . " (" . $filme->anoLancamento . ") - " . $filme->genero . "\n";
echo "Média de avaliações: " . $filme->calcularMedia() . "\n";

var_dump($filme);