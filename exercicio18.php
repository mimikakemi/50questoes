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
Descritivo: Usar foreach para imprimir cada cidade do array de cidades.
******************************************************************************/

/*
Explicação:
Como este arquivo deve funcionar separadamente, o array com cinco cidades é declarado novamente aqui. O foreach percorre o array e imprime uma cidade por linha.
*/

$cidades = ["Curitiba", "São Paulo", "Rio de Janeiro", "Florianópolis", "Porto Alegre"];

echo "Lista de cidades:" . PHP_EOL;

foreach ($cidades as $cidade) {
    echo $cidade . PHP_EOL;
}
