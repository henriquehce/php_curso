<?

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Midia.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/funcoes.php";
require __DIR__ . "/servicos/Calculadora_de_maratona.php";

echo "Bem vindo ao projeto de página de cinema web!" . "\n\n";

$filme = new Filme('O Poderoso Chefão', 1972, Genero::DRAMA, 175);
$serie = new Serie(45, 3, 10, 'Stranger Things', 2016, Genero::FICCAO_CIENTIFICA);

$filme->avaliar(9.5);
$filme->avaliar(9.0);
$filme->avaliar(8.5);
$serie->avaliar(9.0);
$serie->avaliar(8.5);
$serie->avaliar(9.5);

echo $filme->nome . " (" . $filme->anoLancamento . ") - " . $filme->genero->name . "\n";
echo "Média de avaliações: " . $filme->calcularMedia() . "\n";
echo "Duração: " . $filme->duracao . " minutos\n";

echo "\n";
echo $serie->nome . " (" . $serie->anoLancamento . ") - " . $serie->genero->name . "\n";
echo "Duração do episódio: " . $serie->duracaoEpisodio . " minutos\n";
echo "Número de temporadas: " . $serie->numeroTemporadas . "\n";
echo "Episódios por temporada: " . $serie->episodiosPorTemporada . "\n";
echo "Média de avaliações: " . $serie->calcularMedia() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->incluirMidia($filme);
$calculadora->incluirMidia($serie);
$duracaoTotal = $calculadora->obterDuracaoTotal();
echo "\nDuração total para maratona: " . $duracaoTotal . " minutos\n";