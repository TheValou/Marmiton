<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recettes</title>
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/CSS/style.css" rel="stylesheet">
</head>
<body>

  <?php include("navbar.php"); ?>
  <?php include("modal.php"); ?>

  <div class="container container2">
    <h2 class="text-center">Recettes au hasard</h2>          
    <div class="row">
      <div class="col-md-4">
        <a href="pulpitrock.jpg" class="thumbnail">
          <p>
            <?= "Gratin de courgettes"; ?> </p>    
            <img src="pulpitrock.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-md-4">
          <a href="moustiers-sainte-marie.jpg" class="thumbnail">
            <p>Moustiers-Sainte-Marie: Considered as one of the "most beautiful villages of France".</p>
            <img src="moustiers-sainte-marie.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:150px">
          </a>
        </div>
        <div class="col-md-4">
          <a href="cinqueterre.jpg" class="thumbnail">
            <p>The Cinque Terre: A rugged portion of coast in the Liguria region of Italy.</p>      
            <img src="cinqueterre.jpg" alt="Cinque Terre" style="width:150px;height:150px">
          </a>
        </div>
      </div>
    </div>


    <script type="text/javascript" src="../assets/js/jquery-2.2.0.js" ></script>
    <script src="../assets/js/formulaire.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
  </body>
  </html>