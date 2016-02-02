<?php
	
	namespace Manager;

	class TbproductManager extends \W\Manager\Manager
	{
		public function __construct()
		{
			parent::__construct();
			$this->setTable('tbproduct');
		}

		public function getParts($limit='', $idcat)
		{
			$strConnect = 'mysql:host=localhost;dbname=lego_test;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT * FROM ' . $this->table . ' INNER JOIN tbprodcat ON '. $this->table .'.prodCat_ID = tbprodcat.ID_pdct WHERE prodCat_ID = :idcat ORDER BY prodcatorder ASC LIMIT :limit;';
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':idcat', $idcat, \PDO::PARAM_INT);
			$stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
			$stmt->execute();

			return $stmt->fetchAll();
		}

		public function getByID($currentid)
		{
			$strConnect = 'mysql:host=localhost;dbname=lego_test;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT * FROM ' . $this->table . ' INNER JOIN tbprodcat ON '. $this->table .'.prodCat_ID = tbprodcat.ID_pdct WHERE ID_prod = :idimg ORDER BY prodcatorder ASC;';
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':idimg', $currentid, \PDO::PARAM_INT);
			$stmt->execute();

			return $stmt->fetchAll();
		}

		public function getImg($cat, $order)
		{
			$strConnect = 'mysql:host=localhost;dbname=lego_test;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);			
			$sql = 'SELECT * FROM '. $this->table . ' INNER JOIN tbprodcat ON ' . $this->table .'.prodCat_ID = tbprodcat.ID_pdct WHERE prodcat_ID = :idcat AND prodcatorder = :order;';
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':idcat', $cat, \PDO::PARAM_INT);
			$stmt->bindValue(':order', $order, \PDO::PARAM_INT);
			$stmt->execute();

			return $stmt->fetchAll();
		}

		public function CountLinesByCat($cat)
		{
			$strConnect = 'mysql:host=localhost;dbname=lego_test;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);			
			$sql = 'SELECT COUNT(ID_prod) AS cline FROM ' .$this->table.' WHERE prodcat_ID = :idcat;';
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':idcat', $cat, \PDO::PARAM_INT);
			$stmt->execute();

			return $stmt->fetchAll();
		}

		public function getStockForThisPart($id)
		{
			$strConnect = 'mysql:host=localhost;dbname=lego_test;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);			
			$sql = 'SELECT '. $this->table .'.prodNbStock FROM '. $this->table . ' WHERE ID_prod = :id;';
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':id', $id, \PDO::PARAM_INT);
			$stmt->execute();

			return $stmt->fetchAll();
		}

		
	}