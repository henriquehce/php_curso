<?php

class Filme extends Midia{

    public function __construct(public  string $nome, public  int $anoLancamento, public  Genero $genero, public int $duracao) {
        parent::__construct($nome, $anoLancamento, $genero);
        $this->duracao = $duracao;
    }

    public function duracaoEmMinutos(): int {
        return $this->duracao;
    }
}