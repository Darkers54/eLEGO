<?php $this->layout('layout', ['title' => 'Inscription']) ?>
<?php $this->start('main_content') ?>

<div class="container">
	<form enctype="multipart/form-data" method="post" class="form-horizontal well well-sm"  >
		<div class="divforminschamps">
			<fieldset>
				<h3>Inscription :</h3>
				<div class="row">
					<div  class="form-group">
	    				<label  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">Nom :
	    					<!-- formulaire inscription requis = form insc req -->
	    					<span class="forminscreq">*</span>
	    					<input type="text" required name="insname" class="form-control input-md"  />
	    				</label>	  
					</div>
				</div>
				<div class="row">	
					<div  class="form-group">
	   				 	<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">Prénom :
	        				<span class="forminscreq">*</span>
	    					<input type="text" required name="insfirstname" class="form-control input-md" />
	    				</label>   
					</div>
				</div>
				<div class="row">	
					<div  class="form-group">
	   				 	<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">Mot de passe :
	   				 		<span class="forminscreq">*</span>
	    					<input type="password" name="inspassword" class="form-control input-md" />
	    				</label>   
					</div>
				</div>
				<div class="row">	
					<div  class="form-group">
	    				<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">Adresse e-mail : 
	        				<span class="forminscreq">*</span>
	    					<input type="email" required name="insmail" class="form-control input-md" />
	    				</label>	
					</div>

				<div class="row">	
					<div class="form-group">
						<div class="col-md-4 col-md-offset-4">
							<input type="hidden" name="hidbtnins" value="" />
							<input type="submit" value="Inscription" name="btninssubmit" class="form-control input-md" /><br>
							<span>Les champs marqués d'une astérisque sont obligatoires.</span>
						</div>
					</div>
				</div>	
			</fieldset>
		</div>
		<br>
		<section>
			<article>
				<address>
					<dt class="address">e<span class="legofont">Lego</span>
						<dd>Rue Gino Raimondi</dd>
						<dd>54490 Piennes</dd>
						<dd><span>Tel:</span>03.12.34.56.78</dd>
						<dd><span><a href="<?= $this->url('default_contact'); ?>">Nous Contacter</a></span></dd>
					</dt>
				</address>
			</article>
			
		</section>
	</form>
</div>



<?php $this->stop('main_content') ?>