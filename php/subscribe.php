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
    $email=$_POST['email'];
    
    
    $sql="INSERT INTO subscribe VALUES('$email')";
    $con->query($sql);

}

if(isset($_POST['un-submit']))
{
    $email=$_POST['email'];
    
    
    $sql="DELETE FROM subscribe WHERE email='$email'";
    $con->query($sql);

}

?>
