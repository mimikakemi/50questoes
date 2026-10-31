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
Descritivo: Procedimento: imprimir os dados de um carro
Explicação: O procedimento recebe um array associativo com marca, modelo e ano e mostra essas informações na tela.
*******************************************************************************/

function mostrarCarro($carro) {
    echo "Marca: " . $carro["marca"] . PHP_EOL;
    echo "Modelo: " . $carro["modelo"] . PHP_EOL;
    echo "Ano: " . $carro["ano"] . PHP_EOL;
}

$carro = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "ano" => 2022
];

mostrarCarro($carro);
?>
