 <?php
 include 'temp/head.php';
 include 'temp/database.php';
 include 'temp/nav.php';

 if(!empty($_POST)){
$fio=$_POST['fio'];
$login=$_POST['login'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$role=$_POST['role'];
 
if($password !==$password2){
    echo"Пароли не совпадают";
    exit();
}

$sql="INSERT INTO users(fio, login, password, role) VALUES ('$fio','$login','$password','$role')";
$result=$mysqli->query($sql);
var_dump($_POST);
if($result){
header('location:login.php');
}
 }
 ?>

 <div class="container">
<h1>Регистрация</h1>
<form action=""method="POST">

<div class="form-element">

<label for="fio">Фамилия</label>
<input type="text" name="fio" placeholder="Символы кириллицы" pattern="^[A-Яа-ЯЁе-\s]+$" required><br><br>



</div>


<div class="form-element">

<label for="login">Логин</label>
<input type="text" name="login" required><br><br>



</div>



<div class="form-element">

<label for="password">Пароль</label>
<input type="password" name="password" required><br><br><br>

</div>

<div class="form-element">

<label for="password2"> Подвердите пароль</label>
<input type="password" name="password2" required><br><br>


</div>

<div class="form-element">

<label for="role"> Роль</label>
<input type="text" name="role" required><br><br>


</div>



<input type="submit"value="Зарегистрироваться">




</form>

</div>





