<?php require_once '../functions/connect.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/adminkas.css">  
    <title>Админка основы</title>
</head>
<body>
<div class="adminka">
    <h1>Редактирование основной информации</h1>
    <?php echo "Добрый день, " .$_SESSION['login']; ?><br>
    <a href="/logout.php">Выйти</a><br>
  
    <?php 
    $sql2=$pdo->prepare("SELECT * FROM osnova");
    $sql2->execute();
    while($osnovas=$sql2->fetch(PDO::FETCH_OBJ)):?>

    
    <form action="/admin/osnova/osnova.php/<?php echo $osnovas->id ?>" method="post" enctype="multipart/form-data">
        <?php echo $osnovas->id?><br>
        <input type="text" name="korm" value="<?php echo $osnovas->korm?>"><br>
        <input type="text" name="namer" value="<?php echo $osnovas->namer?>"><br>
        <p>
            <input type="file" name="im">
        </p>
        <input type="submit" name="save" value="Сохранение...">
    </form>

    <img src="/img/<?php echo $osnovas->filenames?>" width="200px">
    <?php endwhile?>
</div>
</body>
</html>