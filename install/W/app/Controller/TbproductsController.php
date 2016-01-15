<?php

	namespace Controller;

	class TbproductsController extends \W\Controller\Controller
	{
		public function test()
		{
			$orderBy = 'prodCat';
			$orderDir = "DESC";
			$tbproductsManager = new \Manager\TbproductsManager();
			$products = $tbproductsManager->findAll($orderBy, $orderDir);
			$this->show('test/test', ['products' => $products]);
			
		}
	}