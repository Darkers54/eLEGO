<?php $this->layout('layout', ['title' => 'Contact']) ?>
<?php $this->start('main_content') ?>
	<h2>Contact</h2>
	<p>Cela ne se voit pas encore, mais ceci est un formulaire de contact comportant les informations
	nécessaires à l'enregistrement dans la table tbusers.</p>
	<form enctype="multipart/form-data" method="post" class="form-horizontal well well-sm"  >
		<div class="divformchamps">
			<fieldset>
				<h3>Nous Contacter :</h3>
				
				<div  class="form-group">
    				<label  class="col-md-4 control-label">Nom :
    					<span class="formctctreq">*</span>
    					<input type="text" required name="ctctname" class="form-control input-md"  />
    				</label>
    					  
				</div>
				<div  class="form-group">
   				 	<label class="col-md-4 control-label">Prénom :
        				<span class="formctctreq">*</span>
    					<input type="text" required name="ctctfirstname" class="form-control input-md" />
    				</label>   
				</div>
				<div  class="form-group">
   				 	<label class="col-md-4 control-label">Raison sociale :
    					<input type="text" name="ctctfirm" class="form-control input-md" />
    				</label>   
				</div>
				<div  class="form-group">
    				<label class="col-md-4 control-label">Adresse e-mail : 
        				<span class="formctctreq">*</span>
    					<input type="email" required name="ctctmail" class="form-control input-md" />
    				</label>
    				
				</div>
				<div  class="form-group">
   				 	<label class="col-md-4 control-label">Objet :
        				<span class="formctctreq">*</span>
    					<input type="text" required name="ctctobject" class="form-control input-md"/>
    				</label>   
				</div>
				<div  class="form-group">
    				<label  class="col-md-4 control-label">Message :
        				<span class="formctctreq">*</span><br>
    					<textarea name="txtctctmessage"  value ="test"required rows="8"></textarea>
    				</label>
    				<br>	
				</div>
				<div class="form-group">
					<div class="col-md-4 col-md-offset-4">
						<input type="hidden" name="hidbtnctct" value="" />
						<input type="submit" value="Soumettre" name="btnctctsubmit" class="form-control input-md" /><br>
						<span>Les champs marqués d'une astérisque sont obligatoires.</span>
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
					</dt>
				</address>
			</article>
			
		</section>
	</form>
<?php $this->stop('main_content') ?>