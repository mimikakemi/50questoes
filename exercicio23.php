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
Descritivo: Exercicio 23 - Criar array de produtos com nome e preco.
*******************************************************************************/

// Explicacao: Criar array de produtos com nome e preco.
// Os valores de exemplo podem ser alterados para testar o funcionamento.

// Cada produto e representado por um array associativo.
$produtos = [
    ['nome' => 'Caderno', 'preco' => 18.90],
    ['nome' => 'Caneta', 'preco' => 3.50],
    ['nome' => 'Mochila', 'preco' => 79.90]
];

echo '<pre>';
print_r($produtos);
echo '</pre>';
