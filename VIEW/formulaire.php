<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ajouter une recette</title> 
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/CSS/style.css" rel="stylesheet">
</head>
<body>

	<?php include("navbar.php"); ?>
	<?php include("modal.php"); ?>

	<!-- Page Content -->
	<div class="container container2">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1>Ajouter une recette</h1>
			</div>
		</div>

		<form id="form-0" method="post" name="ajout" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Titre</label>
				<div class="col-sm-10">
					<input value="Titre" class="form-control" id="title_r" type="text" required/>
					<div class="empty_title" id="erreur_title"></div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Type de plat</label>
				<div class="col-sm-10">
					<select class="form-control col-sm-2" id="category" size="1">
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
			</div>

			<div class="form-group last_step0">
				<label class="col-sm-2 control-label">Etape n° 1</label>
				<div class="col-sm-10">
					<input type="number" id="step_order1" name="step_order" value="1" hidden/>
					<!-- <textarea id="step1" class="form-control" rows="3"name="step" value="Description" required>Description</textarea> -->
					<div class="empty_txt "id="erreur_step"></div>
				</div>
			</div>


			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4">
					<input type="button" class="btn-plus-step btn btn-default" value="Ajouter une étape">
				</div>
				<div class="col-sm-offset-2 col-sm-4">
					<input type="button" class="btn-delete-step btn btn-default" value="Supprimer une étape">
				</div>
			</div>

			<div class="form-group last_img0">
				<label class="col-sm-2 control-label">Image n° 1:</label>
				<div class="col-sm-10">
					<input class="form-control" type="file" name="img"/>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4">
					<input type="button" class="btn-plus-img btn btn-default" value="Ajouter une photo">
				</div>
				<div class="col-sm-offset-2 col-sm-4">
					<input type="button" class="btn-delete-img btn btn-default" value="Supprimer une photo">
				</div>
			</div>

			<div class="form-group last0">
				<label class="col-sm-2 control-label">Ingrédients</label>
				<div class="col-sm-10">
					<div class="fom-control">
						<input class="col-sm-4" type="text" name="quantity" id="quantity1" placeholder="exemple : 200g"required>
						<input class="col-sm-4" type="text" name="ingredient" id="ing1" placeholder="pommes" required>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4">
					<input type="button" class="btn-plus btn btn-default" value="Ajouter un ingrédient">
				</div>
				<div class="col-sm-offset-2 col-sm-4">
					<input type="button" class="btn-delete btn btn-default" value="Supprimer un ingrédient">
				</div>
			</div>


			<div class="form-group">
				<label class="col-sm-2 control-label">Temps de préparation</label>
				<div class="col-sm-10">
					<input class="form-control" id="time_prep" type="time" value="00:00"required=/>

				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Auteur</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="auteur" value="Auteur" />
					<div class="empty_txt "id="erreur_auteur"></div>

				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="mail" placeholder="example@mail.com">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" value="Valider la recette">Valider la recette </button>
				</div>
			</div>
		</form>
	</div>

</div>
<script type="text/javascript" src="../assets/js/jquery-2.2.0.js" ></script>
<script src="../assets/js/formulaire.js"></script>
<script src="../assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>