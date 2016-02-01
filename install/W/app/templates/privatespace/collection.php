<?php $this->layout('consultation_layout', ['title' => 'Ma collection']) ?>
<?php $this->start('main_content') ?>
   <div class="collection">
   		<header>
			<figure>
				<img src="<?= $this->assetUrl('img/interface/avatar_lego.png'); ?>" alt="avatar lego"/>
			</figure>
		</header>
		<h1> Votre collection </h1>
		<?php if(count($figurecreates)): ?>
		<ul>
		<?php 
		//print_r($todos);
		foreach($figurecreates as $currentFigure) :
			$id = $currentFigure['ID_fig'];
		?>	
			<li>

				<a href="<?= $this->url('privatespace_details', ['id' => $id]) ?>">
					<?= $currentFigure['figTitle'] ?> <!--Titre donné à la figurine créée -->
				</a>
				
				<button type=""><a href="<?= $this->url('privatespace_creationdetails', ['id' => $id]) ?>">
					|  Détails
				</a></button>

				<button type=""><a href="<?= $this->url('privatespace_updatefig', ['id' => $id]) ?>">
					|  modifier
				</a></button>
				
			</li>

		<?php endforeach ?>
		</ul>
		<?php else :?>
			<p>Vous n'avez créé aucune figurine pour le moment.<p>

			<img src="<?= $this->assetUrl('img/lego.jpg'); ?>" alt="Tas de briques"/>

		<?php endif ?>
	</div>	




	<div class="clearfix"></div>
<?php $this->stop('main_content') ?>