<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes:
    26014891-2 - Ana Clara Amantino
    26005411-2 - Edson Robson Meneses Junior
    26015396-2 - João Winicios Lopo Oliveira
    26002469-2 - Júlia Rafaela Akemi Assakura
    226011155-2 - Kauã Teodoro Cardoso
    26006574-2 - Vitor Ferst Wosniak
Data: 03 de Novembro de 2026
Descritivo: Criar um array com 10 números inteiros.
******************************************************************************/

/*
Explicação:
O programa cria um array chamado numeros com dez valores inteiros e depois exibe os valores armazenados.
*/

$numeros = [4, 8, 12, 16, 20, 24, 28, 32, 36, 40];

echo "Números do array:" . PHP_EOL;

foreach ($numeros as $numero) {
    echo $numero . PHP_EOL;
}
