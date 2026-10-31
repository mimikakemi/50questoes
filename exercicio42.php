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
Descritivo: Comparar dois números e dizer qual é o maior
******************************************************************************/

/* Como funciona:
 * A função recebe dois números, compara os dois e devolve qual é o maior deles.
 */

function maiorNumero($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Testando
echo "Entre 28 e 15, o maior é: " . maiorNumero(28, 15) . "\n";
echo "Entre 7.5 e 9.2, o maior é: " . maiorNumero(7.5, 9.2) . "\n";
?>