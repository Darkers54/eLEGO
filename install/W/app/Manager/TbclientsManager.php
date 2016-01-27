<?php 

	namespace Manager;

	class TbclientsManager extends \W\Manager\Manager
	{
		public function insertContact($fname, $lname, $mail, $firm, $mobject, $message)
		{
			$sql = 'SELECT ID_clt FROM '. $this->table. ' WHERE cltEmail = :cltEmail';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':cltEmail', $mail);
			$sth->execute();
			$result = $sth->fetchAll();

			if (count($result) != 0){
				$sql = 'UPDATE '  . $this->table . ' SET cltMessageObject = :cltMessageObject, cltMessage = :cltMessage WHERE cltEmail = :cltEmail';
				$sth = $this->dbh->prepare($sql);
				$sth->bindValue(':cltEmail', $mail);
				$sth->bindValue(':cltMessageObject', $mobject);
				$sth->bindValue(':cltMessage', $message);
				$sth->execute();

				//booléen pour appeller phpmailer dans le controlleur tbclients
				return true;




			}
			else{
				$sql = 'INSERT INTO ' . $this->table . '(cltFirstname, cltLastname, cltEmail, cltSocialreason, cltMessageObject, cltMessage) 
				VALUES(:cltFirstname, :cltLastname, :cltEmail, :cltSocialreason, :cltMessageObject, :cltMessage)';
				$sth = $this->dbh->prepare($sql);
				$sth->bindValue(':cltFirstname', $fname);
				$sth->bindValue(':cltLastname', $lname);
				$sth->bindValue(':cltEmail', $mail);
				$sth->bindValue(':cltSocialreason', $firm);
				$sth->bindValue(':cltMessageObject', $mobject);
				$sth->bindValue(':cltMessage', $message);
				$sth->execute();

				
				//booléen pour appeller phpmailer dans le controlleur tbclients
				return false;				
			}
		}
	}





 