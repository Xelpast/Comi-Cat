<?php require_once '../functions/connect.php';?>
<?php
$sql2 = $pdo->prepare("SELECT * FROM tovar");
$sql2->execute();
$tovar = $sql2->fetch(PDO::FETCH_ASSOC);
?>
<?php foreach($tovar as $tovari):?>
<div class="box3">
		<div class="korm"><a href="#">
			<img class="korm_img" src="../img/<?php echo $tovar["img"] ?>" alt="!"></a>
		<div class="zena">
		<div class="zenaz">
			<p> <?php echo $tovar["korm"] ?> <a href=""><?php echo $tovar["price"] ?></a></p>
		</div>
	</div>

		<div class="v-korziny">
			<button>
				В корзину
			</button>
		</div>
	</div>
</div>
<?php endforeach ?>
<?php foreach($tovar as $tovari):?>
<div class="box3">
		<div class="korm"><a href="#">
			<img class="korm_img" src="https://lenta.servicecdn.ru/globalassets/1/-/23/65/32/235735_3.png?preset=fulllossywhite" alt="!"></a>
		<div class="zena">
		<div class="zenaz">
			<p> <?php echo $tovar["korm"] ?> <a href=""><?php echo $tovar["price"] ?></a></p>
		</div>
	</div>

		<div class="v-korziny">
			<button>
				В корзину
			</button>
		</div>
	</div>
</div>
<?php endforeach ?>