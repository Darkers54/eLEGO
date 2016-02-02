<?php

	namespace Controller;

	class TbproductController extends \W\Controller\Controller
	{
		public function afficheLego()
		{
			$zone1 = 3;
			$zone2 = 1;
			$tbproductManager = new \Manager\TbproductManager();
			$z1accHead = $tbproductManager->getParts($zone1, 1);
			$z2accHead = $tbproductManager->getParts($zone2, 1);
			$z1head = $tbproductManager->getParts($zone1, 2);
			$z2head = $tbproductManager->getParts($zone2, 2);
			$z1accChest = $tbproductManager->getParts($zone1, 3);
			$z2accChest = $tbproductManager->getParts($zone2, 3);
			$z1chest = $tbproductManager->getParts($zone1, 4);
			$z2chest = $tbproductManager->getParts($zone2, 4);
			$z1acclegs = $tbproductManager->getParts($zone1, 5);
			$z2acclegs = $tbproductManager->getParts($zone2, 5);
			$z1legs = $tbproductManager->getParts($zone1, 6);
			$z2legs = $tbproductManager->getParts($zone2, 6);
			
			$this->show('construire/construire', [
				'z1acchead'=>$z1accHead,
				'z2acchead'=>$z2accHead,
				'z1head' => $z1head,
				'z2head' => $z2head,
				'z1accchest'=>$z1accChest,
				'z2accchest'=>$z2accChest,
				'z1chest'=>$z1chest,
				'z2chest'=>$z2chest,
				'z1acclegs'=> $z1acclegs,
				'z2acclegs'=> $z2acclegs,
				'z1legs'=>$z1legs,
				'z2legs'=>$z2legs
			]);	
		}

		public function afficheConfiguration()
		{
			$request = $_REQUEST;
			$element1 = $request['element1'];
			$element2 = $request['element2'];
			$element3 = $request['element3'];
			$element4 = $request['element4'];
			$element5 = $request['element5'];
			$element6 = $request['element6'];
			$tbproductManager = new \Manager\tbproductManager();
			$ligne1 = $tbproductManager->getByID($element1);
			$ligne2 = $tbproductManager->getByID($element2);
			$ligne3 = $tbproductManager->getByID($element3);
			$ligne4 = $tbproductManager->getByID($element4);
			$ligne5 = $tbproductManager->getByID($element5);
			$ligne6 = $tbproductManager->getByID($element6);
			$this->show('configuration/configuration', [
				'ligne1' => $ligne1,
				'ligne2' => $ligne2,
				'ligne3' => $ligne3,
				'ligne4' => $ligne4,
				'ligne5' => $ligne5,
				'ligne6' => $ligne6,
			]);
		}

		public function idParts()
		{
			$request=$_REQUEST;
			$idimg = $request['idimage'];
			$tbproductManager = new \Manager\TbproductManager();
			$mesInfos = $tbproductManager->getByID($idimg);
			$this->show('construire/value1', ['mesinfos' => $mesInfos]);
		}

		public function urlImg()
		{
			$request = $_REQUEST;
			$idcat = $request['idcat'];
			$newprodCatOrder = $request['newprodCatOrder'];
			$tbproductManager = new \Manager\TbproductManager();
			$monImage = $tbproductManager->getImg($idcat, $newprodCatOrder);
			$this->show('construire/value2', ['monImage' => $monImage]);
		}

		public function countImg()
		{
			$request = $_REQUEST;
			$idcat = $request['idcat'];
			$tbproductManager = new \Manager\tbproductManager();
			$nbLines = $tbproductManager->CountLinesByCat($idcat);
			//debug($nbLines); //DEBUG
			$this->show('construire/count', ['nblines' => $nbLines]);
		}

		public function desc()
		{
			$request=$_REQUEST;
			$idimg = $request['idimage'];
			$tbproductManager = new \Manager\TbproductManager();
			$mesInfos = $tbproductManager->getByID($idimg);
			$this->show('construire/description', ['mesinfos' => $mesInfos]);
		}

		public function select()
		{
			$request=$_REQUEST;
			$idimg = $request['idimage'];
			$tbproductManager = new \Manager\TbproductManager();
			$mesImages = $tbproductManager->getByID($idimg);
			$this->show('construire/selection', ['mesImages' => $mesImages]);
		}

		public function getStock()
		{
			$request = $_REQUEST;
			$idPartToCheck = $request['myelement'];
			$tbproductManager = new \Manager\TbproductManager();
			$inStock = $tbproductManager->getStockForThisPart($idPartToCheck);
			$this->show('configuration/rtstock', ['inStock' => $inStock]);
		}

		public function saveComposition()
		{
			$request = $_REQUEST;
			$idUser = $request['AssOwner'];
			$z1 = $request['AssAccHead'];
			$z2 = $request['AssHead'];
			$z3 = $request['AssAccChest'];
			$z4 = $request['AssChest'];
			$z5 = $request['AssAccLegs'];
			$z6 = $request['AssLegs'];
			$tbfigurecreatedManager = new \Manager\tbfigurecreatedManager();
			$compoSaved = $tbfigurecreatedManager->saveCompositionIntotbFigureCreated($idUser, $z1, $z2, $z3, $z4, $z5, $z6);
			$this->show('configuration/save', ['composaved' => $compoSaved]);
		}
	}