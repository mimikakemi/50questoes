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
Descritivo: Criar o procedimento saudacaoUsuario que recebe um nome e imprime uma saudação.
******************************************************************************/

/*
Explicação:
A função saudacaoUsuario recebe um nome pelo parâmetro $nome e mostra a mensagem Olá, seguida do nome informado. Ela é um procedimento porque não retorna um valor.
*/

function saudacaoUsuario($nome) {
    echo "Olá, " . $nome . "!" . PHP_EOL;
}

$nomeUsuario = readline("Digite seu nome: ");

saudacaoUsuario($nomeUsuario);
