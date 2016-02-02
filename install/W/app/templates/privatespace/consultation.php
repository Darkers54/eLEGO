<?php $this->layout('consultation_layout', ['title' => 'Consultation']) ?>
<?php $this->start('main_content') ?>

	<div class="consultation">

		<header>
			<figure>
				<img src="<?= $this->assetUrl('img/interface/avatar_lego.png'); ?>" alt="avatar lego"/>
			</figure>
		</header>

		<h2>Mon dernier assemblage</h2>

		<h3> Création du dimanche 17 janvier 2016 à 18:34 <h3>

		<div class="lastcreation">
			<figure class="ac_head_created">
				<img src="<?= $this->assetUrl('img/products/accessories_head/6064125bis.png'); ?>" alt=""/>
			</figure>
			<figure class="head_created">
				<img src="<?= $this->assetUrl('img//products/heads/6121823.png'); ?>" alt=""/>
			</figure>
			<figure class="ac_chest_created">
				<img src="<?= $this->assetUrl('img/products/accessories_chest/4541677.png'); ?>" alt=""/>
			</figure>
			<figure class="chest_created">
				<img src="<?= $this->assetUrl('img/products/chests/4523064.png'); ?>" alt=""/>
			</figure>
			<figure class="legs_created">
				<img src="<?= $this->assetUrl('img/products/legs/6093951.png'); ?>" alt=""/>
			</figure>
			<figcaption>"Sans contrefaçon, je suis un Lego ! "</figcaption>
		</div>

		<h2>Ma dernière commande</h2>
		<p><a href="http://localhost/eLEGO/mon-compte/">Commande en cours</a></p>
		<h2>Ma dernière livraison</h2>
		<p><a href="http://localhost/eLEGO/mon-compte/">Livraison en cours</a></p>
		<h2>Ma dernière facture</h2>
		<p><a href="http://localhost/eLEGO/mon-compte/">Facture en cours</a></p>
	</div>	



	<div class="clearfix"></div>
<?php $this->stop('main_content') ?>