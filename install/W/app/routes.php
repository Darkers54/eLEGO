<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
<<<<<<< HEAD
<<<<<<< HEAD

		['GET', '/construire', 'tbproducts#afficheLego', 'construire_construire'],
		['GET', '/construire/[:id]', 'tbproducts#idLego', 'construire_idlego'],
=======

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

>>>>>>> origin/eLEGO_DEV_AO
		['GET', '/presentation', 'Default#presentation', 'default_presentation'],
<<<<<<< HEAD
		['GET', '/contact', 'Default#contact', 'default_contact'],
=======
		['GET', '/inscription', 'Default#inscription', 'default_inscription'],
		['POST', '/inscription', 'tbusers#createinscription', 'default_createinscription'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['POST', '/contact', 'tbclients#createcontact', 'default_createcontact'],
>>>>>>> origin/eLEGO_DEV_CG
		['GET', '/mentions', 'Default#mentions', 'default_mentions'],
		['GET', '/help', 'Default#help', 'default_help'],

		['GET', '/imex', 'ImEx#home', 'imex_home'],

<<<<<<< HEAD
=======
		['GET', '/presentation', 'Default#presentation', 'default_presentation'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['GET', '/mentions', 'Default#mentions', 'default_mentions'],
		['GET', '/help', 'Default#help', 'default_help'],

		['GET', '/construire', 'Tbproducts#afficheLego', 'construire_construire'],
		['GET', '/construire/[:id]', 'tbproducts#idLego', 'construire_idlego'],

		
		['GET', '/imex', 'ImEx#home', 'imex_home'],

		['GET', '/userspace', 'UserSpace#UserSpace', 'userspace_userspace'],

		['GET', '/privatespace', 'PrivateSpace#PrivateSpace', 'privatespace_privatespace'],
		['GET', '/privatespace/collection', 'Tbfigurecreates#collection', 'privatespace_collection'],
		['GET', '/privatespace/collection/creationdetails/[:id]', 'Tbfigurecreates#creationdetails', 'privatespace_creationdetails'],

>>>>>>> origin/eLEGO_DEV_MM
=======
>>>>>>> origin/eLEGO_DEV_AO
	);