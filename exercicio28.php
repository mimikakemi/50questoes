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
Descritivo: Fazer uma lista de frutas e conferir se tem Maçã nela
******************************************************************************/

/* Como funciona:
 * A função in_array() faz a busca pra gente. Ela procura o que a gente quer
 * dentro da lista e diz se achou ou não.
 */

$frutas = ["Banana", "Laranja", "Maçã", "Uva", "Melancia"];

if (in_array("Maçã", $frutas)) {
    echo "✅ Encontrei Maçã na lista!\n";
} else {
    echo "❌ Maçã não está na lista.\n";
}
?>