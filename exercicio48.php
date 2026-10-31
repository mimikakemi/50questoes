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
Descritivo: Função: calcular o fatorial de um número
Explicação: A função multiplica os números inteiros de 1 até o número recebido e retorna o resultado. Para números negativos, retorna null.
*******************************************************************************/

function fatorial($numero) {
    if ($numero < 0) {
        return null;
    }

    $resultado = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $resultado = $resultado * $i;
    }

    return $resultado;
}

$numero = 5;
$resultado = fatorial($numero);

if ($resultado === null) {
    echo "Não existe fatorial de número negativo." . PHP_EOL;
} else {
    echo "Fatorial de $numero: " . $resultado . PHP_EOL;
}
?>
