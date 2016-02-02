<?php foreach($mesinfos as $list) : ?>
<ul>
	<li>Nom de la pièce : <?= $list['prodDesc']?></li>
	<li>Nom d'origine : <?= $list['prodNameRef']?></li>
	<li>Référence : <?= $list['prodNbrRef']?></li>
	<li>Tarif unitaire : <?= $list['prodPriceUnit']?> € TTC</li>
	<li>Disponibilité : <?= $list['prodNbStock']?> en stock</li>	
</ul>
<?php endforeach; ?> 