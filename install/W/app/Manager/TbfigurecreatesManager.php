<?php
	
	namespace Manager;

	class TbfigurecreatesManager extends \W\Manager\Manager
	{
		public function getCollectionForList($collectionListId)
		{
			if(!is_numeric($collectionListId)){
				return false;
			}

			$sql = 'SELECT * FROM ' . $this->table . ' WHERE ID_fig = :id ORDER BY date DESC';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':id', $collectionListId);
			$sth->execute();

			return $sth->fetchAll();
		}
	}

?>