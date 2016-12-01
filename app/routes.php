<?php
	
	$w_routes = array(
		// Quand on voudra traiter un form, on mettra GET|POST
		['GET', '/', 'Default#homepage', 'default_homepage'],
		// ['methode de traitement', 'URL', 'nomdébutpageducontroller#nomdelafct°', 'route=permettra de faire les liesn doit être unique']


		['GET', '/page1', 'Default#page1', 'default_page1'],

		['GET', '/user/login', 'User#login', 'user_login']
		//= le chemin pourra  être écrit sen poassant par le mêmecontroller['GET', '/user/login', 'Default#login', 'default_login'],
	);