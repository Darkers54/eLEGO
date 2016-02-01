<?php $this->layout('adm_layout', ['title' => 'Administration - Gestion des contenus']) ?>
<?php $this->start('main_content') ?>
	<ul>
		<?php foreach($mesproduits as $produit) : ?>
		<li><?= $produit['ID']; ?></li>
		<li><?= $produit['post_author']; ?></li>
		<li><?= $produit['post_date']; ?></li>
		<li><?= $produit['post_date_gmt']; ?></li>
		<li><?= $produit['post_content']; ?></li>
		<li><?= $produit['post_title']; ?></li>
		<li><?= $produit['post_excerpt']; ?></li>
		<li><?= $produit['post_status']; ?></li>
		<li><?= $produit['comment_status']; ?></li>
		<li><?= $produit['ping_status']; ?></li>
		<li><?= $produit['post_password']; ?></li>
		<li><?= $produit['post_name']; ?></li>
		<li><?= $produit['to_ping']; ?></li>
		<li><?= $produit['pinged']; ?></li>
		<li><?= $produit['post_modified']; ?></li>
		<li><?= $produit['post_modified_gmt']; ?></li>
		<li><?= $produit['post_content_filtered']; ?></li>
		<li><?= $produit['post_parent']; ?></li>
		<li><?= $produit['guid']; ?></li>	
		<li><?= $produit['menu_order']; ?></li>
		<li><?= $produit['post_type']; ?></li>
		<li><?= $produit['post_mime_type']; ?></li>
		<li><?= $produit['comment_count']; ?></li>
		<li><?= $produit['object_id']; ?></li>	
		<li><?= $produit['term_taxonomy_id']; ?></li>	
		<li><?= $produit['term_order']; ?></li>	
		<li><?= $produit['term_id']; ?></li>	
		<li><?= $produit['taxonomy']; ?></li>	
		<li><?= $produit['description']; ?></li>	
		<li><?= $produit['parent']; ?></li>	
		<li><?= $produit['count']; ?></li>
		<br><?= 'Next Line'; ?><br>					
	<?php endforeach; ?> 
	</ul>

<?php $this->stop('main_content') ?>