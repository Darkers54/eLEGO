<?php $this->layout('privatespace_layout', ['title' => 'Espace personnel/collection/details']) ?>
<?php $this->start('main_content') ?>
	<h1> Détails de votre création </h1>

	<?= $figurecreates['figTitle'] ?> <br>
	<?= $figurecreates['description'] ?> <br>

	<a href="<?= $this->url('construire_construire', ['id' => $figurecreates['ID_fig']]) ?>">Modifier |</a>
	<a href="<?= $this->url('privatespace_collection') ?>">Annuler</a>



	<div class="clearfix"></div>
<?php $this->stop('main_content') ?>