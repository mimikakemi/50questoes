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
Descritivo: Criar um menu com as opções Iniciar, Parar e Sair usando do-while.
******************************************************************************/

/*
Explicação:
O do-while mostra o menu pelo menos uma vez. O usuário escolhe uma opção e o programa apresenta a mensagem correspondente. O menu continua aparecendo até a opção 3 (Sair) ser escolhida.
*/

$opcao = 0;

do {
    echo PHP_EOL . "===== MENU =====" . PHP_EOL;
    echo "1. Iniciar" . PHP_EOL;
    echo "2. Parar" . PHP_EOL;
    echo "3. Sair" . PHP_EOL;

    $opcao = (int) readline("Escolha uma opção: ");

    if ($opcao == 1) {
        echo "Sistema iniciado!" . PHP_EOL;
    } elseif ($opcao == 2) {
        echo "Sistema pausado!" . PHP_EOL;
    } elseif ($opcao == 3) {
        echo "Saindo do programa..." . PHP_EOL;
    } else {
        echo "Opção inválida. Tente novamente." . PHP_EOL;
    }

} while ($opcao != 3);
