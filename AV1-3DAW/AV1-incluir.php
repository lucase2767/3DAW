<?php
function validaMat() {
	
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nome = $_POST["nome"];
	$matricula = $_POST["matricula"];
    $funcao = $_POST["funcao"];
	$Logon = fopen("Funcionarios.txt", "w") or die("erro no arquivo");;
	$top = "nome, matricula, funcao;";
	fwrite($Logon, $top);
	$linha = $nome . ", " . $matricula . ", " . $funcao . ";";
	fwrite($Logon, $linha);
	fclose($Logon);
}

?>

<html>
<head>
<meta charset="utf-8">
<title>Cadastrar</title>
</head>
<body>
	<form action="AV1-incluir.php" method="post">
		Nome: <input type=text name=nome value=""> <br>
		Matricula: <input type=text name=matricula value=""> <br>
		Função: <input type=text name=funcao value=""> <br>
		<input type="submit" value="Incluir">
	</form>
	<br>
	<form method="get" action="AV1-inicio.php">
    	<button type="submit">Voltar</button>
	</form>
</body>
</html>