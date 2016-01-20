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

			return $sth->fetchAll();
		}

		
	}