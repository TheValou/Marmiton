jQuery(document).ready(function() {

jQuery("#search").submit(function(e){
		e.preventDefault();
		var name = jQuery("#name").val();
		var type = jQuery("#category").val();
		jQuery.ajax({
			url: "../CONTROLLER/search.php",
			method : "POST",
			data: {name: name, type: type},
			success : function(data, statut){
				$(".container2").html(data);
       }
		});
	});
});