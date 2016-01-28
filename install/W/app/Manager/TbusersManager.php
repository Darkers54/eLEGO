<?php 

	namespace Manager;

	class TbusersManager extends \W\Manager\Manager
	{
		public function insertContact($fname, $lname, $mail, $pwd)
		{
			$sql = 'SELECT ID_usr FROM '. $this->table. ' WHERE usrEmail = :usrEmail';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':usrEmail', $mail);
			$sth->execute();
			$result = $sth->fetchAll();

			if (count($result) != 0)
			{

				echo "Cet email est déjà utilisé, veuillez en renseigner un autre.";
			}
			else
			{

				$sql = 'INSERT INTO ' . $this->table . '(usrFirstname, usrLastname, usrEmail, usrPassword) 
				VALUES(:usrFirstname, :usrLastname, :usrEmail, :usrPassword)';
				$sth = $this->dbh->prepare($sql);
				$sth->bindValue(':usrFirstname', $fname);
				$sth->bindValue(':usrLastname', $lname);
				$sth->bindValue(':usrEmail', $mail);
				$sth->bindValue(':usrPassword', $pwd);
				$sth->execute();

				
				//booléen pour appeller phpmailer dans le controlleur tbusers
				return true;				
			}
		}
	}





 