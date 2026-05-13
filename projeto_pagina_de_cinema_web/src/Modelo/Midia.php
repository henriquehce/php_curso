<?

class Midia
{
    private array $notas;

    public function __construct(public string $nome, public int $anoLancamento, public Genero $genero) {
        $this->notas = [];
    }

    public function avaliar(float $nota): void {
        $this->notas[] = $nota;
    }

    public function calcularMedia(): float {
        $totalNotas = count($this->notas);
        if ($totalNotas === 0) {
            return 0;
        }
        $somaNotas = array_sum($this->notas);
        return $somaNotas / $totalNotas;
    }

    public function duracaoEmMinutos(): int {
        if ($this instanceof Filme) {
            return $this->duracao;
        } elseif ($this instanceof Serie) {
            return $this->duracaoEpisodio * $this->episodiosPorTemporada * $this->numeroTemporadas;
        }
        return 0; // Retorna 0 para mídias desconhecidas
    }
}