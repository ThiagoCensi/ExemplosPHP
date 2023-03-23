<?php

$anoNascimento = "1990";

$nomeCompleto = "Thiago";

echo $nomeCompleto, $anoNascimento;

echo "<br/>";
// Linha de baixo destroi a variavel para utilizarmos de novo, com outro valor.
unset($nomeCompleto, $anoNascimento);

// isset checa para saber se a variavel existe
if  (isset($nomeCompleto)){
    echo $nomeCompleto, $anoNascimento;
}
else {
    echo "Variavel removida!";
}

echo "<br/>";

// concatenacao, juntar as informacoes das variaveis
$nome1 = "Thiago";
$sobreNome = "Censi";

$nomeCompleto = $nome1 . " " . $sobreNome;

echo $nomeCompleto;

exit;
?>