<?php foreach($mesImages as $img) : ?>
<img id="<?= $img['ID_prod'] ?>" src="<?= $this->assetUrl('/img/products/'.$img['pdctName'].'/'.$img['prodUrl'])?>" alt="<?= $img['prodDesc']?>">
<?php endforeach; ?> 