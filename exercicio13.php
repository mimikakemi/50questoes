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
Descritivo: Solicitar uma senha até que a senha correta 1234 seja digitada.
******************************************************************************/

/*
Explicação:
O do-while solicita a senha pelo menos uma vez. Enquanto a senha digitada for diferente de 1234, o programa continua pedindo novamente. Quando a senha estiver correta, mostra uma mensagem de acesso liberado.
*/

$senha = "";

do {
    $senha = readline("Digite a senha: ");

    if ($senha != "1234") {
        echo "Senha incorreta. Tente novamente." . PHP_EOL;
    }

} while ($senha != "1234");

echo "Senha correta! Acesso liberado." . PHP_EOL;
