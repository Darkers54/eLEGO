<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Our Own StyleSheet ;) -->
	<link rel="stylesheet" href="<?= $this->assetUrl('css/styles.css') ?>">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	
</head>
<body>
	<div class="container">
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
		  		<div class="container-fluid">
		    		<!-- Brand and toggle get grouped for better mobile display -->
		    		<div class="navbar-header">
		    		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		     		    <span class="sr-only">Toggle navigation</span>
		     		    <span class="icon-bar"></span>
		    		    <span class="icon-bar"></span>
		   	 		    <span class="icon-bar"></span>
		   		    </button>
		      		<a class="navbar-brand" href="#">e<span class="legofont">lego</span></a>
		    		</div>

		    		<!-- Collect the nav links, forms, and other content for toggling -->
		    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      			<ul class="nav navbar-nav">
		        			<li class="active"><a href="<?= $this->url('home'); ?>">Accueil<span class="sr-only">(current)</span></a></li>
		        			<li><a href="<?= $this->url('default_presentation'); ?>">Présentation</a></li>
		        			<li><a href="<?= $this->url('default_contact'); ?>">Contact</a></li>
		        			<li><a href="#">Boutique</a></li>
		        			<li><a href="<?= $this->url('default_help'); ?>">Aide</a></li>
		        			<li><a href="<?= $this->url('imex_home'); ?>" title="">Export</a></li>
		      			</ul>
		    		</div><!-- /.navbar-collapse -->
		  		</div><!-- /.container-fluid -->
			</nav>
			<h1>W :: <?= $this->e($title) ?></h1>
		</header>
		<div class="logo">
			<img src="<?= $this->assetUrl('img/truc.jpg'); ?>" alt="imagelego">
		</div>
		<section>

			<?= $this->section('main_content') ?>
		</section>

		<footer>
			<p>e<span class="legofont">lego</span> &trade; - 2016 | <a href="<?= $this->url('default_mentions'); ?>" title="Mentions Légales">mentions légales</a></p>
		</footer>
	</div>
</body>
</html>