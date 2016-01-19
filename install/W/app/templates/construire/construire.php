
<?php $this->layout('layout', ['title' => 'construire_construire']) ?>

<?php $this->start('main_content') ?>

	<h2>Let's code.</h2>
		

	<!-- Choix accessoire tête -->

	<!--Liste des accessoires tête-->
	<div class="row">
		<div class="liste acchead zone1 col-lg-4 col-md-6 col-sm-6 col-xs-12" >
			<!--Titre de la liste-->
			<h2>Accessoires Tête</h2>

			<!--Liste des images-->
			<?php
				$id ='';
				foreach ($z1acchead as $currentAccHead) :
			?>	
			<div class="liste">
				<figure>
			  			<img class="thumb hidden-xs" src="<?= $this->assetUrl('/img/products/'.$currentAccHead['pdctName'].'/'.$currentAccHead['prodUrl'])?>" alt="<?= $currentAccHead['prodDesc']?>">
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!-- Image accsessoire tête -->
		<div class="liste acchead zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevAccHead">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>
			<!--Visuel de chaque image-->
			<!-- requete a faire-->
			<?php 
				foreach ($z2acchead as $currentAccHead) :
					$id .= $currentAccHead['ID_prod'];
			?>
				<figure class="ac_head liste">
					<img src="<?= $this->assetUrl('/img/products/'.$currentAccHead['pdctName'].'/'.$currentAccHead['prodUrl'])?>" alt="<?= $currentAccHead['prodDesc']?>">
				</figure>
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextAccHead">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2acchead as $currentAccHead) :
					$id .= $currentAccHead['ID_prod'];
			?>
		<div class="liste acchead zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentAccHead['prodNameRef']?></li>
				<li>Référence : <?= $currentAccHead['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentAccHead['prodPriceUnit']?> € TTC</li>
				<li>Disponibilité : <?= $currentAccHead['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="ajouter">Ajouter</button>
			<button type="button"class="retirer">Retirer</button>
			<div class="clearfix"></div>
		</div>

		<!--Sélection de la pièce-->
		<div class="liste acchead zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>
	
	<!--Liste des têtes-->
	<div class="row">
		<div class="liste heads zone1 col-lg-4 col-md-6 col-sm-6 col-xs-12" >
			<!--Titre de la liste-->
			<h2>Têtes</h2>

			<!--Liste des images-->
			<?php
				$id ='';
				foreach ($z1head as $currentHead) :
			?>	
			<div class="liste">
				<figure>
			  			<img class="thumb hidden-xs" src="<?= $this->assetUrl('/img/products/'.$currentHead['pdctName'].'/'.$currentHead['prodUrl'])?>" alt="<?= $currentHead['prodDesc']?>">
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!-- Image tête -->
		<div class="liste heads zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevHead">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>
			<!--Visuel de chaque image-->
			<!-- requete a faire-->
			<?php 
				foreach ($z2head as $currentHead) :
					$id .= $currentHead['ID_prod'];
			?>
				<figure class="ac_head liste">
					<img src="<?= $this->assetUrl('/img/products/'.$currentHead['pdctName'].'/'.$currentHead['prodUrl'])?>" alt="<?= $currentHead['prodDesc']?>">
				</figure>
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextHead">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2head as $currentHead) :
					$id .= $currentHead['ID_prod'];
			?>
		<div class="liste heads zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentHead['prodNameRef']?></li>
				<li>Référence : <?= $currentHead['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentHead['prodPriceUnit']?>  € TTC</li>
				<li>Disponibilité : <?= $currentHead['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="ajouter">Ajouter</button>
			<button type="button"class="retirer">Retirer</button>
			<div class="clearfix"></div>
		</div>

		<!--Sélection de la pièce-->
		<div class="liste heads zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>	

	<!--Liste des accessoires buste-->
	<div class="row">
		<div class="liste accchest zone1 col-lg-4 col-md-6 col-sm-6 col-xs-12" >
			<!--Titre de la liste-->
			<h2>Accessoires buste</h2>

			<!--Liste des images-->
			<?php
				$id ='';
				foreach ($z1accchest as $currentAccChest) :
			?>	
			<div class="liste">
				<figure>
			  			<img class="thumb hidden-xs" src="<?= $this->assetUrl('/img/products/'.$currentAccChest['pdctName'].'/'.$currentAccChest['prodUrl'])?>" alt="<?= $currentAccChest['prodDesc']?>">
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!-- Image accessoire buste -->
		<div class="liste accchest zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevAccChest">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>
			<!--Visuel de chaque image-->
			<!-- requete a faire-->
			<?php 
				foreach ($z2accchest as $currentAccChest) :
					$id .= $currentAccChest['ID_prod'];
			?>
				<figure class="ac_chest liste">
					<img src="<?= $this->assetUrl('/img/products/'.$currentAccChest['pdctName'].'/'.$currentAccChest['prodUrl'])?>" alt="<?= $currentAccChest['prodDesc']?>">
				</figure>
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextAccChest">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2accchest as $currentAccChest) :
					$id .= $currentAccChest['ID_prod'];
			?>
		<div class="liste accchest zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentAccChest['prodNameRef']?></li>
				<li>Référence : <?= $currentAccChest['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentAccChest['prodPriceUnit']?> € TTC</li>
				<li>Disponibilité : <?= $currentAccChest['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="ajouter">Ajouter</button>
			<button type="button"class="retirer">Retirer</button>
			<div class="clearfix"></div>
		</div>

		<!--Sélection de la pièce-->
		<div class="liste accchest zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>
	
	<!--Liste des bustes-->
	<div class="row">
		<div class="liste chests zone1 col-lg-4 col-md-6 col-sm-6 col-xs-12" >
			<!--Titre de la liste-->
			<h2>Bustes</h2>

			<!--Liste des images-->
			<?php
				$id ='';
				foreach ($z1chest as $currentChest) :
			?>	
			<div class="liste">
				<figure>
			  			<img class="thumb hidden-xs" src="<?= $this->assetUrl('/img/products/'.$currentChest['pdctName'].'/'.$currentChest['prodUrl'])?>" alt="<?= $currentChest['prodDesc']?>">
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!-- Image tête -->
		<div class="liste chests zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevChest">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>
			<!--Visuel de chaque image-->
			<!-- requete a faire-->
			<?php 
				foreach ($z2chest as $currentChest) :
					$id .= $currentChest['ID_prod'];
			?>
				<figure class="ac_head liste">
					<img src="<?= $this->assetUrl('/img/products/'.$currentChest['pdctName'].'/'.$currentChest['prodUrl'])?>" alt="<?= $currentChest['prodDesc']?>">
				</figure>
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextChest">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2chest as $currentChest) :
					$id .= $currentChest['ID_prod'];
			?>
		<div class="liste chests zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentChest['prodNameRef']?></li>
				<li>Référence : <?= $currentChest['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentChest['prodPriceUnit']?>  € TTC</li>
				<li>Disponibilité : <?= $currentChest['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="ajouter">Ajouter</button>
			<button type="button"class="retirer">Retirer</button>
			<div class="clearfix"></div>
		</div>

		<!--Sélection de la pièce-->
		<div class="liste chests zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>		

	<!--Liste des accessoires jambes-->
	<div class="row">
		<div class="liste acclegs zone1 col-lg-4 col-md-6 col-sm-6 col-xs-12" >
			<!--Titre de la liste-->
			<h2>Accessoires Jambes</h2>

			<!--Liste des images-->
			<?php
				$id ='';
				foreach ($z1acclegs as $currentAccLegs) :
			?>	
			<div class="liste">
				<figure>
			  			<img class="thumb hidden-xs" src="<?= $this->assetUrl('/img/products/'.$currentAccLegs['pdctName'].'/'.$currentAccLegs['prodUrl'])?>" alt="<?= $currentAccLegs['prodDesc']?>">
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!-- Image accessoire jambes -->
		<div class="liste acclegs zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevAccLegs">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>
			<!--Visuel de chaque image-->
			<!-- requete a faire-->
			<?php 
				foreach ($z2acclegs as $currentAccLegs) :
					$id .= $currentAccLegs['ID_prod'];
			?>
				<figure class="ac_head liste">
					<img src="<?= $this->assetUrl('/img/products/'.$currentAccLegs['pdctName'].'/'.$currentAccLegs['prodUrl'])?>" alt="<?= $currentAccLegs['prodDesc']?>">
				</figure>
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextAccLegs">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2acclegs as $currentAccLegs) :
					$id .= $currentAccLegs['ID_prod'];
			?>
		<div class="liste acclegs zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentAccLegs['prodNameRef']?></li>
				<li>Référence : <?= $currentAccLegs['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentAccLegs['prodPriceUnit']?> € TTC</li>
				<li>Disponibilité : <?= $currentAccLegs['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="ajouter">Ajouter</button>
			<button type="button"class="retirer">Retirer</button>
			<div class="clearfix"></div>
		</div>

		<!--Sélection de la pièce-->
		<div class="liste acclegs zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>
	
	<!--Liste des Jambes-->
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
			  			<img class="thumb hidden-xs" src="<?= $this->assetUrl('/img/products/'.$currentLegs['pdctName'].'/'.$currentLegs['prodUrl'])?>" alt="<?= $currentLegs['prodDesc']?>">
				</figure>
			</div>	
			<?php endforeach; ?>
		</div>

		<!-- Image Jambes -->
		<div class="liste legs zone2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<!--touche previous-->
			<div class="liste" id="prevLegs">
				<img src="<?= $this->assetUrl('img/interface/left.png'); ?>" alt="bouton précédent">
			</div>
			<!--Visuel de chaque image-->
			<!-- requete a faire-->
			<?php 
				foreach ($z2legs as $currentLegs) :
					$id .= $currentLegs['ID_prod'];
			?>
				<figure class="ac_head liste">
					<img src="<?= $this->assetUrl('/img/products/'.$currentLegs['pdctName'].'/'.$currentLegs['prodUrl'])?>" alt="<?= $currentLegs['prodDesc']?>">
				</figure>
			<?php endforeach; ?>

			<!--touche next-->
			<div class="liste" id="nextLegs">
				<img src="<?= $this->assetUrl('img/interface/right.png'); ?>" alt="bouton suivant">
			</div>
		</div>

		<!-- Visuel des détails de la pièce, ajout en sélection, retrait de la sélection -->
		<?php 
				foreach ($z2legs as $currentLegs) :
					$id .= $currentLegs['ID_prod'];
			?>
		<div class="liste legs zone3 col-lg-4 col-lg-push-0 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
			<ul>
				<li>Nom de la pièce : <?= $currentLegs['prodNameRef']?></li>
				<li>Référence : <?= $currentLegs['prodNbrRef']?></li>
				<li>Tarif unitaire : <?= $currentLegs['prodPriceUnit']?>  € TTC</li>
				<li>Disponibilité : <?= $currentLegs['prodNbStock']?> en stock</li>
			</ul>
			<button type="button" class="ajouter">Ajouter</button>
			<button type="button"class="retirer">Retirer</button>
			<div class="clearfix"></div>
		</div>

		<!--Sélection de la pièce-->
		<div class="liste legs zone4 col-lg-1 col-lg-pull-0 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 hidden-xs">
			<p>Actuellement sélectionnée</p>
		</div>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>	

<?php $this->stop('main_content') ?>
