<?php 

class CalculadoraDeMaratona {
    private int $duracaoTotal = 0;

    public function incluirMidia(Midia $midia): void{
        $this->duracaoTotal += $midia->duracaoEmMinutos();
    }

    public function obterDuracaoTotal(): int {
        return $this->duracaoTotal;
    }
}