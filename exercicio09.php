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
Descritivo: Ler números do usuário até que ele digite 0 e mostrar a soma dos números digitados.
******************************************************************************/

/*
Explicação:
A variável soma começa em zero. O while pede números ao usuário e adiciona cada valor à soma. Quando o usuário digita 0, o laço termina e o programa mostra a soma. O zero é usado apenas para encerrar e não altera o resultado.
*/

$soma = 0;
$numero = 1;

while ($numero != 0) {
    $numero = (float) readline("Digite um número (0 para encerrar): ");

    if ($numero != 0) {
        $soma += $numero;
    }
}

echo "A soma dos números digitados é: " . $soma . PHP_EOL;
