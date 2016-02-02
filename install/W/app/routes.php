<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		['GET', '/construire', 'tbproduct#afficheLego', 'construire_construire'],
		['GET', '/construire/value1', 'tbproduct#idParts', 'construire_value1'],
		['GET', '/construire/value2', 'tbproduct#urlImg', 'construire_value2'],
		['GET', '/construire/count', 'tbproduct#countImg', 'construire_count'],
		['GET', '/construire/description', 'tbproduct#desc', 'construire_description'],
		['GET', '/construire/selection', 'tbproduct#select', 'construire_selection'],

		['POST', '/configuration', 'tbproduct#afficheConfiguration', 'configuration_configuration'],
		['GET', '/configuration/rtstock', 'tbproduct#getStock', 'configuration_rtstock'],
		['GET', '/configuration/save', 'tbproduct#saveComposition', 'configuration_save'],
		['GET', '/configuration/pays', 'tbdeliverycountry#getAllCountries', 'configuration_pays'],
		['GET', '/configuration/livraison', 'tbdeliveryassocweightcountrycosts#getCosts', 'configuration_livraison'],

		['GET', '/presentation', 'Default#presentation', 'default_presentation'],

		['GET', '/inscription', 'Default#inscription', 'default_inscription'],
		['POST', '/inscription', 'tbusers#createinscription', 'default_createinscription'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['POST', '/contact', 'tbclients#createcontact', 'default_createcontact'],

		['GET', '/mentions', 'Default#mentions', 'default_mentions'],
		['GET', '/help', 'Default#help', 'default_help'],

		['GET', '/admin', 'Admin#adm_home', 'admin_home'],
		['GET', '/admin/users', 'Admin#adm_users', 'adm_users'],
		['GET', '/admin/data', 'Admin#adm_data', 'adm_data'],
		['POST', '/admin/import', 'Data#adm_data_import', 'adm_data_import'],
		['GET', '/admin/content', 'Admin#adm_content', 'adm_content'],
		['GET', '/admin/sav', 'Admin#adm_sav', 'adm_sav'],
		['GET', '/admin/forum', 'Admin#adm_forum', 'adm_forum'],
		['GET', '/admin/reporting', 'Admin#adm_reporting', 'adm_reporting'],


		['GET', '/privatespace', 'PrivateSpace#privateSpace', 'privatespace_privatespace'],
		['GET', '/privatespace/consultation', 'PrivateSpace#consultation', 'privatespace_consultation'],

		['GET', '/privatespace/consultation/collection', 'Tbfigurecreates#collection', 'privatespace_collection'],
		['GET', '/privatespace/consultation/collection/creationdetails/[:id]', 'Tbfigurecreates#creationdetails', 'privatespace_creationdetails'],
	);