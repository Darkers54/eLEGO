<?php  
	
	namespace Manager;

	class DataManager extends \W\Manager\Manager
	{
		public function getAllProductsFromWooCommerce()
		{
			$strConnect = 'mysql:host=localhost;dbname=ego;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT * FROM ego_posts INNER JOIN ego_term_relationships ON ego_term_relationships.object_id = ego_posts.ID INNER JOIN ego_term_taxonomy ON ego_term_relationships.term_taxonomy_id = ego_term_taxonomy.term_taxonomy_id WHERE post_type = "product" AND taxonomy = "product_cat" AND post_status != "trash";';
			$allProducts = $pdo->query($sql);
			$rowProducts = $allProducts->fetchAll(\PDO::FETCH_ASSOC);
			return $rowProducts;
		}

		public function CheckIfExist($ID)
		{
			$sql = 'SELECT * FROM tbproduct WHERE ID = :id;';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':id', $ID, \PDO::PARAM_INT);
			$sth->execute();
			return $sth->fetchAll();
		}

		public function getIDpdct($value)
		{
			$sql = 'SELECT ID_pdct FROM tbprodcat WHERE pdctName = :value;';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':value', $value);
			$sth->execute();
			return $sth->fetch();
		}

		public function getProductOrderByCatID($id)
		{
			$sql = 'SELECT prodcatorder FROM tbproduct WHERE prodcat_ID = :id ORDER BY prodcatorder DESC LIMIT 1';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':id', $id, \PDO::PARAM_INT);
			$sth->execute();
			return $sth->fetch();
		}

		public function getInfosFromPostMeta($id, $expression)
		{
			$strConnect = 'mysql:host=localhost;dbname=ego;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);			
			$sql = 'SELECT meta_value FROM ego_postmeta WHERE post_id = :id AND meta_key = :expression;';
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':id', $id, \PDO::PARAM_INT);
			$stmt->bindValue(':expression', $expression);
			$stmt->execute();
			return $stmt->fetch();
		}

		public function insertIntotbProduct($ID, $post_author, $post_date, $post_date_gmt, $post_content, $post_title, $post_excerpt, $post_status, $comment_status, $ping_status, $post_password, $post_name, $to_ping, $pinged, $post_modified, $post_modified_gmt, $post_content_filtered, $post_parent, $guid, $menu_order, $post_type, $post_mime_type, $comment_count, $object_id, $term_taxonomy_id, $term_order, $term_id, $taxonomy, $description, $parent, $count, $prodnbrref, $prodnameref, $proddesc, $prodcatID, $prodcatorder, $prodpriceunit, $prodnbstock, $produrl)
		{
			$sql = 'INSERT INTO tbproduct (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count, object_id, term_taxonomy_id, term_order, term_id, taxonomy, description, parent, count, prodNbrRef, prodNameRef, prodDesc, prodcat_ID, prodcatorder, prodPriceUnit, prodNbStock, prodUrl) '. 
			'VALUES (:ID, :post_author, :post_date, :post_date_gmt, :post_content, :post_title, :post_excerpt, :post_status, :comment_status, :ping_status, :post_password, :post_name, :to_ping, :pinged, :post_modified, :post_modified_gmt, :post_content_filtered, :post_parent, :guid, :menu_order, :post_type, :post_mime_type, :comment_count, :object_id, :term_taxonomy_id, :term_order, :term_id, :taxonomy, :description, :parent, :count, :prodnbrref, :prodnameref, :proddesc, :prodcatID, :prodcatorder, :prodpriceunit, :prodnbstock, :produrl);';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':ID',$ID, \PDO::PARAM_INT); //BIGINT(20)
			$sth->bindValue(':post_author',$post_author, \PDO::PARAM_INT); //BIGINT(20)
			$sth->bindValue(':post_date',$post_date); //DATETIME
			$sth->bindValue(':post_date_gmt',$post_date_gmt); //DATETIME
			$sth->bindValue(':post_content',$post_content); //LONGTEXT
			$sth->bindValue(':post_title',$post_title); //TEXT
			$sth->bindValue(':post_excerpt',$post_excerpt); //TEXT
			$sth->bindValue(':post_status',$post_status); //VARCHAR(20)
			$sth->bindValue(':comment_status',$comment_status); //VARCHAR(20)
			$sth->bindValue(':ping_status',$ping_status); //VARCHAR(20)
			$sth->bindValue(':post_password',$post_password); //VARCHAR(20)
			$sth->bindValue(':post_name',$post_name); //VARCHAR(200)
			$sth->bindValue(':to_ping',$to_ping); //TEXT
			$sth->bindValue(':pinged',$pinged); //TEXT
			$sth->bindValue(':post_modified',$post_modified); //DATETIME
			$sth->bindValue(':post_modified_gmt',$post_modified_gmt); //DATETIME
			$sth->bindValue(':post_content_filtered',$post_content_filtered); //LONGTEXT
			$sth->bindValue(':post_parent',$post_parent, \PDO::PARAM_INT); //BIGINT(20)
			$sth->bindValue(':guid',$guid); //VARCHAR(255)
			$sth->bindValue(':menu_order',$menu_order, \PDO::PARAM_INT); //INT(11)
			$sth->bindValue(':post_type',$post_type); //VARCHAR(20)
			$sth->bindValue(':post_mime_type',$post_mime_type); //VARCHAR(100)
			$sth->bindValue(':comment_count',$comment_count, \PDO::PARAM_INT); //BIGINT(20)
			$sth->bindValue(':object_id',$object_id, \PDO::PARAM_INT); //BIGINT(20)
			$sth->bindValue(':term_taxonomy_id',$term_taxonomy_id, \PDO::PARAM_INT); //BIGINT(20)
			$sth->bindValue(':term_order',$term_order, \PDO::PARAM_INT); //INT(11)
			$sth->bindValue(':term_id',$term_id, \PDO::PARAM_INT); //BIGINT(20)
			$sth->bindValue(':taxonomy',$taxonomy); //VARCHAR(32)
			$sth->bindValue(':description',$description); //LONGTEXT
			$sth->bindValue(':parent',$parent, \PDO::PARAM_INT); //BIGINT(20)
			$sth->bindValue(':count',$count, \PDO::PARAM_INT); //BIGINT(20)
			$sth->bindValue(':prodnbrref',$prodnbrref, \PDO::PARAM_INT); //INT(11)
			$sth->bindValue(':prodnameref',$prodnameref); //VARCHAR(255)
			$sth->bindValue(':proddesc',$proddesc); //VARCHAR(255)
			$sth->bindValue(':prodcatID',$prodcatID, \PDO::PARAM_INT); //INT(11)
			$sth->bindValue(':prodcatorder',$prodcatorder, \PDO::PARAM_INT); //INT(11)
			$sth->bindValue(':prodpriceunit',$prodpriceunit); //FLOAT
			$sth->bindValue(':prodnbstock',$prodnbstock, \PDO::PARAM_INT); //INT(11)
			$sth->bindValue(':produrl',$produrl); //VARCHAR(255)
			$sth->execute();
			return true;
		}
	}

?>