<?php

namespace Controller;

use \W\Controller\Controller;

class PrivateSpaceController extends Controller
{
		public function privateSpace()
		{
			$this->show('privatespace/privatespace');
		}

		public function consultation()
		{
			$this->show('privatespace/consultation');
		}
}	
