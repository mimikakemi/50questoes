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
Descritivo: Função: gerar um array com números pares de 0 até n
Explicação: A função recebe um número n, percorre os valores pares começando em zero e retorna um array com esses números.
*******************************************************************************/

function gerarArrayPares($n) {
    $pares = [];

    for ($i = 0; $i <= $n; $i += 2) {
        $pares[] = $i;
    }

    return $pares;
}

$numerosPares = gerarArrayPares(20);

print_r($numerosPares);
?>
