<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		['GET', '/construire', 'tbproducts#afficheLego', 'construire_construire'],
		['GET', '/construire/value1', 'tbproducts#idParts', 'construire_value1'],
		['GET', '/construire/value2', 'tbproducts#urlImg', 'construire_value2'],
		['GET', '/construire/count', 'tbproducts#countImg', 'construire_count'],
		['GET', '/construire/description', 'tbproducts#desc', 'construire_description'],
		['GET', '/construire/selection', 'tbproducts#select', 'construire_selection'],

		['POST', '/configuration', 'tbproducts#afficheConfiguration', 'configuration_configuration'],
		['GET', '/configuration/rtstock', 'tbproducts#getStock', 'configuration_rtstock'],
		['GET', '/configuration/pays', 'tbdeliverycountry#getAllCountries', 'configuration_pays'],
		['GET', '/configuration/livraison', 'tbdeliveryassocweightcountrycosts#getCosts', 'configuration_livraison'],

		['GET', '/presentation', 'Default#presentation', 'default_presentation'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['GET', '/mentions', 'Default#mentions', 'default_mentions'],
		['GET', '/help', 'Default#help', 'default_help'],

		['GET', '/imex', 'ImEx#home', 'imex_home'],

	);