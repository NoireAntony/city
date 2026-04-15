<?php
include 'temp/head.php';
session_start();
include 'temp/database.php';
include 'temp/nav.php';

$message='';
if(!empty($_POST)&& isset($_POST['login'])&& isset($_POST['password'])){

$login=trim($_POST['login']);
$password=trim($_POST['password']);


$login=$mysqli->real_escape_string($login);
$password=$mysqli->real_escape_string($password);


$sql="SELECT * from users where login='$login' and password='$password'";
$result=$mysqli->query($sql);
if($result->num_rows===0){
    $message="Неверный логин или пароль";
    echo $message;
}
else{
    $user=$result->fetch_assoc();
    $_SESSION['id_user']=$user['id_user'];
     $_SESSION['login']=$user['login'];
      $_SESSION['password']=$user['password'];
       $_SESSION['role']=$user['role'];
      if($user['role']==='admin'){
        header('location:admin.php');
        exit();
      }
      elseif($user['role']==='teacher'){
        header('location:teacher.php');
        exit();
      }
      else{
        header('location:zayavka.php');
      }
}

}

?>

<div class="container">
<h1 style="text-align:center;">Авторизация</h1>
<form action=""method="POST">

<div class="form-element"style="text-align:center;">

<label for="login">Логин</label>
<input type="text" name="login" required><br><br>



</div>


<div class="form-element"style="text-align:center;">

<label for="password">Пароль</label>
<input type="password" name="password" required><br><br>

</div>

<div class="form-element"style="text-align:center;">

<input type="submit"value="Войти">



</form>

</div>









 