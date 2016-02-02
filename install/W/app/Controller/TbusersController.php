<?php 

namespace Controller;


class TbusersController extends \W\Controller\Controller
{

	public function inscription()
		{
			$this->show('default/inscription');

		}


		
		/**
		 * Création d'un utilisateur
		 */
		public function createInscription()
		{
			if(isset($_POST['insname']) && isset($_POST['insfirstname']) && isset($_POST['insmail']) && isset($_POST['inspassword']) 
				&& !empty($_POST['insname']) && !empty($_POST['insfirstname']) && !empty($_POST['insmail']) && !empty($_POST['inspassword']))
			{
		
				$fname1 = htmlspecialchars(trim($_REQUEST['insfirstname']));
				$fname = filter_var($fname1, FILTER_SANITIZE_STRING);

				$lname1 =  htmlspecialchars(trim($_REQUEST['insname']));                                                     
				$lname = filter_var($lname1, FILTER_SANITIZE_STRING);


				$mail1 = $_REQUEST['insmail'];
				$mail = filter_var($mail1, FILTER_VALIDATE_EMAIL);

				$pwd2 = strip_tags(trim($_REQUEST['inspassword']));
				$pwd1 = filter_var($pwd2, FILTER_SANITIZE_STRING);
				$pwd = password_hash($pwd1, PASSWORD_DEFAULT);
				// Si on a toutes les infos
			
				// Si aucun champ vide
				if(!empty($fname) ) 
				{
					$tbusersManager = new \Manager\TbusersManager();
					$exists = $tbusersManager->insertContact($fname, $lname, $mail);
					if($exists == true) 
					{
						$return = '<p>Votre inscription s\'est bien passé. Faut créer un lien de confirmation plus tard.</p>
							<br><p>Ceci est un email automatique, merci de ne pas y répondre.</p>';
							$this->inscriptionEmail($mail,$fname,$lname,$return);
					}
					//$connect ='<a href="http://localhost/eLEGO/mon-compte/"></a>';
					$this->redirect('http://localhost/eLEGO/mon-compte/');//modifier pour page 
				}
			}
		}
		

		public function inscriptionEmail($address,$fname,$lname,$return)
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

			$mail->Subject = "Votre inscription a eLEGO" ;
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

