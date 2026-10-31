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
Descritivo: Função: calcular a área de um retângulo
Explicação: A função recebe a largura e a altura, multiplica os dois valores e retorna a área do retângulo.
*******************************************************************************/

function calcularAreaRetangulo($largura, $altura) {
    return $largura * $altura;
}

$area = calcularAreaRetangulo(5, 3);

echo "Área do retângulo: " . $area . PHP_EOL;
?>
