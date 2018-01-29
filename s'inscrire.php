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
	<div class="container">
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
		<div class="row"><h1><b>inscription</b></h1></div>
		<div class="row">
			<form methode="POST" action="daschboard.php"  style="background-color:pink;">
		<div class="form_group">
			<label for="exempleinputEmail">nom</label>
			<input type="name" class="form-control" id="" placeholder="nom">
		</div>
		<div class="form_group">
			<label for="exempleinputEmail">prenom</label>
			<input type="name" class="form-control" id="" placeholder="prenom">
		</div>
		<div class="form_group">
			<label for="exempleinputEmail">date de naissance</label>
			<input type="date" class="form-control" id="" placeholder="jj/mm/aaaa">
		</div>
		<div class="form_group">
			<label for="exempleinputEmail">resumer</label>
			<input type="text" class="form-control" id="" placeholder="text">
		</div>
		<div class="form_group">
			<label for="exempleinputEmail">telephone</label>
			<input type="numero" class="form-control" id="" placeholder="numero">
		</div>
		<div class="form_group">
			<label for="exempleinputEmail">email</label>
			<input type="email" class="form-control" id="" placeholder="email">
		</div>
		<div class="form_group">
			<label for="exempleinputEmail">mots de passe</label>
			<input type="password" class="form-control" id="" placeholder="mots de passe">
		</div>
		<div class="form_group">
			<label for="exempleinputFile">photo</label>
			<input type="file"  id="exempleinputFile" placeholder="">
		</div><br>
		<ul><div class="col_md_12"><button type="submit" class="btn btn-primary">VALIDER

		</button></div></ul>
	</form>

		</div>
	</div>
</body>
</html>