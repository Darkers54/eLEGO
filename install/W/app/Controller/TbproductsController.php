<?php

	namespace Controller;

	class TbproductsController extends \W\Controller\Controller
	{
<<<<<<< HEAD
		/*
		public function test()
		{
			$orderBy = 'prodCat';
			$orderDir = "DESC";
			$tbproductsManager = new \Manager\TbproductsManager();
			$products = $tbproductsManager->findAll($orderBy, $orderDir);
			$this->show('test/test', ['products' => $products]);
			
		}
		*/
=======
>>>>>>> origin/eLEGO_DEV_AO
		public function afficheLego()
		{
			$zone1 = 3;
			$zone2 = 1;
			$tbproductsManager = new \Manager\TbproductsManager();
<<<<<<< HEAD
			/*$accHead = $tbproductsManager->getAllAcchead();*/
=======
>>>>>>> origin/eLEGO_DEV_AO
			$z1accHead = $tbproductsManager->getParts($zone1, 1);
			$z2accHead = $tbproductsManager->getParts($zone2, 1);
			$z1head = $tbproductsManager->getParts($zone1, 2);
			$z2head = $tbproductsManager->getParts($zone2, 2);
			$z1accChest = $tbproductsManager->getParts($zone1, 3);
			$z2accChest = $tbproductsManager->getParts($zone2, 3);
			$z1chest = $tbproductsManager->getParts($zone1, 4);
			$z2chest = $tbproductsManager->getParts($zone2, 4);
			$z1acclegs = $tbproductsManager->getParts($zone1, 5);
			$z2acclegs = $tbproductsManager->getParts($zone2, 5);
			$z1legs = $tbproductsManager->getParts($zone1, 6);
			$z2legs = $tbproductsManager->getParts($zone2, 6);
			
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

<<<<<<< HEAD
		public function idLego($id)
		{
			$request=$_REQUEST;
			$idimg = $request['id_image'];
			$tbproductsManager = new \Manager\TbproductsManager();
			$mesInfos = $tbproductsManager->find($idimg);
			return $mesInfos;
=======
		public function afficheConfiguration()
		{
			$request = $_REQUEST;
			$element1 = $request['element1'];
			$element2 = $request['element2'];
			$element3 = $request['element3'];
			$element4 = $request['element4'];
			$element5 = $request['element5'];
			$element6 = $request['element6'];
			$tbproductsManager = new \Manager\tbproductsManager();
			$ligne1 = $tbproductsManager->getByID($element1);
			$ligne2 = $tbproductsManager->getByID($element2);
			$ligne3 = $tbproductsManager->getByID($element3);
			$ligne4 = $tbproductsManager->getByID($element4);
			$ligne5 = $tbproductsManager->getByID($element5);
			$ligne6 = $tbproductsManager->getByID($element6);
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
			$tbproductsManager = new \Manager\TbproductsManager();
			$mesInfos = $tbproductsManager->getByID($idimg);
			$this->show('construire/value1', ['mesinfos' => $mesInfos]);
		}

		public function urlImg()
		{
			$request = $_REQUEST;
			$idcat = $request['idcat'];
			$newprodCatOrder = $request['newprodCatOrder'];
			$tbproductsManager = new \Manager\TbproductsManager();
			$monImage = $tbproductsManager->getImg($idcat, $newprodCatOrder);
			$this->show('construire/value2', ['monImage' => $monImage]);
		}

		public function countImg()
		{
			$request = $_REQUEST;
			$idcat = $request['idcat'];
			$tbproductsManager = new \Manager\tbproductsManager();
			$nbLines = $tbproductsManager->CountLinesByCat($idcat);
			$this->show('construire/count', ['nblines' => $nbLines]);
		}

		public function desc()
		{
			$request=$_REQUEST;
			$idimg = $request['idimage'];
			$tbproductsManager = new \Manager\TbproductsManager();
			$mesInfos = $tbproductsManager->getByID($idimg);
			$this->show('construire/description', ['mesinfos' => $mesInfos]);
		}

		public function select()
		{
			$request=$_REQUEST;
			$idimg = $request['idimage'];
			$tbproductsManager = new \Manager\TbproductsManager();
			$mesImages = $tbproductsManager->getByID($idimg);
			$this->show('construire/selection', ['mesImages' => $mesImages]);
		}

		public function getStock()
		{
			$request = $_REQUEST;
			$idPartToCheck = $request['myelement'];
			$tbproductsManager = new \Manager\TbproductsManager();
			$inStock = $tbproductsManager->getStockForThisPart($idPartToCheck);
			$this->show('configuration/rtstock', ['inStock' => $inStock]);
>>>>>>> origin/eLEGO_DEV_AO
		}
	}