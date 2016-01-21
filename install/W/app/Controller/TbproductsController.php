<?php

	namespace Controller;

	class TbproductsController extends \W\Controller\Controller
	{
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
		public function afficheLego()
		{
			$zone1 = 3;
			$zone2 = 1;
			$tbproductsManager = new \Manager\TbproductsManager();
			/*$accHead = $tbproductsManager->getAllAcchead();*/
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

		public function idLego($id)
		{
			$request=$_REQUEST;
			$idimg = $request['id_image'];
			$tbproductsManager = new \Manager\TbproductsManager();
			$mesInfos = $tbproductsManager->find($idimg);
			return $mesInfos;
		}
	}