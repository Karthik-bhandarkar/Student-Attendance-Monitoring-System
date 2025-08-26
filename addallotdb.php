<?php
if(isset($_POST['add']))
{
 $fid=$_POST['fid'];
 $subcode=$_POST['subcode'];
 
// echo"$name,$branch,$phone,$pswd,$rpswd";
 {
   include 'dbconfig.php';
   $sql="insert into allot(`id`,`fid`,`subcode`)values(NULL,'$fid','$subcode')";
   if($conn->query($sql))
   {
    echo '<script>alert("Subject Alloted succesfully")</script>';
                 echo '<META http-equiv="refresh" content="0;allotsubject">';   
   }
  else
  {
      echo '<script>alert("Failed to allot Subject ")</script>';
                 echo '<META http-equiv="refresh" content="0;allotsubject">';
  }
 }

}
else
{
    header("location:allotadmin");
}
?>
