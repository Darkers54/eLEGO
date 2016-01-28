<?php $this->layout('layout', ['title' => 'Voici votre assemblage !']) ?>
<?php $this->start('main_content') ?>
<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div>
			<?php foreach ($ligne1 as $e1) : ?>
				<figure class="figmobile zoneAccHead">
					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Acc. Tête</figcaption>
					<img id="<?= $e1['ID_prod']; ?>" class="config" src="<?= $this->assetUrl('/img/products/'.$e1['pdctName'].'/'.$e1['prodUrl'])?>" alt="<?= $e1['prodDesc']?>">
				</figure>
			<?php endforeach; ?>
		</div>
		<div>
			<?php foreach ($ligne2 as $e2) : ?>
				<figure class="figmobile zoneHead">
					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Tête</figcaption>
					<img id="<?= $e2['ID_prod']; ?>"class="config"  src="<?= $this->assetUrl('/img/products/'.$e2['pdctName'].'/'.$e2['prodUrl'])?>" alt="<?= $e2['prodDesc']?>">
				</figure>
			<?php endforeach; ?>		
		</div>
		<div>
			<?php foreach ($ligne3 as $e3) : ?>
				<figure class="figmobile zoneAccChest">
					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Acc. Buste</figcaption>
					<img id="<?= $e3['ID_prod']; ?>" class="config" src="<?= $this->assetUrl('/img/products/'.$e3['pdctName'].'/'.$e3['prodUrl'])?>" alt="<?= $e3['prodDesc']?>">
				</figure>
			<?php endforeach; ?>		
		</div>
		<div>
			<?php foreach ($ligne4 as $e4) : ?>
				<figure class="figmobile zoneChest">
					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Buste</figcaption>
					<img id="<?= $e4['ID_prod']; ?>" class="config" src="<?= $this->assetUrl('/img/products/'.$e4['pdctName'].'/'.$e4['prodUrl'])?>" alt="<?= $e4['prodDesc']?>">
				</figure>
			<?php endforeach; ?>		
		</div>
		<div>
			<?php foreach ($ligne5 as $e5) : ?>
				<figure class="figmobile zoneAccLegs">
					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Acc. Jambes</figcaption>
					<img id="<?= $e5['ID_prod']; ?>" class="config" src="<?= $this->assetUrl('/img/products/'.$e5['pdctName'].'/'.$e5['prodUrl'])?>" alt="<?= $e5['prodDesc']?>">
				</figure>
			<?php endforeach; ?>		
		</div>
		<div>
			<?php foreach ($ligne6 as $e6) : ?>
				<figure class="figmobile zoneLegs">
					<figcaption class="hidden-lg hidden-md hidden-sm visible-xs">Jambes</figcaption>
					<img id="<?= $e6['ID_prod']; ?>" class="config" src="<?= $this->assetUrl('/img/products/'.$e6['pdctName'].'/'.$e6['prodUrl'])?>" alt="<?= $e6['prodDesc']?>">
				</figure>
			<?php endforeach; ?>		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="table-responsive col-lg-10 col-md-10 col-sm-10 col-xs-12">
		<table class="table table-striped table-bordered table-hover">
			<caption>Tableau récapitulatif de l'assemblage</caption>
			<thead>
				<tr>
					<th>Pièces</th>
					<th>Référence</th>
					<th>Prix Unitaire</th>
					<th>Quantité</th>
					<th>Prix TTC</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Accessoire Tête</td>
					<td><?= $e1['prodNbrRef']?></td>
					<td id="puAccHead"><?= $e1['prodPriceUnit']?></td>
					<td>
					<button type="button" class="btn btn-default" aria-label="remove quantity" id="btnRemAccHead">
						<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</button>
					<div id="qtyAccHead">1</div> 
					<button type="button" class="btn btn-default" aria-label="add quantity" id="btnAddAccHead">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
					</td>
					<td id="pxAccHead"><?= $e1['prodPriceUnit']?></td>
				</tr>
				<tr>
					<td>Tête</td>
					<td><?= $e2['prodNbrRef']?></td>
					<td id="puHead"><?= $e2['prodPriceUnit']?></td>
					<td>
					<button type="button" class="btn btn-default" aria-label="remove quantity" id="btnRemHead">
						<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</button>
					<div id="qtyHead">1</div> 
					<button type="button" class="btn btn-default" aria-label="add quantity" id="btnAddHead">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
					</td>
					<td id="pxHead"><?= $e2['prodPriceUnit']?></td>
				</tr>
				<tr>
					<td>Accessoire Buste</td>
					<td><?= $e3['prodNbrRef']?></td>
					<td id="puAccChest"><?= $e3['prodPriceUnit']?></td>
					<td>
					<button type="button" class="btn btn-default" aria-label="remove quantity" id="btnRemAccChest">
						<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</button>
					<div id="qtyAccChest">1</div> 
					<button type="button" class="btn btn-default" aria-label="add quantity" id="btnAddAccChest">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
					</td>
					<td id="pxAccChest"><?= $e3['prodPriceUnit']?></td>
				</tr>
				<tr>
					<td>Buste</td>
					<td><?= $e4['prodNbrRef']?></td>
					<td id="puChest"><?= $e4['prodPriceUnit']?></td>
					<td class="quantity">
					<button type="button" class="btn btn-default" aria-label="remove quantity" id="btnRemChest">
						<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</button>
					<div id="qtyChest">1</div>
					<button type="button" class="btn btn-default" aria-label="add quantity" id="btnAddChest">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
					</td>
					<td id="pxChest"><?= $e4['prodPriceUnit']?></td>
				</tr>
				<tr>
					<td>Accessoire Jambes</td>
					<td><?= $e5['prodNbrRef']?></td>
					<td id="puAccLegs"><?= $e5['prodPriceUnit']?></td>
					<td class="quantity">
					<button type="button" class="btn btn-default" aria-label="remove quantity" id="btnRemAccLegs">
						<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</button>
					<div id="qtyAccLegs">1</div>
					<button type="button" class="btn btn-default" aria-label="add quantity" id="btnAddAccLegs">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
					</td>
					<td id="pxAccLegs"><?= $e5['prodPriceUnit']?></td>
				</tr>
				<tr>
					<td>Jambes</td>
					<td><?= $e6['prodNbrRef']?></td>
					<td id="puLegs"><?= $e6['prodPriceUnit']?></td>
					<td class="quantity">
					<button type="button" class="btn btn-default" aria-label="remove quantity" id="btnRemLegs">
						<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</button>
					<div id="qtyLegs">1</div> 
					<button type="button" class="btn btn-default" aria-label="add quantity" id="btnAddLegs">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
					</td>
					<td id="pxLegs"><?= $e6['prodPriceUnit']?></td>
				</tr>								
			</tbody>
		</table>	
	</div>
	<div class="table-responsive col-lg-10 col-md-10 col-sm-10 col-xs-12">
		<table class="table table-striped table-bordered table-hover">
			<caption>Tableau récapitulatif</caption>
			<tbody>
				<tr>
					<td colspan="2">Prix Total (Hors Livraison)</td>
					<td id="pxWithoutDelivery"></td>
				</tr>
				<tr>
					<td>Frais de livraison</td>
					<td id="displayCosts">
						<select name="slcCountry">
						</select>
						<p> grammes </p>
						<div id="estimatedWeight">
							
						</div>
						<div class="clearfix"></div>
					</td>
					<td>
						<div id="pxDelivery"></div>
					</td>
				</tr>
				<tr>
					<td colspan="2">Prix total de l'assemblage &euro; TTC</td>
					<td id="pxTotal"></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="cmdbuttons col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<a href="<?= $this->url('construire_construire'); ?>">
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Créer un nouvel assemblage">Nouveau</button></a>
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Modifier l'assemblage">Modifier</button>
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Acheter votre assemblage">Acheter</button>
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Enregistrer cet assemblage">Enregistrer</button>
		<div class="clearfix"></div>
	</div>	
</div>
<?php $this->stop('main_content') ?>