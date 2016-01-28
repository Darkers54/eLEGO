<?php 

	namespace Controller;

	class tbDeliveryCountryController extends \W\Controller\Controller
	{
		public function getAllCountries()
		{
			$request = $_REQUEST;
			$tableName = $request['countryTable'];
			$tbDeliveryCountryManager = new \Manager\tbDeliveryCountryManager();
			$countries = $tbDeliveryCountryManager->getAllCountries();
			$this->show('configuration/pays', ['countries' => $countries]);
		}
	}

 ?>