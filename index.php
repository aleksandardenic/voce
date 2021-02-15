<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
<div id="wrapper">
	
<div id="header">
<div id="logo">
	<img src="images/voce.jpg" alt="" style="width: 300px;">
	
</div>
<div>
<form method="post" action="registracija.php" id="forma1">
	<input type="submit" name="submit" value="Registrate">
</form>
<form method="post" action="login.php" id="forma1">
<input type="submit" name="submit" value="Login">
</form>
</div>
	
</div>
<div id="nav">
<ul>
	<li><a href="index.php">Pocetna</a></li>
	<li><a href="domacevoce.php">Domace voce</a></li>
	<li><a href="juznovoce.php">Juzno voce</a></li>
	<li><a href="kontakt.php">Komentari</a></li>
	
</ul>

	
</div>


<div id="main" style="height: 1100px;">

<?php
include "voce/juznovoce.php";
include "voce/domacevoce.php";

?>


</div>

<div id="footer">
	<p>Copyright &copy; VOCE</p>
</div>
</div>

</body>
</html>
