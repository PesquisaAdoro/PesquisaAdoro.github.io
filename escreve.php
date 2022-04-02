<?php

$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$sexo = filter_input(INPUT_POST, 'sexo');

$f = fopen ("tabela.txt","a+",0);

$linha = $nome.":".$idade.":".$sexo.":\n";

fwrite($f,$linha,strlen($linha));

fclose($f);

/*echo $nome;
echo $idade;
echo $sexo;*/

echo "<script>window.location='index.html';</script>"

?>
