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
Descritivo: Encontrar e mostrar todos os números primos que estão entre 1 e 50
******************************************************************************/

/* Como funciona:
 * Um número primo é aquele que só pode ser dividido por 1 e por ele mesmo.
 * O código passa por cada número de 2 até 50. Para cada um, ele verifica
 * se tem algum divisor além do 1. Se não tiver, é primo e aparece na tela.
 */

echo "Números primos entre 1 e 50:\n";

for ($num = 2; $num <= 50; $num++) {
    $ehPrimo = true;
    
    // Checa se tem algum número que divide ele
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $ehPrimo = false;
            break;
        }
    }
    
    if ($ehPrimo) {
        echo $num . " ";
    }
}
echo "\n";
?>