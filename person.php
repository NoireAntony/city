
 <?php
 include 'temp/head.php';
  session_start();
 include 'temp/database.php';
 include 'temp/navklient.php';

?>
<h1>Личный кабинет</h1>
<tbody>
<table class="table">
<tr>
 <th>Номер </th>
   <th>Клиент</th> 
   <th>Услуги</th>
   <th>Формат</th>
   <th>Время</th>
   <th>Занятие</th>

</tr>
<?php
$id_user =$_SESSION['id_user'];
$id_usluge =$_SESSION['id_usluge'];

$sql="SELECT * from zayavka where id_user='{$_SESSION['id_user']}'";
$result=$mysqli->query($sql);
if(!empty($result)){
  foreach($result as $row){
    echo '<tr><th>'.$row['id_zayavka'].'</th>
    <th>'.$row['id_user'].'</th>
    <th>'.$row['id_usluge'].'</th>
    <th>'.$row['format'].'</th>
    <th>'.$row['time'].'</th>
    <th>'.$row['zanitie'].'</th></tr>';
  }  
}
?>

</table>



</tbody>


