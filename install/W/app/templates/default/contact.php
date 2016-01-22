<?php $this->layout('layout', ['title' => 'Contact']) ?>
<?php $this->start('main_content') ?>
	<h2>Contact</h2>
	<p>Cela ne se voit pas encore, mais ceci est un formulaire de contact comportant les informations
	nécessaires à l'enregistrement dans la table tbusers.</p>

	<form enctype="multipart/form-data" method="post" class="formctct"  >
		<div class="divformchamps">
			<fieldset>
				<h3>Nous Contacter :</h3>
				
				<div  class="divformctct col-lg-6">
    				<label  class="formlabelcontact">Nom :
    					<span class="formctctreq">*</span>
    				</label>
    				<input type="text" required name="ctctname"  />	  
				</div>
				<div  class="divformctct col-lg-6">
   				 	<label class="formlabelctct">Prénom :
        				<span class="formctctreq">*</span>
    				<input type="text" required name="ctctfirstname" /></label>   
				</div>
				<div  class="divformctct col-lg-6">
   				 	<label class="formlabelctct">Raison sociale :
    				<input type="text" name="ctctfirm" /></label>   
				</div>
				<div  class="divformctct col-lg-6">
    				<label class="formlabelctct">Adresse e-mail : 
        				<span class="formctctreq">*</span>
    				</label>
    				<input type="email" required name="ctctmail" />
				</div>
				<div  class="divformctct col-lg-12">
   				 	<label class="formlabelctct">Objet :
        				<span class="formctctreq">*</span>
    				<input type="text" required name="ctctobject" /></label>   
				</div>
				<div  class="divformctct col-lg-12">
    				<label  class="formlabelctct">Message :
        				<span class="formctctreq">*</span>
    				</label>
    				<br>
    				<textarea name="txtctctmessage"  value ="test"required rows="8"></textarea>
				</div>
				<input type="hidden" name="hidbtnctct" value="" />
				<div class="formctctsubmit col-lg-12">
					<input type="submit" value="Soumettre" name="btnctctsubmit" /><br>
					<span>Les champs marqués d'une astérisque sont obligatoires.</span>
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
						<dd><span>Nous contacter: </span><a href="mailto: elego2016@gmail.com">elego2016@gmail.com</a></dd>
					</dt>
				</address>
			</article>
			
		</section>
	</form>




<?php $this->stop('main_content') ?>