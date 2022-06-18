<?php

header('Location: http://127.0.0.1/EDUmax-education-website-/html/index.html',true);

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
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    
    $sql="INSERT INTO registration VALUES('$name','$email','$phone')";
    $con->query($sql);
}

?>
