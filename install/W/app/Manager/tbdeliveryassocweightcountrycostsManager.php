<?php  

	namespace Manager;

	class tbdeliveryassocweightcountrycostsManager extends \W\Manager\Manager
	{
		public function getDeliveryCost($region, $weight)
		{
			$sql = 'SELECT dawcCosts FROM '. $this->table .' WHERE dvwg_ID = :weight AND cygp_ID = :region;';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':weight', $weight, \PDO::PARAM_INT);
			$sth->bindValue(':region', $region, \PDO::PARAM_INT);
			$sth->execute();

			return $sth->fetchAll();
		}
	}

?>