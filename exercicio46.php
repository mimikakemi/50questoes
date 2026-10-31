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
Descritivo: Função para verificar se um número é primo
Explicação: A função retorna true se o número for primo e false caso contrário.
*******************************************************************************/

function ehPrimo($numero) {
    if ($numero < 2) {
        return false;
    }

    for ($divisor = 2; $divisor * $divisor <= $numero; $divisor++) {
        if ($numero % $divisor == 0) {
            return false;
        }
    }

    return true;
}

$numero = 17;
echo ehPrimo($numero) ? "true" . PHP_EOL : "false" . PHP_EOL;
?>