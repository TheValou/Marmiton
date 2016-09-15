jQuery(document).ready(function() {

	var i = 0;
	var j = 0;
	var k = 0;

	jQuery(".btn-delete").click(function () {
		if (i > 0)
		{
			jQuery(".last" + i).remove();
			i--;
		}
	});

	jQuery(".btn-delete-step").click(function () {
		if (j > 0)
		{
			jQuery(".last_step" + j).remove();
			j--;
		}
	});

	jQuery(".btn-delete-img").click(function () {
		console.log("alors :");
		console.log(k);
		if (k > 0)
		{
			jQuery(".last_img" + k).remove();
			k--;
		}
	});

	jQuery(".btn-plus").click(function create_new_line() {
		var a = i + 1;
		new_line = '<div class="form-group last'+a+'">';
		new_line += '<label class="col-sm-2 control-label">Ingrédients</label>';
		new_line += '<div class="col-sm-10 >';
		new_line += '<div class="row">';
		new_line +=	'<input class="col-sm-4" type="text" name="quantity" id="qty1" placeholder="exemple : 200g"required>';
		new_line += '<input class="col-sm-4" type="text" name="ingredient" id="ing1" placeholder="pommes" required>';
		new_line += '</div>';
		new_line += '</div>';
		new_line += '</div>';
		jQuery(".last"+i).after(new_line);
		i++;
	});

	jQuery(".btn-plus-step").click(function create_new_line2() {
		var b = j + 1;
		new_line = '<div class="form-group last_step'+b+'">';
		new_line += '<label class="col-sm-2 control-label">Etape n°'+(b+1)+'</label>';
		new_line += '<div class="col-sm-10">';
		new_line += '<input type="number" id="step_order1" name="step_order" value="'+(b+1)+'" hidden/>';
		new_line += '<textarea id="step1" class="form-control"rows="3"name="step" value="Description" required>Description</textarea>';
		new_line += '<div class="empty_txt "id="erreur_step"></div>';
		new_line += '</div>';
		jQuery(".last_step"+j).after(new_line);
		j++;
	});

	jQuery(".btn-plus-img").click(function create_new_line3() {
		var c = k + 1;
		new_line = '<div class="form-group last_img'+c+'">';
		new_line += '<label class="col-sm-2 control-label">Image n°'+(c+1)+'</label>';
		new_line += '<div class="col-sm-10">';
		new_line += '<input class="form-control" type="file" name="nom" />';
		new_line += '</div>';
		new_line += '</div>';
		jQuery(".last_img"+k).after(new_line);
		k++;
	});

	function test(t, e){
		if (!t.val()) {
			e.text("Le champ "+t.attr('value')+" est vide").show();
			t.addClass('empty');
		} else {
			t.removeClass('empty');
			e.hide();
		}
	}

	var formulaire = ["title", "category", "step_order1", "step1", "quantity1", "ing1", "time_prep", "auteur", "mail"];
	for	(index = 0; index < formulaire.length; index++)
	{
		$("#"+formulaire[index]).keyup(function() {
			var t = jQuery(this);
			var e = jQuery("#erreur_"+jQuery(this).attr('id'));
			test(t, e);
		}).keyup();
	}

	jQuery("#form-0").submit(function(e){
		e.preventDefault();
		var name = jQuery("#title_r").val();
		var category = jQuery("#category").val();
		var imgs = jQuery("input[name^='img']").map(function() {return jQuery(this).val();}).get();
		var step_orders = jQuery("input[name^='step_order']").map(function() {return jQuery(this).val();}).get();
		var steps = jQuery("textarea[name^='step']").map(function() {return jQuery(this).val();}).get();
		var quantity = jQuery("input[name^='quantity']").map(function() {return jQuery(this).val();}).get();
		var ingredients = jQuery("input[name^='ingredient']").map(function() {return jQuery(this).val();}).get();
		//var type = jQuery("select[name^='type']").map(function() {return jQuery(this).val();}).get();
		var time = jQuery("#time_prep").val();
		var auteur = jQuery("#auteur").val();
		var mail = jQuery("#mail").val();
		console.log(imgs);

		jQuery.ajax({
			url: "../CONTROLLER/recipe.php",
			method : "POST",
			data: {name: name, category: category, ingredient: ingredients, quantity: quantity, /*type: type, */
				step_order: step_orders, step: steps, time: time, auteur: auteur, mail: mail, imgs: imgs},
			success : function(data){
							console.log("En cas de succès : ");

				console.log(data);
			}
						//console.log("ici");

		});
		alert("Votre recette a bien été enregistrée, vous recevrez un mail lorsque celle-ci sera validée");
		//alert(name + " - " + category + " - " + step_orders + " - " + steps + " - " + quantity + " - " + ingredients + " - " + time + " - " + auteur + " - " + mail)
		//jQuery(location).attr('href',"index.php");
	});
});