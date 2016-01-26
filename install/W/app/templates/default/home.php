<?php $this->layout('layout', ['title' => 'Accueil']) ?>
<?php $this->start('main_content') ?>
	<h2>Bienvenue sur la boutique e<span class="legofont">lego</span></h2>
	<div id="home">
		<div class="row">
		<header>
	            <img src="<?= $this->assetUrl('img/home/elego_logo_r.png'); ?>" alt="Logo de E-lego" />
	            <h1>E-lego</h1>
	            <h2 class="">Une seule limite, votre personnalité.</h2>
				<h3 class="hidden-xs">Pour que la technique ne soit plus un frein à votre créativité !</h3>
		</header>
		</div>
		<div class="row">
		<article>
		 	<h1>Bienvenue chez E-lego !</h1>
		 	<h2>Vous créez, vous assemblez, nous livrons !</h2>
            <ul>
                <li><a href="<?= $this->url('construire_construire'); ?>">Assemblez différentes pièces pour composer votre figurine personnalisée</a></li>
                <li><a href="#">Stockez vos créations et montez vos collections dans un espace personnel</a></li>
                <li><a href="#">Achetez vos productions</a></li>
            </ul>
        </article>
        </div>
       
		<div class="row" id="dessins">
			<div class="assembler col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<figure class="head">
					<img src="<?= $this->assetUrl('img/home/headicon.png'); ?>" alt="Tête de lego"/>
					<!--<figcaption>Tête de légo jaune souriante.</figcaption>-->
				</figure>
				<figure class="addicon">
					<img src="<?= $this->assetUrl('img/home/addicon.png'); ?>" alt="signe d'addition"/>
					<!--<figcaption>Signe d'addition.</figcaption>-->
				</figure>
				<figure class="chesticon">
					<img src="<?= $this->assetUrl('img/home/chesticon.png'); ?>" alt="Buste de lego"/>
					<!--<figcaption>Buste de lego rouge avec des mains jaunes.</figcaption>-->
				</figure>
				
				<figure class="addicon">
					<img src="<?= $this->assetUrl('img/home/addicon.png'); ?>" alt="signe d'addition"/>
					<!--<figcaption>Signe d'addition.</figcaption>-->
				</figure>

				<figure class="legsicon">
					<img src="<?= $this->assetUrl('img/home/legsicon.png'); ?>" alt="Jambes de lego"/>
					<!--<figcaption>Pantalon bleu de lego.</figcaption>-->
				</figure>

				<p><a href="<?= $this->url('construire_construire'); ?>">Assembler sa figurine</a></p>
			</div>

			<div class="fleche col-lg-1 col-md-1 hidden-sm hidden-xs">
				<figure class="flecheright">
					<img src="<?= $this->assetUrl('img/home/navigationright.png'); ?>" alt="fleche à droite"/>
					<!--<figcaption>Flèche de navigation dirigée vers la droite.</figcaption>-->
				</figure>
			</div>

			<div class="stocker col-lg-4 col-md-4 col-sm-4 col-xs-12" >
				<figure class="legos2">
					<img src="<?= $this->assetUrl('img/home/legos2.png'); ?>" alt="Deux legos"/>
					<!--<figcaption>Deux figurines lego semblables.</figcaption>-->
				</figure>
				<figure class="legos3">
					<img src="<?= $this->assetUrl('img/home/legos3.png'); ?>" alt="Trois legos"/>
					<!--<figcaption>Trois figurines lego semblables.</figcaption>-->
				</figure>
				<p><a href="#">Monter sa collection</a></p>

			</div>

			<div class="fleche col-lg-1 col-md-1 hidden-sm hidden-xs">
				<figure class="flecheright">
					<img src="<?= $this->assetUrl('img/home/navigationright.png'); ?>" alt="flèche à droite"/>
				</figure>
				<!--<figcaption>Flèche de navigation dirigée vers la droite.</figcaption>-->
			</div>

			<div class="acheter col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<figure class="legoicon">
					<img src="<?= $this->assetUrl('img/home/legoicon.png'); ?>" alt="petite figurine lego"/>
					<!--<figcaption>Petite figurine lego : tête jaune, buste rouge et pantalon bleu.</figcaption>-->
				</figure>
				<figure class="roadback">
					<img src="<?= $this->assetUrl('img/home/roadbackward.png'); ?>" alt="flèche vers le bas"/>
					<!--<figcaption>flèche de navigation dirigée vers le bas</figcaption>-->
				</figure>
				<figure class="shoppingicon">
					<img src="<?= $this->assetUrl('img/home/shoppingicon.png'); ?>" alt="caddie de course"/>
					<!--<figcaption>Caddie de course.</figcaption>-->
				</figure>
				<p><a href="#">Acheter sa création</a></p>
			</div>		
		</div>
	</div>	

		
	<div class="clearfix"></div>
<?php $this->stop('main_content') ?>
