<?php

header('Location: http://127.0.0.1/EDUmax-education-website-/html/contact.html',true);

 $con=new mysqli("127.0.0.1","root","","University");

 if($con->connect_error){
    echo"failed";
}
else{
   echo"successfull";
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $id=$_POST['id'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    
    $sql="INSERT INTO contact VALUES('$name', '$id' , '$email','$message')";
    $con->query($sql);

}

if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $id=$_POST['id'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    $sql="UPDATE contact SET name='$name', email='$email', message='$message' WHERE id='$id'";
    $con->query($sql);

}

?>
