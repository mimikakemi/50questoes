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
Descritivo: Função: inverter uma string sem usar strrev()
Explicação: A função percorre o texto do último caractere até o primeiro, juntando os caracteres em outra string e retornando o texto invertido.
*******************************************************************************/

function inverterString($texto) {
    $textoInvertido = "";

    for ($i = strlen($texto) - 1; $i >= 0; $i--) {
        $textoInvertido .= $texto[$i];
    }

    return $textoInvertido;
}

echo inverterString("PHP") . PHP_EOL;
?>
