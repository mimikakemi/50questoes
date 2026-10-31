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
Descritivo: Criar uma lista de produtos e mostrar o nome e o preço de cada um
******************************************************************************/

/* Como funciona:
 * Criei uma lista de produtos onde cada produto tem um nome e um preço.
 * O foreach passa por cada produto e mostra as informações na tela.
 */

$produtos = [
    ["nome" => "Caderno", "preco" => 25.50],
    ["nome" => "Caneta", "preco" => 3.00],
    ["nome" => "Mochila", "preco" => 89.90]
];

echo "Lista de Produtos:\n";
foreach ($produtos as $item) {
    echo "Produto: " . $item["nome"] . " — Preço: R$ " . number_format($item["preco"], 2, ',', '.') . "\n";
}
?>