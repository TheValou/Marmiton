<?php

require_once "../MODEL/Connector.php";
require_once "../MODEL/Model.php";

// $extensions = array('.png', '.gif', '.jpg', '.jpeg');
// // récupère la partie de la chaine à partir du dernier . pour connaître l'extension.
// $extension = strrchr($_FILES['avatar']['name'], '.');
// //Ensuite on teste
// if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
// {
//      $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
// }


// $taille_maxi = 100000;
// //Taille du fichier
// $taille = filesize($_FILES['avatar']['tmp_name']);
// if($taille>$taille_maxi)
// {
//      $erreur = 'Le fichier est trop gros...';
// }

// $dossier = 'upload/';
//      $fichier = basename($_FILES['avatar']['name']);
//      if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
//      {
//           echo 'Upload effectué avec succès !';
//      }
//      else //Sinon (la fonction renvoie FALSE).
//      {
//           echo 'Echec de l\'upload !';
//      }
// }

//echo $_FILES['icone']['name']     //Le nom original du fichier, comme sur le disque du visiteur 
$x = 0;
while($_POST['imgs'][$x] != NULL);
{
	echo $_POST['imgs'][$x];
	$x++;
}

$i = 0;
$j = 0;
//$k = 0;
$name = $_POST['name'];
$category = $_POST['category'];
$step_order = $_POST['step_order'];
$step = $_POST['step'];
$time = $_POST['time'];
$auteur = $_POST['auteur'];
$mail = $_POST['mail'];
$ingredient = "";
$recipe = "";

while($_POST['ingredient'][$i] != NULL)
{
	//$ingredient .= $_POST['ingredient'][$i]."-".$_POST['number'][$i]."-".$_POST['type'][$i]."\n";
	$ingredient .= "- " . $_POST['quantity'][$i] . " (de) " . $_POST['ingredient'][$i] . "\n";
	$i++;
}

while($_POST['step'][$j] != NULL)
{
	//$data_step = array("", "", "");
	$recipe .= "Etape ". $_POST['step_order'][$j] . " : " . $_POST['step'][$j] . "\n";
	$j++;
}

echo "test ici";

$data = array("{$name}", "{$category}", "{$ingredient}", "{$recipe}", "{$time}", "{$auteur}", "{$mail}");
$model = new Model();
$model->add_recipe($data);

/*$id_recipe = LAST_INSERT_ID(); //this ain't correct cause LAST-INSERT_ID() is a MySQL function so we need to create a PHP function ; just leaving this here to remember to use it.

while($_POST['step'][$k] != NULL)
{

}*/
?>
