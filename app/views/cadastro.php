<html>

<head lang="pt-br">
<meta charset="utf-8">
<title>Cadastro</title>
<link rel="stylesheet" type="text/css" href="../../public/css/cadastro.css">
</head>

<body> 

<div id="form">
<form action = "cadastro" method="post">
    <h1>fale um numero<h1>
    <input type="number" name="numero" required="required">
    <input type="submit" value="enviar">
</form>
</form>
<br>
<?php

if (isset($_POST["numero"])){
    
$t = $_POST["numero"]*30;

for ($i = 0; $i < $t; $i++){

echo "<img src='../../public/imagens/cj.gif'>";

}
}
?>

</body>

</html>