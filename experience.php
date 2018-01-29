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
					<li><a href="connection.php">users</a></li>
					
				</ul>
			</nav>
		</div>
		<div class="row"><h1><b>experience</b></h1></div>
		<div class="row" style="background-color:silver;">
			<form methode="POST" action="daschboard.php">
		<div class="form_group">
			<label for="exempleinputEmail">entreprise</label>
			<input type="text" class="form-control" id="" placeholder="organisation">
		</div>
		<div class="form_group">
			<label for="exempleinputEmail">post occupe</label>
			<input type="text" class="form-control" id="" placeholder="post">
		</div>
		<div class="form_group">
			<label for="exempleinputEmail">date debut</label>
			<input type="date" class="form-control" id="" placeholder="jj/mm/aaaa">
		</div>
	<div class="form_group">
			<label for="exempleinputEmail">date fin</label>
			<input type="date" class="form-control" id="" placeholder="jj/mm/aaaa">
		</div>

		
		<ul><div class="col_md_12"><button type="submit" class="btn btn-primary">VALDER

		</button></div></ul>
	</form>

		</div>
	</div>
</body>
</html>