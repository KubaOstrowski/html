<?php
$logowanie = 'true';
if(isset($_POST['haslo']))
{
	$haslo = $_POST['haslo'];
	if(sha1($haslo)!='45654748fgiog7844e8')
	{$logowanie = 'false';}
	else header('location:podzielna.html');
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<title>Strona WWW</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div id="contener">
	<header>
		<a href="index.html"><img src="baner.png" alt="baner.png"/></a>
	</header>
	<nav id="navigacja">
		<p>MENU</p>
		<a class="nav_a" href="index.html">Opis</a>
		<a class="nav_a" href="haslo.php">Podzielność przez 8</a>
		<a class="nav_a" href="suma.html">Suma liczb z zakresu</a>
	</nav>
	<article id="panel">
		<?php if($logowanie == 'false') echo "Błąd logowania"
		?>
		<form action="haslo.php" method="POST">
		Wprowadź hasło: <input type="password" name="haslo" />
		<input type="submit" value="Wyślij" />
		</form>
	</article>
</div>
</body>
</html>