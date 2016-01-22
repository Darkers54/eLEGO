<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		['GET', '/construire', 'tbproducts#afficheLego', 'construire_construire'],
		['GET', '/construire/[:id]', 'tbproducts#idLego', 'construire_idlego'],
		['GET', '/presentation', 'Default#presentation', 'default_presentation'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['POST', '/contact', 'tbclients#createcontact', 'default_createcontact'],
		['GET', '/mentions', 'Default#mentions', 'default_mentions'],
		['GET', '/help', 'Default#help', 'default_help'],

		['GET', '/imex', 'ImEx#home', 'imex_home'],

	);