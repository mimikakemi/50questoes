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
Descritivo: Exercicio 10 - Contar digitos de um numero inteiro usando while.
*******************************************************************************/

// Explicacao: Contar digitos de um numero inteiro usando while.
// Os valores de exemplo podem ser alterados para testar o funcionamento.

$numero = -12040;
$valor = abs($numero);
$quantidadeDigitos = 0;

// O zero possui um digito. Para outros numeros, dividimos por 10 ate zerar.
if ($valor === 0) {
    $quantidadeDigitos = 1;
} else {
    while ($valor > 0) {
        $quantidadeDigitos++;
        $valor = intdiv($valor, 10);
    }
}

echo "Numero: $numero<br>";
echo "Quantidade de digitos: $quantidadeDigitos";
