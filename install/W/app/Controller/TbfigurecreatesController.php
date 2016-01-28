<?php

	namespace Controller;

	class TbfigurecreatesController extends \W\Controller\Controller
	{
		public function collection()
		{
			$this->show('privatespace/collection');
			/*$tbfigurecreatesManager = new \Manager\TbfigurecreatesManager();
			$figurecreates = $tbfigurecreatesManager->findAll('figTitle');
			$this->show('privatespace/collection', ['figure' => $figurecreates]);*/
		}

		public function creationDetails($idToDisplay)
		{
			$this->show('privatespace/creationdetails');
			/*$tbfigurecreatesManager = new \Manager\TbfigurecreatesManager();
			$figureToDisplay = $tbfigurecreatesManager->find($idToDisplay);
			$this->show('privatespace/creationdetails', ['collection' => $figureToDisplay]);*/
		}
	}

?>	