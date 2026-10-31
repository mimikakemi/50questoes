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
Descritivo: Exercicio 35 - Criar procedimento imprimirArray para exibir todos os elementos.
*******************************************************************************/

// Explicacao: Criar procedimento imprimirArray para exibir todos os elementos.
// Os valores de exemplo podem ser alterados para testar o funcionamento.

function imprimirArray(array $elementos): void
{
    foreach ($elementos as $elemento) {
        echo htmlspecialchars((string) $elemento, ENT_QUOTES, 'UTF-8') . '<br>';
    }
}

$frutas = ['Maca', 'Banana', 'Uva', 'Laranja'];
imprimirArray($frutas);
