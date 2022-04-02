<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<a href="index.html">Inserir</a>
<br>

<?php

$linhas=file("tabela.txt",0);
for ($i=0;$i<sizeof($linhas);$i++)

{
	$reg = explode(":",$linhas[$i]);
	echo "Nome: ".$reg[0]."<br>";
	echo "Idade: ".$reg[1]."<br>";
	echo "Idade: ".$reg[2]."<br>";
}

?>
	
</body>
</html>
