
<?php $this->layout('layout', ['title' => 'Assemblez votre figurine']) ?>

<?php $this->start('main_content') ?>

	<h2>Assemblez votre figurine</h2>
	<p>Faites défiler les pièces et sélectionnez celles qui vous plaisent pour les ajouter à votre figurine. Une fois que vous avez fait votre choix, cliquez sur le bouton "valider la configuration".</p>
		

	<!-- Choix accessoire tête -->
	<!-- Zone 1 : Liste des accessoires tête-->
	<div class="row">
		<div class="liste acchead zone1 col-lg-4 col-md-6 col-sm-6 col-xs-12" >
			<!--Titre de la liste-->
			<h2>Accessoires Tête</h2>

			<!--Liste des images-->
			<?php
				$id='';
				foreach ($z1acchead as $currentAccHead) :
			?>	
			<div class="liste">
				<figure>
			  			<img class="thumb hidden-xs" id="<?= $currentAccHead['ID_prod']; ?>" src="<?= $this->assetUrl('/img/products/'.$currentAccHead['pdctName'].'/'.$currentAccHead['prodUrl'])?>" alt="<?= $currentAccHead['prodDesc']?>">
			  			<figcaption class="hidden-xs">Acc. tête <?= $currentAccHead['ID_prod']; ?></figcaption>
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!-- Zone 2 : Images accsessoires tête -->
		<div class="liste acchead zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevAccHead">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>
			<!--Visuel de chaque image-->
			<?php 
				foreach ($z2acchead as $currentAccHead) :
					$id .= $currentAccHead['ID_prod'];
			?>
				<figure class="ac_head liste" id="z2acchead">
					<img id="<?= $id; ?>" src="<?= $this->assetUrl('/img/products/'.$currentAccHead['pdctName'].'/'.$currentAccHead['prodUrl'])?>" alt="<?= $currentAccHead['prodDesc']?>">
				<figcaption>Accessoire de tête <?= $id;?></figcaption>
				</figure>
				<figure class="z4acchead hidden-lg hidden-md hidden-sm visible-xs">

					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Pièce actuellement sélectionnée</figcaption>
				</figure>
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextAccHead">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Zone 3 : Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2acchead as $currentAccHead) :
					$id = $currentAccHead['ID_prod'];
			?>
		<div id="z3acchead" class="liste acchead zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentAccHead['prodDesc']?></li>
				<li>Nom d'origine : <?= $currentAccHead['prodNameRef']?></li>
				<li>Référence : <?= $currentAccHead['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentAccHead['prodPriceUnit']?> € TTC</li>
				<li>Disponibilité : <?= $currentAccHead['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="update" id="btnUpdAccHead">Sélectionner</button>
			<div class="clearfix"></div>
		</div>

		<!-- Zone 4 : Sélection de la pièce-->
		<div class="liste acchead zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<figure class="z4acchead">
				
			</figure>
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>
	



	<!-- Choix tête -->	
	<!--Zone 1 : Liste des têtes-->
	<div class="row">
		<div class="liste heads zone1 col-lg-4 col-md-6 col-sm-6 col-xs-12" >
			<!--Titre de la liste-->
			<h2>Têtes</h2>

			<!--Liste des images-->
			<?php
				$id='';
				foreach ($z1head as $currentHead) :
			?>	
			<div class="liste">
				<figure>
			  		<img class="thumb hidden-xs" id="<?= $currentHead['ID_prod']; ?>" src="<?= $this->assetUrl('/img/products/'.$currentHead['pdctName'].'/'.$currentHead['prodUrl'])?>" alt="<?= $currentHead['prodDesc']?>">
					<figcaption class="hidden-xs">Tête <?= $currentHead['ID_prod']; ?></figcaption>
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!--Zone 2 : Image tête -->
		<div class="liste heads zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevHead">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>

			<!--Visuel de chaque image-->
			<?php 
				foreach ($z2head as $currentHead) :
					$id .= $currentHead['ID_prod'];
			?>
				<figure class="head liste" id="z2head">
					<img id="<?= $id; ?>" src="<?= $this->assetUrl('/img/products/'.$currentHead['pdctName'].'/'.$currentHead['prodUrl'])?>" alt="<?= $currentHead['prodDesc']?>">
					<figcaption>Tête <?= $id;?></figcaption>
				</figure>
				<figure class="z4head hidden-lg hidden-md hidden-sm visible-xs">

					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Pièce actuellement sélectionnée</figcaption>
				</figure>
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextHead">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Zone 3 : Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2head as $currentHead) :
					$id .= $currentHead['ID_prod'];
			?>
		<div id="z3head" class="liste heads zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentHead['prodDesc']?></li>
				<li>Nom d'origine : <?= $currentHead['prodNameRef']?></li>
				<li>Référence : <?= $currentHead['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentHead['prodPriceUnit']?>  € TTC</li>
				<li>Disponibilité : <?= $currentHead['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="update" id="btnUpdHead">Sélectionner</button>
			<div class="clearfix"></div>
		</div>

		<!-- Zone 4 : Sélection de la pièce-->
		<div class="liste heads zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<figure class="z4head">
				
			</figure>
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>	


	<!-- Choix accessoires buste -->
	<!-- Zone 1 : Liste des accessoires buste-->
	<div class="row">
		<div class="liste accchest zone1 col-lg-4 col-md-6 col-sm-6 col-xs-12" >
			<!--Titre de la liste-->
			<h2>Accessoires buste</h2>

			<!--Liste des images-->
			<?php
				$id='';
				foreach ($z1accchest as $currentAccChest) :
			?>	
			<div class="liste">
				<figure>
			  		<img class="thumb hidden-xs" id="<?= $currentAccChest['ID_prod']; ?>" src="<?= $this->assetUrl('/img/products/'.$currentAccChest['pdctName'].'/'.$currentAccChest['prodUrl'])?>" alt="<?= $currentAccChest['prodDesc']?>">
					<figcaption class="hidden-xs">Acc. buste <?= $currentAccChest['ID_prod']; ?></figcaption>
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!-- Zone 2 : Image accessoire buste -->
		<div class="liste accchest zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevAccChest">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>
			<!--Visuel de chaque image-->
			<?php 
				foreach ($z2accchest as $currentAccChest) :
					$id .= $currentAccChest['ID_prod'];
			?>
				<figure class="ac_chest liste" id="z2accchest">
					<img id="<?= $id; ?>" src="<?= $this->assetUrl('/img/products/'.$currentAccChest['pdctName'].'/'.$currentAccChest['prodUrl'])?>" alt="<?= $currentAccChest['prodDesc']?>">
					<figcaption>Accessoire de buste <?= $id;?></figcaption>
				</figure>
				<figure class="z4accchest hidden-lg hidden-md hidden-sm visible-xs">

					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Pièce actuellement sélectionnée</figcaption>
				</figure>				
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextAccChest">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Zone 3 : Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2accchest as $currentAccChest) :
					$id .= $currentAccChest['ID_prod'];
			?>
		<div id="z3accchest" class="liste accchest zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentAccChest['prodDesc']?></li>
				<li>Nom d'origine : <?= $currentAccChest['prodNameRef']?></li>
				<li>Référence : <?= $currentAccChest['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentAccChest['prodPriceUnit']?> € TTC</li>
				<li>Disponibilité : <?= $currentAccChest['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="update" id="btnUpdAccChest">Sélectionner</button>
			<div class="clearfix"></div>
		</div>
		
		<!--Zone 4 : Sélection de la pièce-->
		<div class="liste accchest zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<figure class="z4accchest">
				
			</figure>
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>
	

	<!-- Choix buste -->
	<!--Zone 1 : Liste des bustes-->
	<div class="row">
		<div class="liste chests zone1 col-lg-4 col-md-6 col-sm-6 col-xs-12" >
			<!--Titre de la liste-->
			<h2>Bustes</h2>

			<!--Liste des images-->
			<?php
				$id='';
				foreach ($z1chest as $currentChest) :
			?>	
			<div class="liste">
				<figure>
			  		<img class="thumb hidden-xs" id="<?= $currentChest['ID_prod']; ?>" src="<?= $this->assetUrl('/img/products/'.$currentChest['pdctName'].'/'.$currentChest['prodUrl'])?>" alt="<?= $currentChest['prodDesc']?>">
					<figcaption class="hidden-xs">Buste <?= $currentChest['ID_prod']; ?></figcaption>
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!-- Image buste -->
		<div class="liste chests zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevChest">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>
			<!--Visuel de chaque image-->
			<?php 
				foreach ($z2chest as $currentChest) :
					$id .= $currentChest['ID_prod'];
			?>
				<figure class="chest liste" id="z2chest">
					<img id="<?= $id; ?>" src="<?= $this->assetUrl('/img/products/'.$currentChest['pdctName'].'/'.$currentChest['prodUrl'])?>" alt="<?= $currentChest['prodDesc']?>">
					<figcaption>Buste <?= $id;?></figcaption>
				</figure>
				<figure class="z4chest hidden-lg hidden-md hidden-sm visible-xs">

					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Pièce actuellement sélectionnée</figcaption>
				</figure>				
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextChest">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Zone 3 : Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2chest as $currentChest) :
					$id .= $currentChest['ID_prod'];
			?>
		<div id="z3chest"class="liste chests zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentChest['prodDesc']?></li>
				<li>Nom d'origine : <?= $currentChest['prodNameRef']?></li>
				<li>Référence : <?= $currentChest['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentChest['prodPriceUnit']?>  € TTC</li>
				<li>Disponibilité : <?= $currentChest['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="update" id="btnUpdChest">Sélectionner</button>
			<div class="clearfix"></div>
		</div>

		<!-- Zone 4 : Sélection de la pièce-->
		<div class="liste chests zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<figure class="z4chest">
				
			</figure>
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>
			
	<!-- Choix accessoires jambes -->
	<!-- Zone 1 : Liste des accessoires jambes-->
	<div class="row">
		<div class="liste acclegs zone1 col-lg-4 col-md-6 col-sm-6 col-xs-12" >
			<!--Titre de la liste-->
			<h2>Accessoires Jambes</h2>

			<!--Liste des images-->
			<?php
				$id='';
				foreach ($z1acclegs as $currentAccLegs) :
			?>	
			<div class="liste">
				<figure>
			  		<img class="thumb hidden-xs" id="<?= $currentAccLegs['ID_prod']; ?>" src="<?= $this->assetUrl('/img/products/'.$currentAccLegs['pdctName'].'/'.$currentAccLegs['prodUrl'])?>" alt="<?= $currentAccLegs['prodDesc']?>">
					<figcaption class="hidden-xs">Acc. Jambes <?= $currentAccLegs['ID_prod']; ?></figcaption>
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!-- Zone 2 : Image accessoire jambes -->
		<div class="liste acclegs zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevAccLegs">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>
			<!--Visuel de chaque image-->
			<?php 
				foreach ($z2acclegs as $currentAccLegs) :
					$id .= $currentAccLegs['ID_prod'];
			?>
				<figure class="ac_legs liste" id="z2acclegs">
					<img id="<?= $id; ?>" src="<?= $this->assetUrl('/img/products/'.$currentAccLegs['pdctName'].'/'.$currentAccLegs['prodUrl'])?>" alt="<?= $currentAccLegs['prodDesc']?>">
					<figcaption>Accessoire Jambes <?= $id;?></figcaption>
				</figure>
				<figure class="z4acclegs hidden-lg hidden-md hidden-sm visible-xs">

					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Pièce actuellement sélectionnée</figcaption>
				</figure>				
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextAccLegs">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Zone 3 : Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2acclegs as $currentAccLegs) :
					$id .= $currentAccLegs['ID_prod'];
			?>
		<div id="z3acclegs"class="liste acclegs zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentAccLegs['prodDesc']?></li>
				<li>Nom d'origine : <?= $currentAccLegs['prodNameRef']?></li>
				<li>Référence : <?= $currentAccLegs['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentAccLegs['prodPriceUnit']?> € TTC</li>
				<li>Disponibilité : <?= $currentAccLegs['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="update" id="btnUpdAccLegs">Sélectionner</button>
			<div class="clearfix"></div>
		</div>

		<!-- Zone 4 : Sélection de la pièce-->
		<div class="liste acclegs zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<figure class="z4acclegs">
				
			</figure>
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>
	
	<!-- Choix jambes -->
	<!-- Zone 1 : Liste des Jambes-->
	<div class="row">
		<div class="liste legs zone1 col-lg-4 col-md-6 col-sm-6 col-xs-12" >
			<!--Titre de la liste-->
			<h2>Jambes</h2>

			<!--Liste des images-->
			<?php
				$id ='';
				foreach ($z1legs as $currentLegs) :
			?>	
			<div class="liste">
				<figure>
			  		<img class="thumb hidden-xs" id="<?= $currentLegs['ID_prod']; ?>" src="<?= $this->assetUrl('/img/products/'.$currentLegs['pdctName'].'/'.$currentLegs['prodUrl'])?>" alt="<?= $currentLegs['prodDesc']?>">
					<figcaption class="hidden-xs">Jambes <?= $currentLegs['ID_prod']; ?></figcaption>
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!-- Zone 2 : Image Jambes -->
		<div class="liste legs zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevLegs">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>
			<!--Visuel de chaque image-->
			<?php 
				foreach ($z2legs as $currentLegs) :
					$id .= $currentLegs['ID_prod'];
			?>
				<figure class="legs liste" id="z2legs">
					<img id="<?= $id; ?>" src="<?= $this->assetUrl('/img/products/'.$currentLegs['pdctName'].'/'.$currentLegs['prodUrl'])?>" alt="<?= $currentLegs['prodDesc']?>">
					<figcaption>Jambes <?= $id;?></figcaption>
				</figure>
				<figure class="z4legs hidden-lg hidden-md hidden-sm visible-xs">

					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Pièce actuellement sélectionnée</figcaption>
				</figure>				
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextLegs">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Zone 3 : Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2legs as $currentLegs) :
					$id .= $currentLegs['ID_prod'];
			?>
		<div id="z3legs"class="liste legs zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentLegs['prodDesc']?></li>
				<li>Nom d'origine : <?= $currentLegs['prodNameRef']?></li>
				<li>Référence : <?= $currentLegs['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentLegs['prodPriceUnit']?>  € TTC</li>
				<li>Disponibilité : <?= $currentLegs['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="update" id="btnUpdLegs">Sélectionner</button>
			<div class="clearfix"></div>
		</div>

		<!-- Zone 4 : Sélection de la pièce-->
		<div class="liste legs zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<figure class="z4legs">
				
			</figure>
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>	
	<div>
		<form id="myForm" action="<?= $this->url('configuration_configuration'); ?>" method="POST" accept-charset="utf-8">
			<button type="submit" id="valider" class="btn btn-info">Valider la configuration</button>
		</form>
	</div>

<?php $this->stop('main_content') ?>
