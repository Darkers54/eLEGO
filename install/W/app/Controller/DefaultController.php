<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function presentation()
	{
		$this->show('default/presentation');
	}


	public function contact()
	{
		$this->show('default/contact');
	}

	public function mentions()
	{
		$this->show('default/mentions');
	}

	public function help()
	{
		$this->show('default/help');
	}


}