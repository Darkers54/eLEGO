<?php  

	namespace Controller;

	use \W\Controller\Controller;

	class DataController extends Controller
	{
		public function adm_data_import()
		{
			$request = $_REQUEST;
			if(isset($request['btnImport']))
			{
				$linesAddedCount = 0;
				$linesIgnoredCount = 0;
				$prodcatID = 0;
				$pdctID = 0;
				$pcto = 0;
				$prodcatorder = 0;
				$ppu = 0; //ProdPriceUnit
				$pns = 0; //ProdNbStock
				$DataManager = new \Manager\DataManager();
				$mesProduits = $DataManager->getAllProductsFromWooCommerce();
				//$this->show('admin/adm_data_import', ['mesproduits' => $mesProduits]);
				foreach($mesProduits as $produit) :
				$ID = $produit['ID'];
				$post_author = $produit['post_author'];
				$post_date = $produit['post_date'];
				$post_date_gmt = $produit['post_date_gmt'];
				$post_content = $produit['post_content'];
				$post_title = $produit['post_title'];
				$post_excerpt = $produit['post_excerpt'];
				$post_status = $produit['post_status'];
				$comment_status = $produit['comment_status'];
				$ping_status = $produit['ping_status'];
				$post_password = $produit['post_password'];
				$post_name = $produit['post_name'];
				$to_ping = $produit['to_ping'];
				$pinged = $produit['pinged'];
				$post_modified = $produit['post_modified'];
				$post_modified_gmt = $produit['post_modified_gmt'];
				$post_content_filtered = $produit['post_content_filtered'];
				$post_parent = $produit['post_parent'];
				$guid = $produit['guid'];
				$menu_order = $produit['menu_order'];
				$post_type = $produit['post_type'];
				$post_mime_type = $produit['post_mime_type'];
				$comment_count = $produit['comment_count'];
				$object_id = $produit['object_id'];
				$term_taxonomy_id = $produit['term_taxonomy_id'];	
				$term_order = $produit['term_order'];
				$term_id = $produit['term_id'];	
				$taxonomy = $produit['taxonomy'];	
				$description = $produit['description'];	
				$parent = $produit['parent'];
				$count = $produit['count'];
				$prodNbrRef = $produit['post_title'];
				$prodNameRef = $produit['post_excerpt'];
				$prodDesc = $produit['post_content'];
				$prodUrl = $produit['post_name'] . '.jpg';
				$check = $DataManager->CheckIfExist($ID);
				//debug($check); //DEBUG
				if(empty($check['ID']))
				{
					//echo $description.'<br>'; //DEBUG
					
					switch ($description) 
					{
						case 'Accessoires Tête':
							$pdctID = $DataManager->getIDpdct('accessories_head');
							break;
						case 'Tête':
							$pdctID = $DataManager->getIDpdct('heads');
							break;
						case 'Accessoires Buste':
							$pdctID = $DataManager->getIDpdct('accessories_chest');
							break;	
						case 'Buste':
							$pdctID = $DataManager->getIDpdct('chests');
							break;
						case 'Accessoires Jambes':
							$pdctID = $DataManager->getIDpdct('accessories_legs');
							break;
						case 'Jambes':
							$pdctID = $DataManager->getIDpdct('legs');
							break;
						default:
							$pdctID=array('ID_pdct' => 7);
							break;
					}
					$prodcatID = $pdctID['ID_pdct'];
					$pcto = $DataManager->getProductOrderByCatID($prodcatID);
					if(empty($pcto))
					{
						$prodcatorder = 1;
					}
					else
					{
						$pcto = $DataManager->getProductOrderByCatID($prodcatID);
						$pctintermediate = $pcto['prodcatorder'];
						$prodcatorder = $pctintermediate + 1;
					}
					$linesAddedCount++;
					$ppu = $DataManager->getInfosFromPostMeta($produit['ID'], '_regular_price');
					$prodPriceUnit = $ppu['meta_value'];
					$pns = $DataManager->getInfosFromPostMeta($produit['ID'], '_stock');
					$prodNbStock = $pns['meta_value'];
					$addLine = $DataManager->insertIntotbProduct($ID, $post_author, $post_date, $post_date_gmt, $post_content, $post_title, $post_excerpt, $post_status, $comment_status, $ping_status, $post_password, $post_name, $to_ping, $pinged, $post_modified, $post_modified_gmt, $post_content_filtered, $post_parent, $guid, $menu_order, $post_type, $post_mime_type, $comment_count, $object_id, $term_taxonomy_id, $term_order, $term_id, $taxonomy, $description, $parent, $count, $prodNbrRef, $prodNameRef, $prodDesc, $prodcatID, $prodcatorder, $prodPriceUnit, $prodNbStock, $prodUrl);
					if($addLine == true)
					{
						echo 'Une ligne a été ajoutée en base de données dans la table tbproduct<br>';
					}




					
				}
				else
				{
					$linesIgnoredCount++;
				}			
				endforeach;
				echo $linesAddedCount . ' lignes ont été ajoutées en base de données.<br>';
				echo $linesIgnoredCount . ' lignes ont été ignorées.<br>';
				echo ($linesIgnoredCount+$linesAddedCount) . ' lignes ont été traitées<br>';
			}
		}
	}

?>