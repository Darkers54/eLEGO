$(function(){
	
	$('[data-toggle="tooltip"]').tooltip();

	var location1 = 'AccHead';
	var location2 = 'Head';
	var location3 = 'AccChest';
	var location4 = 'Chest';
	var location5 = 'AccLegs';
	var location6 = 'Legs';

	makeTheRightPrice();
	getDeliveryCountry();
	calculateTotalWeight();
    var initCatPrice = calculateCategoryPrice(parseFloat($('#estimatedWeight').text()));
    //console.log(initCatPrice); //DEBUG
	calculateDeliveryCosts(initCatPrice, 1);
	calculateTotalPrice();

	$('#btnRemAccHead').on('click', function(){
		removeByOneClickOnTheMinusButton(location1);
	});

	$('#btnAddAccHead').on('click', function(){
		addByOneClickOnThePlusButton(location1);
	});

	$('#btnRemHead').on('click', function(){
		removeByOneClickOnTheMinusButton(location2);
	});

	$('#btnAddHead').on('click', function(){
		addByOneClickOnThePlusButton(location2);
	});

	$('#btnRemAccChest').on('click', function(){
		removeByOneClickOnTheMinusButton(location3);
	});

	$('#btnAddAccChest').on('click', function(){
		addByOneClickOnThePlusButton(location3);
	});

	$('#btnRemChest').on('click', function(){
		removeByOneClickOnTheMinusButton(location4);
	});

	$('#btnAddChest').on('click', function(){
		addByOneClickOnThePlusButton(location4);
	});

	$('#btnRemAccLegs').on('click', function(){
		removeByOneClickOnTheMinusButton(location5);
	});

	$('#btnAddAccLegs').on('click', function(){
		addByOneClickOnThePlusButton(location5);
	});

	$('#btnRemLegs').on('click', function(){
		removeByOneClickOnTheMinusButton(location6);
	});

	$('#btnAddLegs').on('click', function(){
		addByOneClickOnThePlusButton(location6);
	});

	$('#btnSave').on('click', function(){
		var idUser = 1;
		var idz1 = $('.zone'+location1+'>img').attr('id');
		var idz2 = $('.zone'+location2+'>img').attr('id');
		var idz3 = $('.zone'+location3+'>img').attr('id');
		var idz4 = $('.zone'+location4+'>img').attr('id');
		var idz5 = $('.zone'+location5+'>img').attr('id');
		var idz6 = $('.zone'+location6+'>img').attr('id');

		//console.log(idz1); //DEBUG
		//console.log(idz2); //DEBUG
		//console.log(idz3); //DEBUG
		//console.log(idz4); //DEBUG
		//console.log(idz5); //DEBUG
		//console.log(idz6); //DEBUG

		var assemblage = 
		{
			AssOwner : idUser,
			AssAccHead : idz1,
			AssHead : idz2,
			AssAccChest : idz3,
			AssChest : idz4,
			AssAccLegs : idz5,
			AssLegs : idz6,
		}; 

		var assemblage_options = 
		{
			url: '/configuration/save',
			method: 'GET',
			data: assemblage,
			success: function(data)
			{
				//console.log(data); //DEBUG
				alert('votre produit a été enregisté avec succès !');
				$('#btnSave').css({display : 'none'});
				$('#btnEdit').css({display : 'none'});
			}
		}
		$.ajax(assemblage_options);
	});

	$('#btnBuy').on('click', function()
	{
		alert('Hé hé hé ! Pas encore mais ça ne saurait tarder ;p !!!');
	});

	$('#btnEdit').on('click', function()
	{
		var idUser = 1;
		var idz1 = $('.zone'+location1+'>img').attr('id');
		var idz2 = $('.zone'+location2+'>img').attr('id');
		var idz3 = $('.zone'+location3+'>img').attr('id');
		var idz4 = $('.zone'+location4+'>img').attr('id');
		var idz5 = $('.zone'+location5+'>img').attr('id');
		var idz6 = $('.zone'+location6+'>img').attr('id');

		//console.log(idz1); //DEBUG
		//console.log(idz2); //DEBUG
		//console.log(idz3); //DEBUG
		//console.log(idz4); //DEBUG
		//console.log(idz5); //DEBUG
		//console.log(idz6); //DEBUG

		alert('Fonctionnalité en cours de finalisation');

		/*
		var assemblage = 
		{
			AssOwner : idUser,
			AssAccHead : idz1,
			AssHead : idz2,
			AssAccChest : idz3,
			AssChest : idz4,
			AssAccLegs : idz5,
			AssLegs : idz6,
		}; 

		var assemblage_options = 
		{
			url: '/configuration',
			method: 'GET',
			data: assemblage,
			success: function(data)
			{
				//console.log(data); //DEBUG
			}
		}
		$.ajax(assemblage_options);
		*/
	})

	function removeByOneClickOnTheMinusButton(location)
	{
		var currentQty = parseInt($('#qty'+location+'').text());
		currentQty--;
		if(currentQty < 0)
		{
			return 0;
		}
		else
		{
			$('#qty'+location+'').text(currentQty);
			var pxPerUnit = parseFloat($('#pu'+location+'').text()).toFixed(2);
			var pxPerLine = parseFloat(currentQty * pxPerUnit).toFixed(2);
			$('#px'+location+'').text(pxPerLine);
			makeTheRightPrice();
			calculateTotalWeight();
			$('#estimatedWeight').trigger('contentchanged');
			$('#pxWithoutDelivery').trigger('contentchanged');
		}
		//console.log(currentQty); //DEBUG
		//console.log(pxPerUnit); //DEBUG
		//console.log(pxPerLine); //DEBUG
	}

	function addByOneClickOnThePlusButton(location)
	{
		var id = parseInt($('.zone'+location+'>img').attr('id'));
		//console.log(id); //DEBUG

		var my_element =
		{
			myelement: id,
		};

		var my_element_options =
		{
			url: '/configuration/rtstock',
			method: 'GET',
			data: my_element,
			success: function(data)
			{
				var currentStock = parseInt(data);
				//console.log(data); //DEBUG
				//console.log(currentStock); //DEBUG

				var currentQty = parseInt($('#qty'+location+'').text());
				currentQty++;
				if(currentQty > currentStock)
				{
					return 0;
				}
				else
				{
					$('#qty'+location+'').text(currentQty);
					var pxPerUnit = parseFloat($('#pu'+location+'').text()).toFixed(2);
					var pxPerLine = parseFloat(currentQty * pxPerUnit).toFixed(2);
					$('#px'+location+'').text(pxPerLine);
					makeTheRightPrice();
					calculateTotalWeight();
					$('#estimatedWeight').trigger('contentchanged');
					$('#pxWithoutDelivery').trigger('contentchanged');
				}
				//console.log(currentQty); //DEBUG
				//console.log(pxPerUnit); //DEBUG
				//console.log(pxPerLine); //DEBUG
			}
		}
		$.ajax(my_element_options);
	}

	function makeTheRightPrice()
	{
		var pxAccHead = parseFloat($('#pxAccHead').text()).toFixed(2);
		var pxHead = parseFloat($('#pxHead').text()).toFixed(2);
		var pxAccChest = parseFloat($('#pxAccChest').text()).toFixed(2);
		var pxChest = parseFloat($('#pxChest').text()).toFixed(2);
		var pxAccLegs = parseFloat($('#pxAccLegs').text()).toFixed(2);
		var pxLegs = parseFloat($('#pxLegs').text()).toFixed(2);

		//console.log(pxAccHead); //DEBUG
		//console.log(pxHead); //DEBUG
		//console.log(pxAccChest); //DEBUG
		//console.log(pxChest); //DEBUG
		//console.log(pxAccLegs); //DEBUG
		//console.log(pxLegs); //DEBUG

		var pxWithoutDelivery = (parseFloat(pxAccHead)+parseFloat(pxHead)+parseFloat(pxAccChest)+parseFloat(pxChest)+parseFloat(pxAccLegs)+parseFloat(pxLegs));
		$('#pxWithoutDelivery').text(parseFloat(pxWithoutDelivery).toFixed(2));
	}

	function getDeliveryCountry()
	{
		var myTableName = 'tbdeliverycountry';
		var countryList =
		{
			countryTable: myTableName,
		};

		var countryList_Options =
		{
			url: '/configuration/pays',
			method: 'GET',
			data: countryList,
			success: function(data)
			{
				//console.log(data); //DEBUG
				$('select').append(data);
			}
		}
		$.ajax(countryList_Options);
	}

	$('select').on('change', function(){
		var mySelection = parseInt($('select').val());
		//console.log(mySelection); //DEBUG
		var estimatedWeight = parseFloat($('#estimatedWeight').text());
		//console.log(estimatedWeight); //DEBUG
		catPrice = calculateCategoryPrice(estimatedWeight);
		calculateDeliveryCosts(catPrice, mySelection);
		$('#pxDelivery').trigger('contentchanged');
	});


	$('#estimatedWeight').bind('contentchanged', function()
	{
		var estimatedWeight = parseFloat($('#estimatedWeight').text());
		//console.log(estimatedWeight); //DEBUG
		var mySelection = parseInt($('select').val());
		//console.log(mySelection); //DEBUG
		catPrice = calculateCategoryPrice(estimatedWeight);
		calculateDeliveryCosts(catPrice, mySelection);
	});

	$('#pxDelivery').bind('contentchanged', function()
	{
		calculateTotalPrice();
	});

	$('#pxWithoutDelivery').bind('contentchanged', function()
	{
		calculateTotalPrice();
	});

	function calculateTotalWeight()
	{
		var qtyAccHead = $('#qtyAccHead').text();
		var qtyHead = $('#qtyHead').text();
		var qtyAccChest = $('#qtyAccChest').text();
		var qtyChest = $('#qtyChest').text();
		var qtyAccLegs = $('#qtyAccLegs').text();
		var qtyLegs = $('#qtyLegs').text();

		var averageMass = 1.41;
		var currentWeight = parseFloat((parseInt(qtyAccHead)*averageMass)+(parseInt(qtyHead)*averageMass)+(parseInt(qtyAccChest)*averageMass)+(parseInt(qtyChest)*averageMass)+(parseInt(qtyAccLegs)*averageMass)+(parseInt(qtyLegs)*averageMass)).toFixed(2);
		//console.log(currentWeight); //DEBUG
		$('#estimatedWeight').text(currentWeight);
	}

	function calculateDeliveryCosts(catprice, selectedcountry)
	{
		var myDeliveryCosts = 
		{
			dvwg_ID: catprice,
			cygp_ID: selectedcountry,
		};

		var myDeliveryCosts_options =
		{
			url: 'configuration/livraison',
			method: 'GET',
			data: myDeliveryCosts,
			success: function(data)
			{
				$('#pxDelivery').text(data);
				$('#pxDelivery').trigger('contentchanged');
				//console.log(data); //DEBUG
			}
		}
		$.ajax(myDeliveryCosts_options);
	}

	function calculateCategoryPrice(calculatedweight)
	{
		var catPrice = 0;

		if(calculatedweight >= 3000)
		{
			alert('la masse des pièces dépasse la capacité postale d \'envoi !');
			return 0;
		}
		else if(calculatedweight >= 500)
		{
			catPrice = 5;
		}
		else if(calculatedweight >= 250)
		{
			catPrice = 4;
		}
		else if (calculatedweight >= 100)
		{
			catPrice = 3;
		}
		else if(calculatedweight >= 20)
		{
			catPrice = 2;
		}
		else
		{
			catPrice = 1;
		}
		//console.log(catPrice); //DEBUG
		return catPrice;
	}

	function calculateTotalPrice()
	{
		var priceWithoutDelivery = $('#pxWithoutDelivery').text();
		//console.log(priceWithoutDelivery); //DEBUG
		var deliveryPrice = $('#pxDelivery').text();
		//console.log(deliveryPrice); //DEBUG
		var totalPrice = ((parseFloat(priceWithoutDelivery))+(parseFloat(deliveryPrice)));
		$('#pxTotal').text(parseFloat(totalPrice).toFixed(2));

	}
});