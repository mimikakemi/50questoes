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
Descritivo: Pegar um texto e transformar tudo para letras maiúsculas
******************************************************************************/

/* Como funciona:
 * Usa uma função do próprio PHP que faz a conversão das letras pra maiúsculas
 * e devolve o texto já certinho.
 */

function converterParaMaiusculas($texto) {
    return mb_strtoupper($texto, 'UTF-8');
}

// Testando
$frase = "Olá, como vai você?";
echo "Texto original: " . $frase . "\n";
echo "Tudo maiúsculo: " . converterParaMaiusculas($frase) . "\n";
?>