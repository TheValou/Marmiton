<?php ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Marmiton</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li>
					<a href="formulaire.php">Ajouter une recette</a>
				</li>
				<li>
					<a href="recettes.php">Afficher les recettes</a>
				</li>
				<li>
					<a href="#" data-toggle="modal" data-target="#myModal">Contact</a>
				</li>
			</ul>
			<form class="navbar-form navbar-left" role="search" id="search" action="../CONTROLLER/search.php">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Recherche par nom" id="name">

					<select class="form-control" id="category" size="1">
						<option value="1">Entree</option>
						<option value="2">Plat Principal</option>
						<option value="3">Dessert</option>
						<option value="4">Accompagnement</option>
						<option value="5">Amuse-gueule</option>
						<option value="6">Boisson</option>
						<option value="7">Confiserie</option>
						<option value="8">Sauce</option>
					</select>
				</div>
				<button type="submit" class="btn btn-default">Chercher</button>
			</form>
		</div>
	</div>
</nav>
<script type="text/javascript" src="../assets/js/jquery-2.2.0.js" ></script>
<script src="../assets/js/search.js"></script>
