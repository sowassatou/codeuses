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
					<li><a href="connection.php">users</a></li>
					
				</ul>
			</nav>
		</div>
	<div class="container">
		<div class="row">

		<div class="col-md-3"><a href="">modifier le profil</a></div><br>
		<div class="col-md-3"><a href="">créer cv</a></div><br>
		<div class="col-md-3"><a href="">afficher votre cv</a></div><br>
		<div class="col-md-3"><a href="">ajouter experience</a></div><br>
		<div class="col-md-3"><a href="">ajouter diplome</a></div><br>
		<div class="col-md-3"><a href="">ajouter centre d interet</a></div>
		<div class="col-md-9"  style="background-color:pink;">
				<form methode="POST" action="daschboard.php">
		<div class="form_group">
			<label for="exempleinputEmail">centre d'interet</label>
			<input type="text" class="form-control" id="" placeholder="basketball">
		</div>
		<div class="form_group">
			<label for="exempleinputEmail">description</label>
			<input type="text" class="form-control" id="" placeholder="description">
		</div>
		
		
		<ul><div class="col_md_12"><button type="submit" class="btn btn-primary">VALIDER

		</button></div></ul>
	</form>

 
 </body>
 </html>