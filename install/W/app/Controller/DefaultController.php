<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function presentation()
	{
		$this->show('default/presentation');
	}

	public function contact()
	{
		$this->show('default/contact');

	}

	/**
	 * Création d'un contact
	 */
	/*public function createcontact()
	{

		if(isset($_POST['ctctname']) && isset($_POST['ctctfirstname']) && isset($_POST['ctctmail']) 
			&& isset($_POST['ctctfirm']) && isset($_POST['ctctobject']) && isset($_POST['txtctctmessage'])
			&& !empty($_POST['ctctname']) && !empty($_POST['ctctfirstname']) 
			&& !empty($_POST['ctctmail']) && !empty($_POST['ctctobject']) && !empty($_POST['txtctctmessage'])){
		
		$fname = $_REQUEST['ctctfirstname'];
		$lname = $_REQUEST['ctctname'];
		$mail = $_REQUEST['ctctmail'];
		$firm = $_REQUEST['ctctfirm'];
		$mobject = $_REQUEST['ctctobject'];
		$message = $_REQUEST['txtctctmessage'];
			// Si on a toutes les infos
			
			$tbclientsManager = new \Manager\TbclientsManager();
			$clients= $tbclientsManager->insertContact($fname, $lname, $mail, $firm, $mobject, $message );
		
		}
		$this->redirectToRoute('construire_construire');
	}*/



	public function mentions()
	{
		$this->show('default/mentions');
	}

	public function help()
	{
		$this->show('default/help');
	}


}