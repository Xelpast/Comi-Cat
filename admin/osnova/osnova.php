<?php 
$user = "root";
$password = "root";
$host = "localhost";
$db = "testings";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo = new PDO ($dbh, $user, $password);

?>

<?php 
if(isset($_POST["save"])) {

    $list=['.php', '.zip', '.js', '.html'];
        foreach($list as $item) {
            if(preg_match("/$item$/", $_FILES['im']['name']))exit("Расширение файла не подходит");
        }
        $type=getimagesize($_FILES['im']['tmp_name']);
        if($type && ($type['mime'] !='image/png' || $type['mime'] !='image/jpg' || $type['mime'] !='image/jpeg')) {
            if($_FILES['im']['name'] < 1920 * 1920) {
                $upload='../img/'.$_FILES['im']['name'];

                if(move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "Файл загружен";
                else echo "Ошибка при загрузке файла";
            }
            else exit("Размер файла превышен");
        }
    else exit("Тип файла не подходит");
}

?>

<?php 
$korm=$_POST["korm"];
$namer=$_POST["namer"];
$url=$_SERVER['REQUEST_URI'];
$url=explode('/', $url);
$str=$url[4];
echo $str;
$sql2="UPDATE osnova SET korm=:korm,  namer=:namer, filenames=:filenames WHERE id=$str";
$query=$pdo->prepare($sql2);
$query->execute(["korm" => $korm, "namer" => $namer, "filenames"=>$_FILES['im']['name']]);
// echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/osnova.php">';
?>