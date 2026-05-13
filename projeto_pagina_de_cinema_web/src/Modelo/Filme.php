<?php

class Filme {
    private array $notas;

    public function __construct(public readonly string $nome, public readonly int $anoLancamento, public readonly string $genero) {
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
}