<?php
if(isset($_POST['add']))
{
 $name=$_POST['name'];
 $branch=$_POST['branch'];
 $phone=$_POST['phone'];
 $designation=$_POST['designation'];
 $pswd=$_POST['pswd'];
 $rpswd=$_POST['rpswd'];
 
// echo"$name,$branch,$phone,$pswd,$rpswd";
 if($pswd==$rpswd)
 {
   include 'dbconfig.php';
   $sql="insert into faculty(`id`,`name`,`branch`,`phoneno`,`designation`,`password`)values(NULL,'$name','$branch','$phone','$designation','$pswd')";
   if($conn->query($sql))
   {
    echo '<script>alert("Data added succesfully")</script>';
                 echo '<META http-equiv="refresh" content="0;facultyadmin">';   
   }
  else
  {
      echo '<script>alert("Failed to add faculty ")</script>';
                 echo '<META http-equiv="refresh" content="0;facultyadmin">';
  }
 }
 else{  
                 echo '<script>alert("Password miss match")</script>';
                 echo '<META http-equiv="refresh" content="0;facultyadmin">';
            }
}
else
{
    header("location:facultyadmin");
}
?>
