<?php  

	namespace Controller;

	class tbdeliveryassocweightcountrycostsController extends \W\Controller\Controller
	{
		public function getCosts()
		{
			$request = $_REQUEST;
			$idDeliveryWeight = $request['dvwg_ID'];
			$idCountryGroup = $request['cygp_ID'];
			$tbdeliveryassocweightcountrycostsManager = new \Manager\tbdeliveryassocweightcountrycostsManager();
			$costs = $tbdeliveryassocweightcountrycostsManager->getDeliveryCost($idCountryGroup, $idDeliveryWeight);
			$this->show('configuration/livraison', ['costs' => $costs]);
		}
	}

?>