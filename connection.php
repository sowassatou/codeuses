<?php 
include("conexion.php");
 ?>
<html>
<head>
	<title>cv codeuse</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="row">
			<nav class="navbar navbar-inverse" role="navigation">
				<a class="navbar-brand" href="#">sheisthecode cv</a>
				<ul class="nav navbar-nav">
					<li><a href="#">à propos</a></li>
					<li><a href="connection.php">connection</a></li>
					<li><a href="s'inscrire.php">s'inscrire</a></li>
				</ul>
			</nav>
		</div>
		<form methode="POST" action="daschboard.php"  style="background-color:pink;">
		<div class="form_group">
			<div><legende><h1><b>connectez-vous</b></h1></legende></div><br>
		<div class="form_group">
			<label for="exempleinputEmail">email</label>
			<input type="email" class="form-control" id="" placeholder="email">
		</div>
		<div class="form_group">
			<label for="exempleinputEmail">mots de passe</label>
			<input type="password" class="form-control" id="" placeholder="mots de passe">
		</div><br>
		<ul><div class="col_md_12"><button type="submit" class="btn btn-primary">VALDER

		</button></div></ul>
	</form>

</body>
</html>