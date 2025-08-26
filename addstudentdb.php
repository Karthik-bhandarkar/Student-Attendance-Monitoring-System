<?php
if(isset($_POST['add']))
{
 $regno=$_POST['regno'];
 $name=$_POST['name'];
 $dob=$_POST['dob'];
 $gender=$_POST['gender'];
 $branch=$_POST['branch'];
 $sem=$_POST['sem'];
 $sphone=$_POST['sphone'];
 $mphone=$_POST['mphone'];
 $fphone=$_POST['fphone'];
 $pswd=$_POST['pswd'];
 $rpswd=$_POST['rpswd'];
 
// echo"$name,$branch,$phone,$pswd,$rpswd";
 if($pswd==$rpswd)
 {
     if (preg_match("/[^a-zA-Z0-9]+/",$regno))
     {
         
       echo '<script>alert("special charcter not allowed in regno")</script>';
                 echo '<META http-equiv="refresh" content="0;studentadmin">';   
     }
 else
     {
         
     
   include 'dbconfig.php';
   $sql="insert into student(`regno`,`name`,`dob`,`gender`,`branch`,`sem`,`sphone`,`mphone`,`fphone`,`password`)values('$regno','$name','$dob','$gender','$branch','$sem','$sphone','$mphone','$fphone','$pswd')";
   if($conn->query($sql))
   {
    echo '<script>alert("Data added succesfully")</script>';
                 echo '<META http-equiv="refresh" content="0;studentadmin">';   
   }
  else
  {
      echo '<script>alert("Failed to add student ")</script>';
                 echo '<META http-equiv="refresh" content="0;studentadmin">';
  }
     }
 }
 else{  
                 echo '<script>alert("Password miss match")</script>';
                 echo '<META http-equiv="refresh" content="0;studentadmin">';
            }
}
else
{
    header("location:studentadmin");
}
?>

