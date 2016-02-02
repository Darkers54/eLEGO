<?php  

	namespace Manager;

	class tbDeliveryCountryManager extends \W\Manager\Manager
	{
		public function getAllCountries()
		{
			$sql = 'SELECT * FROM tbDeliveryCountry;';
			$sth = $this->dbh->prepare($sql);
			$sth->execute();

			return $sth->fetchAll();
		}

	}
?>