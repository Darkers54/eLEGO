<?php  
	
	namespace Manager;

	class DataManager extends \W\Manager\Manager
	{
		public function getAllProductsFromWooCommerce()
		{
			$sql = 'SELECT * FROM ego_posts INNER JOIN ego_term_relationships ON ego_term_relationships.object_id = ego_posts.ID INNER JOIN ego_term_taxonomy ON ego_term_relationships.term_taxonomy_id = ego_term_taxonomy.term_taxonomy_id WHERE post_type = "product" AND taxonomy = "product_cat" AND post_status != "trash";';
			$allProducts = $this->dbh->query($sql);
			$rowProducts = $allProducts->fetchAll(\PDO::FETCH_ASSOC);
			return $rowProducts;
		}

		public function CheckIfExist($ID)
		{
			$strConnect = 'mysql:host=localhost;dbname=lego_test;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT * FROM tbproduct WHERE ID = :id;';
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':id', $ID, \PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function getIDpdct($value)
		{
			$strConnect = 'mysql:host=localhost;dbname=lego_test;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT ID_pdct FROM tbprodcat WHERE pdctName = :value;';
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':value', $value);
			$stmt->execute();
			return $stmt->fetch();
		}

		public function getProductOrderByCatID($id)
		{
			$strConnect = 'mysql:host=localhost;dbname=lego_test;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT prodcatorder FROM tbproduct WHERE prodcat_ID = :id ORDER BY prodcatorder DESC LIMIT 1';
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':id', $id, \PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch();
		}

		public function getInfosFromPostMeta($id, $expression)
		{

			$sql = 'SELECT meta_value FROM ego_postmeta WHERE post_id = :id AND meta_key = :expression;';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':id', $id, \PDO::PARAM_INT);
			$sth->bindValue(':expression', $expression);
			$sth->execute();
			return $sth->fetch();
		}

		public function insertIntotbProduct($ID, $post_author, $post_date, $post_date_gmt, $post_content, $post_title, $post_excerpt, $post_status, $comment_status, $ping_status, $post_password, $post_name, $to_ping, $pinged, $post_modified, $post_modified_gmt, $post_content_filtered, $post_parent, $guid, $menu_order, $post_type, $post_mime_type, $comment_count, $object_id, $term_taxonomy_id, $term_order, $term_id, $taxonomy, $description, $parent, $count, $prodnbrref, $prodnameref, $proddesc, $prodcatID, $prodcatorder, $prodpriceunit, $prodnbstock, $produrl)
		{
			$strConnect = 'mysql:host=localhost;dbname=lego_test;charset=utf8';
			$pdo = new \PDO($strConnect, 'eadmlego16', '20CyLanMelLex');
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$sql = 'INSERT INTO tbproduct (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count, object_id, term_taxonomy_id, term_order, term_id, taxonomy, description, parent, count, prodNbrRef, prodNameRef, prodDesc, prodcat_ID, prodcatorder, prodPriceUnit, prodNbStock, prodUrl) '. 
			'VALUES (:ID, :post_author, :post_date, :post_date_gmt, :post_content, :post_title, :post_excerpt, :post_status, :comment_status, :ping_status, :post_password, :post_name, :to_ping, :pinged, :post_modified, :post_modified_gmt, :post_content_filtered, :post_parent, :guid, :menu_order, :post_type, :post_mime_type, :comment_count, :object_id, :term_taxonomy_id, :term_order, :term_id, :taxonomy, :description, :parent, :count, :prodnbrref, :prodnameref, :proddesc, :prodcatID, :prodcatorder, :prodpriceunit, :prodnbstock, :produrl);';
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':ID',$ID, \PDO::PARAM_INT); //BIGINT(20)
			$stmt->bindValue(':post_author',$post_author, \PDO::PARAM_INT); //BIGINT(20)
			$stmt->bindValue(':post_date',$post_date); //DATETIME
			$stmt->bindValue(':post_date_gmt',$post_date_gmt); //DATETIME
			$stmt->bindValue(':post_content',$post_content); //LONGTEXT
			$stmt->bindValue(':post_title',$post_title); //TEXT
			$stmt->bindValue(':post_excerpt',$post_excerpt); //TEXT
			$stmt->bindValue(':post_status',$post_status); //VARCHAR(20)
			$stmt->bindValue(':comment_status',$comment_status); //VARCHAR(20)
			$stmt->bindValue(':ping_status',$ping_status); //VARCHAR(20)
			$stmt->bindValue(':post_password',$post_password); //VARCHAR(20)
			$stmt->bindValue(':post_name',$post_name); //VARCHAR(200)
			$stmt->bindValue(':to_ping',$to_ping); //TEXT
			$stmt->bindValue(':pinged',$pinged); //TEXT
			$stmt->bindValue(':post_modified',$post_modified); //DATETIME
			$stmt->bindValue(':post_modified_gmt',$post_modified_gmt); //DATETIME
			$stmt->bindValue(':post_content_filtered',$post_content_filtered); //LONGTEXT
			$stmt->bindValue(':post_parent',$post_parent, \PDO::PARAM_INT); //BIGINT(20)
			$stmt->bindValue(':guid',$guid); //VARCHAR(255)
			$stmt->bindValue(':menu_order',$menu_order, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':post_type',$post_type); //VARCHAR(20)
			$stmt->bindValue(':post_mime_type',$post_mime_type); //VARCHAR(100)
			$stmt->bindValue(':comment_count',$comment_count, \PDO::PARAM_INT); //BIGINT(20)
			$stmt->bindValue(':object_id',$object_id, \PDO::PARAM_INT); //BIGINT(20)
			$stmt->bindValue(':term_taxonomy_id',$term_taxonomy_id, \PDO::PARAM_INT); //BIGINT(20)
			$stmt->bindValue(':term_order',$term_order, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':term_id',$term_id, \PDO::PARAM_INT); //BIGINT(20)
			$stmt->bindValue(':taxonomy',$taxonomy); //VARCHAR(32)
			$stmt->bindValue(':description',$description); //LONGTEXT
			$stmt->bindValue(':parent',$parent, \PDO::PARAM_INT); //BIGINT(20)
			$stmt->bindValue(':count',$count, \PDO::PARAM_INT); //BIGINT(20)
			$stmt->bindValue(':prodnbrref',$prodnbrref, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':prodnameref',$prodnameref); //VARCHAR(255)
			$stmt->bindValue(':proddesc',$proddesc); //VARCHAR(255)
			$stmt->bindValue(':prodcatID',$prodcatID, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':prodcatorder',$prodcatorder, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':prodpriceunit',$prodpriceunit); //FLOAT
			$stmt->bindValue(':prodnbstock',$prodnbstock, \PDO::PARAM_INT); //INT(11)
			$stmt->bindValue(':produrl',$produrl); //VARCHAR(255)
			$stmt->execute();
			return true;
		}
	}

?>