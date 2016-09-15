<?php
require_once "../MODEL/Connector.php";
require_once "../MODEL/Model.php";

$name = $_POST['name'];
$type = $_POST['type'];
$model = new Model();
$result = $model->get_recipe($type);

$resultat = $result->fetchAll();
$i = 0;

?>
<h2 class="text-center">Resultats de la recherche "<?= $name ?>"</h2> 
<?php
while ($resultat[$i]['title'])
{
	$sim = my_compare($resultat[$i]['title'], $name);
	if ($sim >= 0.7) {
		?>
		<div class="row">
			<div class="col-md-4">
				<a href="pulpitrock.jpg" class="thumbnail">
					<p>
						<?= $resultat[$i]['title']; ?> </p>    
						<img src="pulpitrock.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
					</a>
					</div>					<input type="button" class="btn-rate btn btn-default" value="Noter">

			</div>
			<?php 
		}
		$i++;
	}

	function my_compare($var1, $var2)
	{
		$var1 = str_replace(' ', '', $var1);
		$var2 = str_replace(' ', '', $var2);
		$length1 = strlen($var1);
		$length2 = strlen($var2);
		$x = 0;
		$count = 0;
		if ($length2 < $length1)
			$length1 = $length2;
		while (isset($var1[$x]) && isset($var2[$x]))
		{
			if($var1[$x] == $var2[$x])
				$count++;
			$x++;
		}
		return (($count / $length1));
	}

	?>