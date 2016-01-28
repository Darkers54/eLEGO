<?php $this->layout('privatespace_layout', ['title' => 'Espace personnel/collection']) ?>
<?php $this->start('main_content') ?>
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
		Vous n'avez créé aucune figurine pour le moment.
	<?php endif ?>



	<div class="clearfix"></div>
<?php $this->stop('main_content') ?>