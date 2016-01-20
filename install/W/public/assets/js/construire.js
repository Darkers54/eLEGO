
$(function(){


	var images_stockees= [];
/*
	Quand je clique sur une image elle s'affiche 
*/

/*
	$("img").on('click', function(){
		var new_image = $('<figure>
							<img src="<?= $this->assetUrl(\'/img/products/\'.$currentAccHead[\'prodCat\'].\'/\'.$currentAccHead[\'prodSubCat\'].\'/\'.$currentAccHead[\'prodUrl\'])?>" alt="<?= $currentAccHead[\'prodDesc\']?>">
						</figure>');
		$(".ac_head").append(new_image);
		$('new_image').show();
	});
*/

	/*
		Quand je clique sur la div previous :
	*/
	$('#prevAccHead').on('click', function(){
		//Je récupére

		var id_image = $('#z2acchead>img').attr('id');
		console.log(id_image);

		$.ajax('/construire'), {
			data: id_image,
			method: "GET",
			success: function(result, status, xhr){
				console.info("success", result);
			},
			error: function(xhr, status, error){
				console.error("error", xhr, status);
			},
			complete: function(xhr, status){
				console.log("complete", xhr);
			}
		}

		$.ajax({
			url: '/path/to/file',
			type: 'default GET (Other values: POST)',
			dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
			data: {param1: 'value1'},
		})
		.done(function(data) {
			console.log("success");
			var myData = JSON.parse(data);
			console.log(myData)
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		



		//Je stocke id dans array
		//images_stockees.push(new_id_image);
		//alert('test previous');

		//Je parcours le tableau
		//for(i=0;i<images_stockees.length;i--){
			// Je décrémente l'id 
			
	 		//$("").append();
	 	//}

	});

	/*
		Quand je clique sur la div next :
	*/

	$('#nextAccHead').on('click', function(){

		// afficher le détail des pièces plus le bouton ajouter et retirer
				alert('test next');
	});

	$('#prevHead').on('click', function(){

		alert('test previous');

	});

	$('#nextHead').on('click', function(){

		alert('test next');
	});

	$('#prevAccChest').on('click', function(){

		alert('test previous');

	});

	$('#nextAccChest').on('click', function(){

		alert('test next');
	});

	$('#prevChest').on('click', function(){

		alert('test previous');

	});

	$('#nextChest').on('click', function(){

		alert('test next');
	});

	$('#prevAccLegs').on('click', function(){

		alert('test previous');

	});

	$('#nextAccLegs').on('click', function(){

		alert('test next');
	});

	$('#prevLegs').on('click', function(){

		alert('test previous');

	});

	$('#nextLegs').on('click', function(){

		alert('test next');
	});
	/*

		Affichage de l'image k
	*/

	$('.ajouter').on('click', function(){

		// récupération
		




	});

	/*
		Suppression de l'image sélectionnée
	*/
	// $('.retirer').remove();
	//Là tu viens de retirer le bouton de l'interface, patate !!!
});