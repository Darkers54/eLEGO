<?php 

	namespace Manager;

	class TbclientsManager extends \W\Manager\Manager
	{
		public function insertContact($fname, $lname, $mail, $firm, $mobject, $message)
		{
			if (! empty($mail)){
				$sql = 'UPDATE'  . $this->table . ' (cltMessageObject, cltMessage) WHERE (:cltemail = $mail)';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':cltEmail', $mail);
			$sth->bindValue(':cltMessageObject', $mobject);
			$sth->bindValue(':cltMessage', $message);
			$sth->execute();	
			}
			else{
			$sql = 'INSERT INTO' . $this->table . '(cltFirstname, cltLastname, cltEmail, cltSocialreason, cltMessageObject, cltMessage) 
			VALUES(:cltFirstname, :cltLastname, :cltEmail, :cltSocialreason, :cltMessageObject, :cltMessage)';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':cltFirstname', $fname);
			$sth->bindValue(':cltLastname', $lname);
			$sth->bindValue(':cltEmail', $mail);
			$sth->bindValue(':cltSocialreason', $firm);
			$sth->bindValue(':cltMessageObject', $mobject);
			$sth->bindValue(':cltMessage', $message);
			$sth->execute();

			return $this->dbh->lastInsertId();
			}
		}
	}





 