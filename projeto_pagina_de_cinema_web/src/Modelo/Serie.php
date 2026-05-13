<?

class Serie extends Midia
{
    public function __construct(
        public readonly int $duracaoEpisodio,
        public readonly int $numeroTemporadas,
        public readonly int $episodiosPorTemporada,
        public  string $nome,
        public  int $anoLancamento,
        public  Genero $genero
    ) {
        parent::__construct($nome, $anoLancamento, $genero);
    }
    public function duracaoEmMinutos(): int {
        return $this->duracaoEpisodio * $this->episodiosPorTemporada * $this->numeroTemporadas;
    }
}