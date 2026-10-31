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
Descritivo: Calcular a média de um aluno e dizer se passou ou não.
******************************************************************************/

/* Como funciona:
 * A função recebe duas notas, soma e divide por 2. Se a média for 7 ou mais,
 * o aluno foi aprovado; se for menor que 7, foi reprovado.
 */

function calcularMediaAluno($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    echo "Nota 1: " . $nota1 . "\n";
    echo "Nota 2: " . $nota2 . "\n";
    echo "Média: " . number_format($media, 2, ',', '.') . "\n";
    
    if ($media >= 7) {
        echo "Aprovado!\n";
    } else {
        echo "Reprovado.\n";
    }
    echo "--------------------\n";
}

// Testando com dois exemplos
calcularMediaAluno(7.5, 8.0);
calcularMediaAluno(5.5, 6.0);
?>