<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
<<<<<<< HEAD

		['GET', '/construire', 'tbproducts#afficheLego', 'construire_construire'],
		['GET', '/construire/[:id]', 'tbproducts#idLego', 'construire_idlego'],
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
	);