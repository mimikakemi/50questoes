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
Descritivo: Fazer uma contagem regressiva começando de um número até chegar no zero.
******************************************************************************/
/* Como funciona:
 * Começa no número que você escolheu e vai tirando 1 a cada passo até chegar no zero.
 */

function contagemRegressiva($inicio) {
    echo "Contagem a partir de $inicio:\n";
    for ($i = $inicio; $i >= 0; $i--) {
        echo $i . "... ";
    }
    echo "FIM! \n";
}

// Vamos contar de 10 até 0
contagemRegressiva(10);
?>