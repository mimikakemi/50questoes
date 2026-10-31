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
Descritivo: Exercicio 14 - Ler e imprimir numeros usando do-while ate encontrar um negativo.
*******************************************************************************/

// Explicacao: Ler e imprimir numeros usando do-while ate encontrar um negativo.
// Os valores de exemplo podem ser alterados para testar o funcionamento.

// A entrada e uma sequencia de numeros separados por virgula.
// O do-while mostra cada numero e para quando encontra um negativo.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entrada = trim($_POST['numeros'] ?? '');
    $partes = array_map('trim', explode(',', $entrada));
    $numeros = [];
    foreach ($partes as $parte) {
        if ($parte !== '' && is_numeric($parte)) {
            $numeros[] = (float) $parte;
        }
    }

    if (count($numeros) > 0) {
        $indice = 0;
        do {
            $numero = $numeros[$indice];
            echo "Numero lido: $numero<br>";
            $indice++;
        } while ($numero >= 0 && $indice < count($numeros));
    } else {
        echo 'Informe pelo menos um numero valido.<br>';
    }
}
?>
<form method="post">
    <label for="numeros">Numeros separados por virgula (inclua um negativo para parar):</label><br>
    <input id="numeros" type="text" name="numeros" placeholder="5, 10, 3, -1" required>
    <button type="submit">Executar</button>
</form>
