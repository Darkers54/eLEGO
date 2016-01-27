<?php
	
	namespace Manager;

	class TbproductsManager extends \W\Manager\Manager
	{
	
		public function getParts($limit='', $idcat)
		{
	
			$sql = 'SELECT * FROM ' . $this->table . ' INNER JOIN tbprodcat ON '. $this->table .'.prodCat_ID = tbprodcat.ID_pdct WHERE prodCat_ID = :idcat ORDER BY prodCatOrder ASC LIMIT :limit;';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':idcat', $idcat, \PDO::PARAM_INT);
			$sth->bindValue(':limit', $limit, \PDO::PARAM_INT);
			$sth->execute();

<<<<<<< HEAD
			echo json_encode($sth->fetchAll());
=======
			return $sth->fetchAll();
		}

		public function getByID($currentid)
		{
			$sql = 'SELECT * FROM ' . $this->table . ' INNER JOIN tbprodcat ON '. $this->table .'.prodCat_ID = tbprodcat.ID_pdct WHERE ID_prod = :idimg ORDER BY prodCatOrder ASC;';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':idimg', $currentid, \PDO::PARAM_INT);
			$sth->execute();

			return $sth->fetchAll();
		}

		public function getImg($cat, $order)
		{
			$sql = 'SELECT * FROM '. $this->table . ' INNER JOIN tbprodcat ON ' . $this->table .'.prodCat_ID = tbprodcat.ID_pdct WHERE prodCat_ID = :idcat AND prodCatOrder = :order;';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':idcat', $cat, \PDO::PARAM_INT);
			$sth->bindValue(':order', $order, \PDO::PARAM_INT);
			$sth->execute();

			return $sth->fetchAll();
		}

		public function CountLinesByCat($cat)
		{
			$sql = 'SELECT COUNT(ID_prod) FROM tbproducts WHERE prodCat_ID = :idcat;';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':idcat', $cat, \PDO::PARAM_INT);
			$sth->execute();

			return $sth->fetch();
		}

		public function getStockForThisPart($id)
		{
			$sql = 'SELECT '. $this->table .'.prodNbStock FROM '. $this->table . ' WHERE ID_prod = :id;';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':id', $id, \PDO::PARAM_INT);
			$sth->execute();

			return $sth->fetchAll();
>>>>>>> origin/eLEGO_DEV_AO
		}

		
	}