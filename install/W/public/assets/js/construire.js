
$(function(){
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

		alert('test previous');

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
	// $('button.retirer').remove();
	//Là tu viens de retirer le bouton de l'interface, patate !!!
});