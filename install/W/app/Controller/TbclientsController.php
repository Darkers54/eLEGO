<?php 

namespace Controller;


class TbclientsController extends \W\Controller\Controller
{

	public function contact()
		{
			$this->show('default/contact');

		}

		/**
		 * Création d'un contact
		 */
		public function createContact()
		{
			if(isset($_POST['ctctname']) && isset($_POST['ctctfirstname']) && isset($_POST['ctctmail']) 
				&& isset($_POST['ctctfirm']) && isset($_POST['ctctobject']) && isset($_POST['txtctctmessage'])
				&& !empty($_POST['ctctname']) && !empty($_POST['ctctfirstname']) 
				&& !empty($_POST['ctctmail']) && !empty($_POST['ctctobject']) && !empty($_POST['txtctctmessage']))
			{
		
				$fname1 = $_REQUEST['ctctfirstname'];
				$fname = trim($fname1);
				$lname1 = $_REQUEST['ctctname'];
				$lname = trim($lname1);
				$mail1 = $_REQUEST['ctctmail'];
				$mail = (filter_var($mail1, FILTER_VALIDATE_EMAIL));
				$firm1 = $_REQUEST['ctctfirm'];
				$firm = trim($firm1);
				$mobject1 = $_REQUEST['ctctobject'];
				$mobject = trim($mobject1);
				$message1 = $_REQUEST['txtctctmessage'];
				$message = trim($message1);
				// Si on a toutes les infos
			
				// Si aucun champ vide
				if(!empty($fname) ) 
				{
					$tbclientsManager = new \Manager\TbclientsManager();
					$exists = $tbclientsManager->insertContact($fname, $lname, $mail, $firm, $mobject, $message);
					if($exists == true) 
					{
						//mail au client 
						$return = '<p>nous avons bien reçu votre nouveau message. Votre nouvelle demande sera traitée dans les plus brefs délais.</p>
							<br><p>Ceci est un email automatique, merci de ne pas y répondre.</p>';
							$this->contactEmail($mail,$fname,$lname,$mobject,$return);
						//mail au SAV
						$return1 = '<p>Notre client(e)'.' '.$fname.'.'.$lname.', dont l\'email est '.$mail.' vient d\'effectuer une nouvelle demande: '
									.$subject.'</p><br><p>'.$message.'</p><br><p>Pourriez vous traiter sa nouvelle demande ?</p><br><p> Merci d\'avance. Le SAV d\'eLEGO.</p>';
							$this->savContactEmail($mail,$fname,$lname,$mobject,$message,$return1);	
					}
					elseif($exists == false) 
					{
						//mail au client
						$return = '<p>nous avons bien reçu votre message. Votre demande sera traitée dans les plus brefs délais.</p>
							<br><p>Ceci est un email automatique, merci de ne pas y répondre.</p>';
							$this->contactEmail($mail,$fname,$lname,$mobject,$return);
						//mail au SAV
						$return1 = '<p>Notre client(e)'.' '.$fname.'.'.$lname.', dont l\'email est '.$mail.' vient d\'effectuer une demande: '
									.$subject.'</p><br><p>'.$message.'</p><br><p>Pourriez vous traiter sa demande ?</p><br><p> Merci d\'avance. Le SAV d\'eLEGO.</p>';
							$this->savContactEmail($mail,$fname,$lname,$mobject,$message,$return1);	
					}
				}
		
			$this->redirectToRoute('construire_construire');
			}
		
		}
		//confirmation client
		public function contactEmail($address,$fname,$lname,$subject,$return)
		{
			$mail= new \PHPMailer();

			$mail->isSMTP();                                      
			$mail->Host = 'smtp.gmail.com';  						
			$mail->SMTPAuth = true;                               
			$mail->Username = 'elego2016@gmail.com';                 
			$mail->Password = '20elego16';                           
			$mail->SMTPSecure = 'tls';                            
			$mail->Port = 587;                                    

			$mail->setFrom('elego2016@gmail.com', 'eLEGO');
			$mail->addAddress($address, $fname.'.'.$lname);
			$mail->isHTML(true);  //configuration html    
			$mail->Subject = $subject ;
			$mail->Body    = $return ;

			if(!$mail->send())
			{
    			echo 'Le mail n\'a pas pu être envoyé.';
    			echo 'Mailer Error: ' . $mail->ErrorInfo;
			} 
			else
			{
    			echo 'Le message vient d\'être envoyé';
			}
		}
		//contact sav
		public function savContactEmail($address,$fname,$lname,$subject,$message,$return1)
		{
			$mail= new \PHPMailer();

			$mail->isSMTP();                                      
			$mail->Host = 'smtp.gmail.com';  						
			$mail->SMTPAuth = true;                               
			$mail->Username = 'elego2016@gmail.com';                 
			$mail->Password = '20elego16';                           
			$mail->SMTPSecure = 'tls';                            
			$mail->Port = 587;                                    

			$mail->setFrom('elego2016@gmail.com', 'eLEGO');
			$mail->addAddress('savelego2016@gmail.com');
			$mail->isHTML(true);    //configuration html  
			$mail->Subject = 'Nouveau ticket pour'.' '. $fname.'.'.$lname ;
			$mail->Body    = $return1 ;
			

			if(!$mail->send())
			{
    			echo 'Le mail n\'a pas pu être envoyé.';
    			echo 'Mailer Error: ' . $mail->ErrorInfo;
			} 
			else
			{
    			echo 'Le message vient d\'être envoyé';
			}
		}
}

