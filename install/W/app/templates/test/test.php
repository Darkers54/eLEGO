
<?php $this->layout('layout', ['title' => 'test_test']) ?>

<?php $this->start('main_content') ?>
	<h2>Let's code.</h2>

<?php
	foreach ($products as $currentProduct) :
?>	
<?php
			$id = $currentProduct['ID_prod'];
?>	
	<figure>
  			<img src="<?= $this->assetUrl('/img/products/'.$currentProduct['prodCat'].'/'.$currentProduct['prodSubCat'].$currentProduct['prodUrl'])?>" alt="<?= $currentProduct['prodDesc']?>">
	</figure>

<?php endforeach ?>

	<!-- Pour construire la figurine il faut 6 <figure> à placer   -->
	<!-- <figure >
  			<img src="<?= $this->assetUrl('/img/products/'.$currentProduct['prodCat'][''].'/4523064.jpg')?>" alt="<?= $currentProduct['prodDesc']?>">
	</figure> 
 -->






<?php $this->stop('main_content') ?>
