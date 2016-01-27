<?php $this->layout('layout', ['title' => 'Présentation']) ?>
<?php $this->start('main_content') ?>

	
	<div id="my_carousel" class="carousel slide" data-ride="carousel">
		<!-- Bulles -->
		<ol class="carousel-indicators">
			<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
			<li data-target="#my_carousel" data-slide-to="1"></li>
			<li data-target="#my_carousel" data-slide-to="2"></li>
		</ol>

		<!-- Slides -->
		<div class="carousel-inner">
		<!-- Page 1 -->
		<div class="item active">  
		<div class="carousel-page">
			<img src="/assets/img/presentation.jpg" class="img-responsive" title="eLEGO" legend="Présentation de l'entreprise eLEGO" alt="logo_LEGO" />
		</div> 
		<div class="carousel-caption">Figurine</div>
	</div>  

	<!-- Page 2 -->
	<div class="item"> 
		<div class="carousel-page"><img src="/assets/img/lego.jpg" class="img-responsive img-rounded" title="eLEGO" legend="Présentation de l'entreprise eLEGO" alt="logo_LEGO"/></div> 
		<div class="carousel-caption">LEGO</div>
	</div>  

	<!-- Page 3 -->
	<div class="item">  
		<div class="carousel-page">
			<img src="/assets/img/figurine.png" class="img-responsive img-rounded" title="eLEGO" legend="Présentation de l'entreprise eLEGO" alt="logo_LEGO"/>
		</div>  
		<div class="carousel-caption">Lego</div>
	</div>     
	</div>

	<!-- Contrôles -->
	<a class="left carousel-control" href="#my_carousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#my_carousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h2>Présentation</h2>
			<hr>
			<p>Fondée en Janvier 2016 à la suite d'un projet de développement pour l'école numérique WebForce3,
			 la société e<span class="legofont">lego</span> a commencé son activité à Piennes en France.</p>
		</div>
	</div>
	<div class="row">
		<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
			<img class="img-responsive" src="/assets/img/lego.jpg " title="eLEGO" legend="Présentation de l'entreprise eLEGO" alt="logo_LEGO"/>

				<p>Depuis cette date, la société a connu une croissance modeste lui permettant de consolider sa 
				position de leader sur le marché de la pièce détachée <span class="legofont">lego</span> et d'en
				être un fournisseur incontournable dans le Grand Est.</p>
		</div>
		<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
			<hr>
			<div class="text">
		        <article class="coordonnées">

		            <h3>Nous situer</h3>

		            <?php 
		            
		                $key = 'AIzaSyCtX79Pyl6ONHi-MT4yEl7ibThz8N4oTAE';
		                $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . '&key=' . $key;
		                
		                $responseJSON = file_get_contents($url);
		                $response = json_decode($responseJSON);
		                
		                if($response->status == 'OK') {

		                    $lat = $response->results[0]->geometry->location->lat;
		                    $lon = $response->results[0]->geometry->location->lng;
		                } else {
		                    
		                }

		                $Lat = 49.310733;
		    			$Lon = 5.780963;
		            
		            ?>
		            <script>
		                google.maps.event.addDomListener(window, 'load',
		                    function(){initMap(<?= $Lat ?>,<?= $Lon ?>)});
		            </script>

		            <div id="map"></div>
		            <address>
		                <dt class="adress">e<span class="legofont">lego</span></dt>
		                <dd>Rue Gino Raimondi<br>54490 Piennes</dd>
		                <dd><span>Tel:</span>03.12.34.56.78</dd>
		                <dd><span><a href="<?= $this->url('default_contact'); ?>">Nous Contacter</a></span></dd>
		            </address>
		        </article>  
   			</div>
   		</div>
                             
    </div>

	

<?php $this->stop('main_content') ?>