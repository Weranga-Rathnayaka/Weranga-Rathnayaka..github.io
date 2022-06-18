<?php
$login_username=$_POST['username'];
$login_password=$_POST['password'];

if($login_username=='admin' && $login_password=='pass'){
    header("Location:../html/php/admin-login.php");
}else{
    header('Location: http://127.0.0.1/EDUmax-education-website-/html/login.html',true);
}
?>