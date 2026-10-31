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
Descritivo: Calcular e imprimir a soma dos números de 1 a 100.
******************************************************************************/

/*
Explicação:
O programa começa com a soma igual a zero. O for percorre os números de 1 até 100 e adiciona cada número à variável soma. No final, mostra o resultado.
*/

$soma = 0;

for ($numero = 1; $numero <= 100; $numero++) {
    $soma += $numero;
}

echo "A soma dos números de 1 a 100 é: " . $soma . PHP_EOL;