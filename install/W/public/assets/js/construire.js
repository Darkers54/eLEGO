<<<<<<< HEAD

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
=======
$(function(){

	//FACTORISATION TOTALE DU CODE JS DE LA PARTIE CONSTRUIRE

	var location1 = 'acchead';
	var location2 = 'head';
	var location3 = 'accchest';
	var location4 = 'chest';
	var location5 = 'acclegs';
	var location6 = 'legs';

	var category1 = 1;
	var category2 = 2;
	var category3 = 3;
	var category4 = 4;
	var category5 = 5;
	var category6 = 6;

	var translation1 = 'Accessoire de Tête';
	var translation2 = 'Tête';
	var translation3 = 'Accessoire de Buste';
	var translation4 = 'Buste';
	var translation5 = 'Accessoire de Jambes';
	var translation6 = 'Jambes';

	$('#prevAccHead').on('click', function()
	{
		clickOnPreviousButton(location1, category1, translation1);
	});

	$('#nextAccHead').on('click', function()
	{
		clickOnNextButton(location1, category1, translation1);
	});

	$('#btnUpdAccHead').on('click', function()
	{
		clickOnSelectButton(location1);
	});

	$('#prevHead').on('click', function()
	{
		clickOnPreviousButton(location2, category2, translation2);
	});

	$('#nextHead').on('click', function()
	{
		clickOnNextButton(location2, category2, translation2);
	});

	$('#btnUpdHead').on('click', function()
	{
		clickOnSelectButton(location2);
	});

	$('#prevAccChest').on('click', function()
	{
		clickOnPreviousButton(location3, category3, translation3);
	});

	$('#nextAccChest').on('click', function()
	{
		clickOnNextButton(location3, category3, translation3);
	});	

	$('#btnUpdAccChest').on('click', function()
	{
		clickOnSelectButton(location3);
	});

	$('#prevChest').on('click', function()
	{
		clickOnPreviousButton(location4, category4, translation4);
	});

	$('#nextChest').on('click', function()
	{
		clickOnNextButton(location4, category4, translation4);
	});

	$('#btnUpdChest').on('click', function()	
	{
		clickOnSelectButton(location4);
	});

	$('#prevAccLegs').on('click', function()
	{
		clickOnPreviousButton(location5, category5, translation5);
	});

	$('#nextAccLegs').on('click', function()
	{
		clickOnNextButton(location5, category5, translation5);
	});

	$('#btnUpdAccLegs').on('click', function()
	{
		clickOnSelectButton(location5);
	});

	$('#prevLegs').on('click', function()
	{
		clickOnPreviousButton(location6, category6, translation6);
	});

	$('#nextLegs').on('click', function()
	{
		clickOnNextButton(location6, category6, translation6);
	});

	$('#btnUpdLegs').on('click', function()
	{
		clickOnSelectButton(location6);
	});	

	function clickOnPreviousButton(location, category, translation)
	{
		var id = $('#z2'+location+'>img').attr('id');
		//console.log(id); //DEBUG

		var ajax_data =
		{
			idimage : id,
		};

		var ajax_options = 
		{
			url: '/construire/value1',
			method :'GET',
			data: ajax_data,
			success: function(data)
			{
				catOrder = parseInt(data);

				if(catOrder <= 1)
				{
					return 0;
				}

				newprodCatOrder = catOrder -1;
				var ajax_data2 =
				{
					newprodCatOrder,
					idcat : category,
				};

				var ajax_options2 = 
				{
					url: '/construire/value2',
					method: 'GET',
					data: ajax_data2,
					success: function(data2)
					{
						var path = data2;
						$('#z2'+location+'>img').remove();
						$('#z2'+location+'>figcaption').remove();
						$('#z2'+location+'').append(path);
						var figcaption = '<figcaption>'+translation+' '+$('#z2'+location+'>img').attr('id')+'</figcaption>';
						$('#z2'+location+'').append(figcaption);

						var id2 = $('#z2'+location+'>img').attr('id');
						//console.log(id2); //DEBUG
						var ajax_data3 =
						{
							idimage : id2,
						};

						var ajax_options3 = 
						{
							url: '/construire/description',
							method: 'GET',
							data: ajax_data3,
							success: function(data3)
							{
								var list = data3;
								$('#z3'+location+'>ul').remove();
								$('#z3'+location+'').append(list);
							}
						}
						$.ajax(ajax_options3);
					}
				}
				$.ajax(ajax_options2);
			}
		}
		$.ajax(ajax_options);
	};		

	function clickOnNextButton(location, category, translation)
	{
		var nblinestotal=0;
		var nb_lines =
		{
			idcat: category,
		};

		var nb_lines_options =
		{
			url:'/construire/count',
			method : 'GET',
			data: nb_lines,
			success: function(count)
			{
				//console.log(count); //DEBUG
				nblinestotal = parseInt(count);

				// afficher le détail des pièces plus le bouton ajouter et retirer
				var id = $('#z2'+location+'>img').attr('id');
				//console.log(id); //DEBUG
				var ajax_data =
				{
					idimage : id,
				};
				
				var ajax_options = 
				{
					url: '/construire/value1',
					method :'GET',
					data: ajax_data,
					success: function(data)
					{
						catOrder = parseInt(data);
						//console.log(catOrder); //DEBUG
						//console.log(nblinestotal); //DEBUG
						if(catOrder >= nblinestotal)
						{
							return 0;
						}
						
						newprodCatOrder = catOrder +1;
						var ajax_data2 =
						{
							newprodCatOrder,
							idcat : category,
						};

						var ajax_options2 = 
						{
							url: '/construire/value2',
							method: 'GET',
							data: ajax_data2,
							success: function(data2)
							{
								//console.log(data2); //DEBUG
								var path = data2;
								$('#z2'+location+'>img').remove();
								$('#z2'+location+'>figcaption').remove();
								$('#z2'+location+'').append(path);
								var figcaption = '<figcaption>'+translation+' '+$('#z2'+location+'>img').attr('id')+'</figcaption>';
								$('#z2'+location+'').append(figcaption);

								var id2 = $('#z2'+location+'>img').attr('id');
								//console.log(id2); //DEBUG
								var ajax_data3 =
								{
									idimage : id2,
								};

								var ajax_options3 = 
								{
									url: '/construire/description',
									method: 'GET',
									data: ajax_data3,
									success: function(data3)
									{
										var list = data3;
										$('#z3'+location+'>ul').remove();
										$('#z3'+location+'').append(list);
									}
								}
								$.ajax(ajax_options3);
							}
						}
						$.ajax(ajax_options2);
					}
				}
				$.ajax(ajax_options);
			}
		}
		$.ajax(nb_lines_options);
	};

	function clickOnSelectButton(location)
	{
		var id3 = $('#z2'+location+'>img').attr('id');
		//console.log(id3); //DEBUG
		var currentimg = 
		{
			idimage: id3,
		};

		var currentimg_options = 
		{
			url: '/construire/selection',
			method: 'GET',
			data: currentimg,
			success: function(img)
			{
				//console.log(img); //DEBUG
				var selectedimg = img;
				$('.z4'+location+'>img').remove();
				$('.z4'+location+'').append(selectedimg);
				$('.z4'+location+'>img').trigger('contentchanged');
			}
		}
		$.ajax(currentimg_options);
	};

	$('#z4'+location1+'>img').bind('contentchanged', function()
	{
		var idz4p1 = $('.z4'+location1+'>img').attr('id');
	});
	$('#z4'+location2+'>img').bind('contentchanged', function()
	{
		var idz4p2 = $('.z4'+location2+'>img').attr('id');
	});
	$('#z4'+location3+'>img').bind('contentchanged', function()
	{
		var idz4p3 = $('.z4'+location3+'>img').attr('id');
	});
	$('#z4'+location4+'>img').bind('contentchanged', function()
	{
		var idz4p4 = $('.z4'+location4+'>img').attr('id');
	});
	$('#z4'+location5+'>img').bind('contentchanged', function()
	{
		var idz4p5 = $('.z4'+location5+'>img').attr('id');
	});
	$('#z4'+location6+'>img').bind('contentchanged', function()
	{
		var idz4p6 = $('.z4'+location6+'>img').attr('id');
	});

	$('#myForm').submit(function()
	{		
		var idz4p1 = $('.z4'+location1+'>img').attr('id');
		var idz4p2 = $('.z4'+location2+'>img').attr('id');
		var idz4p3 = $('.z4'+location3+'>img').attr('id');
		var idz4p4 = $('.z4'+location4+'>img').attr('id');
		var idz4p5 = $('.z4'+location5+'>img').attr('id');
		var idz4p6 = $('.z4'+location6+'>img').attr('id');

		console.log(idz4p1); //DEBUG
		console.log(idz4p2); //DEBUG
		console.log(idz4p3); //DEBUG
		console.log(idz4p4); //DEBUG
		console.log(idz4p5); //DEBUG
		console.log(idz4p6); //DEBUG

		if(typeof(idz4p1) == 'undefined')
		{
			alert('vous n\'avez pas sélectionné d\' '+translation1+'');
			return false;
		}
		else if(typeof(idz4p2) == 'undefined')
		{
			alert('vous n\'avez pas sélectionné de '+translation2+'');
			return false;
		}
		else if(typeof(idz4p3) == 'undefined')
		{
			alert('vous n\'avez pas sélectionné d\' '+translation3+'');
			return false;
		}
		else if(typeof(idz4p4) == 'undefined')
		{
			alert('vous n\'avez pas sélectionné de '+translation4+'');
			return false;
		}
		else if(typeof(idz4p5) == 'undefined')
		{
			alert('vous n\'avez pas sélectionné d\' '+translation5+'');
			return false;
		}
		else if(typeof(idz4p6) == 'undefined')
		{
			alert('vous n\'avez pas sélectionné de '+translation6+'');
			return false;
		}
		else 
		{
			var input1 = '<input type="hidden" name="element1" value="'+idz4p1+'">';
			var input2 = '<input type="hidden" name="element2" value="'+idz4p2+'">';
			var input3 = '<input type="hidden" name="element3" value="'+idz4p3+'">';
			var input4 = '<input type="hidden" name="element4" value="'+idz4p4+'">';
			var input5 = '<input type="hidden" name="element5" value="'+idz4p5+'">';
			var input6 = '<input type="hidden" name="element6" value="'+idz4p6+'">';

			$('#myForm').append(input1, input2, input3, input4, input5, input6);
		}

	});
		
>>>>>>> origin/eLEGO_DEV_AO
});