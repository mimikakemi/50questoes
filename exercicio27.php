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
Descritivo: Exercicio 27 - Armazenar notas de quatro disciplinas e calcular a media.
*******************************************************************************/

// Explicacao: Armazenar notas de quatro disciplinas e calcular a media.
// Os valores de exemplo podem ser alterados para testar o funcionamento.

$notas = [
    'Matematica' => 8.0,
    'Portugues' => 7.5,
    'Historia' => 9.0,
    'Geografia' => 6.5
];

$soma = 0;
foreach ($notas as $disciplina => $nota) {
    echo "$disciplina: $nota<br>";
    $soma += $nota;
}
$media = $soma / count($notas);
echo 'Media: ' . number_format($media, 2, ',', '.');
