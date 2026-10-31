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
Descritivo: Mostrar apenas os números da lista que são maiores que 20
******************************************************************************/

/* Como funciona:
 * O código passa por cada número da lista. Se o número for maior que 20,
 * ele é mostrado. Se for menor, ele é pulado.
 */

$numeros = [12, 5, 23, 18, 9, 45];

echo "Números maiores que 20: ";
foreach ($numeros as $valor) {
    if ($valor > 20) {
        echo $valor . " ";
    }
}
echo "\n";
?>