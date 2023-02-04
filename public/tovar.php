<?php require_once '../functions/connect.php';?>
<?php
$sql2 = $pdo->prepare("SELECT * FROM osnova");
$sql2->execute();
$tovar = $sql2->fetchAll(PDO::FETCH_OBJ);
?>


<?php foreach($tovar as $tovari):?>
	<div class="box3">
		<div class="korm"><a href="#">
			<img class="korm_img" src="/admin/img/<?php echo $tovari->filenames ?>" alt="!"></a>
		<div class="zena">
		<div class="zenaz	">
			<p> <?php echo $tovari->korm ?> :<a href=""><?php echo $tovari->namer ?></a></p>
		</div>
	</div>

		<div class="v-korziny">
			<button>
				В корзину
			</button>
		</div>
	</div>
	<?php endforeach ?>
</div>