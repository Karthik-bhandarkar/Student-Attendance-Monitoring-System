<?php
if(isset($_POST['add']))
{
 $subname=$_POST['subname'];
 $subcode=$_POST['subcode'];
 $branch=$_POST['branch'];
 $sem=$_POST['sem'];
 
// echo"$name,$branch,$phone,$pswd,$rpswd";
 {
   include 'dbconfig.php';
   $sql="insert into subject(`name`,`subcode`,`branch`,`sem`)values('$subname','$subcode','$branch','$sem')";
   if($conn->query($sql))
   {
    echo '<script>alert("Data added succesfully")</script>';
                 echo '<META http-equiv="refresh" content="0;subjectadmin">';   
   }
  else
  {
      echo '<script>alert("Failed to add faculty ")</script>';
                 echo '<META http-equiv="refresh" content="0;subjectadmin">';
  }
 }

}
else
{
    header("location:subjectadmin");
}
?>
