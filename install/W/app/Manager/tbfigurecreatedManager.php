<?php  

	namespace Manager;

	class tbfigurecreatedManager extends \W\Manager\Manager 
	{

		public function __construct()
		{
			parent::__construct();
			$this->setTable('tbfigurecreated');
		}

		public function saveCompositionIntotbFigureCreated($id, $z1, $z2, $z3, $z4, $z5, $z6)
		{
			$strConnect = 'mysql:host=localhost;dbname=lego_test;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = 'INSERT INTO '. $this->table .' (usr_ID, figComponent1, figComponent2, figComponent3, figComponent4, figComponent5, figComponent6) '. 
			'VALUES (:id, :cp1, :cp2, :cp3, :cp4, :cp5, :cp6);';
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':id',$id, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':cp1',$z1, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':cp2',$z2, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':cp3',$z3, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':cp4',$z4, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':cp5',$z5, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':cp6',$z6, \PDO::PARAM_INT); //INT(11)
			$stmt->execute();
			return true;
		}
	}

?>