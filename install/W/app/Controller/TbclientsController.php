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
					if($exists == true) {
						$return = '<p>nous avons bien reçu votre nouveau message. Votre nouvelle demande sera traitée dans les plus brefs délais.</p>
							<br><p>Ceci est un email automatique, merci de ne pas y répondre.</p>';
							$this->contactEmail($mail,$fname,$lname,$mobject,$return);
					}
					elseif($exists == false) {
						$return = '<p>nous avons bien reçu votre message. Votre demande sera traitée dans les plus brefs délais.</p>
							<br><p>Ceci est un email automatique, merci de ne pas y répondre.</p>';
							$this->contactEmail($mail,$fname,$lname,$mobject,$return);
					}
				}
		
			$this->redirectToRoute('construire_construire');
			}
		
		}
		public function CleanUpBeforeSend($var)
		{
			$trimvar = trim($var);
			$striptagsvar = strip_tags($trimvar);
			$htmlspecharvar = htmlspecialchars($striptagsvar);
			$Filteredvar = filter_var($htmlspecharvar, FILTER_SANITIZE_STRING);
			return $Filteredvar;
		}

		public function contactEmail($address,$fname,$lname,$subject,$return)
		{
			$mail= new \PHPMailer();

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'elego2016@gmail.com';                 // SMTP username
			$mail->Password = '20elego16';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom('elego2016@gmail.com', 'eLEGO');
			$mail->addAddress($address, $fname.'.'.$lname);     // Add a recipient
			//$mail->addAddress('ellen@example.com');               // Name is optional
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $subject ;
			$mail->Body    = $return ;
			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

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

