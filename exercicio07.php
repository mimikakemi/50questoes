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
Descritivo: Pedir ao usuário para adivinhar um número até acertar.
******************************************************************************/

/*
Explicação:
O número correto é 7. O while continua pedindo uma tentativa enquanto o usuário não digitar 7. Quando acertar, o programa mostra uma mensagem.
*/

$numeroCorreto = 7;
$tentativa = 0;

while ($tentativa != $numeroCorreto) {
    $tentativa = (int) readline("Adivinhe o número: ");

    if ($tentativa != $numeroCorreto) {
        echo "Você errou! Tente novamente." . PHP_EOL;
    }
}

echo "Parabéns! Você acertou!" . PHP_EOL;