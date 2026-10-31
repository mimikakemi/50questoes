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
Descritivo: Função com string: contar vogais
Explicação: A função percorre o texto letra por letra, verifica se cada letra é uma vogal e retorna a quantidade encontrada.
*******************************************************************************/

function contarVogais($texto) {
    $texto = strtolower($texto);
    $vogais = ["a", "e", "i", "o", "u"];
    $quantidade = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vogais)) {
            $quantidade++;
        }
    }

    return $quantidade;
}

echo "Quantidade de vogais: " . contarVogais("Engenharia de Software") . PHP_EOL;
?>
