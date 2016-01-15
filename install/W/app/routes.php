<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		['GET', '/test', 'tbproducts#test', 'test_test'],

		['GET', '/presentation', 'Default#presentation', 'default_presentation'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['GET', '/mentions', 'Default#mentions', 'default_mentions'],
		['GET', '/help', 'Default#help', 'default_help'],

		['GET', '/imex', 'ImEx#home', 'imex_home'],

	);