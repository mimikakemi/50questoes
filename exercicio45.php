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
Descritivo: Função com array: obter o primeiro elemento
Explicação: A função recebe um array e retorna o primeiro elemento. Se o array estiver vazio, retorna null.
*******************************************************************************/

function obterPrimeiroElemento($array) {
    if (count($array) == 0) {
        return null;
    }

    return $array[0];
}

$numeros = [10, 20, 30, 40];

echo "Primeiro elemento: " . obterPrimeiroElemento($numeros) . PHP_EOL;
?>
