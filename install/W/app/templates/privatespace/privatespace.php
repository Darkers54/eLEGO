<?php $this->layout('privatespace_layout', ['title' => 'Espace personnel']) ?>
<?php $this->start('main_content') ?>
<div class="privatespace">
	<header>
		<figure>
			<img src="<?= $this->assetUrl('img/interface/avatar_lego.png'); ?>" alt="avatar lego"/>
		</figure>
		
		<?php 
	/*if ( is_user_logged_in()) {
		echo "bienvenue utilisateur ";
	}else{
		echo "bienvenue visiteur";
	}
*/
	/*print_r($current_user);*/
	if(isset($_SESSION['user']['display_name']) && !empty($_SESSION['user']['display_name'])) : ?>
		<h1> Bonjour <?= $_SESSION['user']['display_name']; ?></h1>
	
	<?php else :?>
		<?php
			$redirect_to = ("localhost/");
		?>
	 
	<?php endif ?>

	</header>

	<h2>Ma dernière crise de rire</h2>
	<div class="partage">
		<div class="row">
			<figure>
			
				<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img src="<?= $this->assetUrl('img/interface/legos_star_wars.png'); ?>" class="img-responsive" alt="lego star wars en réunion">
				</div>
			
			</figure>
			<figcaption> Petite réunion du lundi ! </figcaption>
		</div>
		
	</div>





	<div class="clearfix"></div>
</div>	
<?php $this->stop('main_content') ?>