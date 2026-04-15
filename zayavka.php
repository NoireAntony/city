 <?php
 include 'temp/head.php';
 session_start();
 include 'temp/database.php';
 include 'temp/navklient.php';

 $id_user=$_SESSION['id_user'];

 if(!empty($_POST)){

$id_usluge=$_POST['id_usluge'];
$format=$_POST['format'];
$time=$_POST['time'];

 $sql="INSERT INTO zayavka(id_user, id_usluge, format, time) VALUES ('$id_user','$id_usluge','$format','$time')";
$result=$mysqli->query($sql);
var_dump($_POST);
if($result){
header('location:person.php');
}
 }
 ?>

 <div class="container">
<h1>Заявка</h1>
<form action=""method="POST">

<label for="text">Выберите предмет</label>
<select class="form-select" id="id_usluge" name="id_usluge" required>
<?php
$usluge=$mysqli->query("SELECT id_usluge, name_usluge from usluges");
foreach($usluge as $list){
echo '<option value="'.$list['id_usluge'].'">'.$list['name_usluge'].'</option>';
}

?>
</select>
<!--<label for="text">Выберите учителя</label>
<select class="form-select" id="id_user" required>-->
<?php
//$usluge=$mysqli->query("SELECT  id_user, fio from users where role='teacher'");
//foreach($usluge as $list){
//echo '<option value="'.$list['id_user'].'">'.$list['fio'].'</option>';
//}

?>
</select>

<div class="form-element">

<label for="format">Формат</label>
<input type="text" name="format" required><br><br>



</div>



<div class="form-element">

<label for="time">Время</label>
<input type="time" name="time" required><br><br><br>

</div>

<input type="submit"value="Отправить">




</form>

</div>

