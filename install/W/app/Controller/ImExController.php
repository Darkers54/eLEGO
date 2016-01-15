<?php

namespace Controller;

use \W\Controller\Controller;

class ImExController extends Controller
{
	public function home()
	{
		$this->show('imex/imex');
	}
}