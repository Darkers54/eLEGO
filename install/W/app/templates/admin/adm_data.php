<?php $this->layout('adm_layout', ['title' => 'Administration - Gestion des donnees']) ?>
<?php $this->start('main_content') ?>
	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">Importer des produits</a></li>
			<li><a href="#tabs-2">Exporter des assemblages</a></li>
		</ul>
		<div id="tabs-1">
			<p>Cliquez sur le bouton ci-dessous pour ajouter des produits dans la partie construire.</p>
			<p>Les produits seront téléchargés de la base ego sous WooCommerce et réintégrés dans la base lego_test.</p>
			<form action="<?= $this->url('adm_data_import'); ?>" method="POST" accept-charset="utf-8" name="frmImport">
				<button type="submit" id="btnImport" name="btnImport" class="btn btn-primary" formtarget="_blank" autofocus>
				<span class="glyphicon glyphicon-download" aria-hidden="true"></span>
				Importer</button>
			</form>

		</div>
		<div id="tabs-2">
			<p>Cliquez sur le bouton ci-dessous pour ajouter des assemblages dans la boutique eLEGO.</p>
			<p>Les assemblages seront insérés dans la base ego sous WooCommerce et les composants seront mis à jour dans cette même base de données.</p>
			<button type="button" id="btnImport" class="btn btn-default">
			<span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
			Exporter</button>
		</div>	
	</div>
	
<?php $this->stop('main_content') ?>