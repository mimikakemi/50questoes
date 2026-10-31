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
Descritivo: Usar foreach para calcular a soma dos números de um array.
******************************************************************************/

/*
Explicação:
O array guarda dez números inteiros. O foreach percorre cada elemento e adiciona seu valor à variável soma. No final, o programa exibe a soma total.
*/

$numeros = [4, 8, 12, 16, 20, 24, 28, 32, 36, 40];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "A soma dos números do array é: " . $soma . PHP_EOL;
