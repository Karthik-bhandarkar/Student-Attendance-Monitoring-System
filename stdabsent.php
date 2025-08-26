<?php
//<form class="modal-content animate" action=" " method="get">

                        $regno=$_GET['regno'];
                        $sem=$_GET['sem'];
                        $subcode=$_GET['sub'];
                        $today=date('d/m/Y');
                         $sql="SELECT * FROM `attendance` WHERE `subid`='$subcode' and `datetime`='$today' and `sid`='$regno';";
                     // echo $sql;
                     include 'dbconfig.php';
                     $result=$conn->query($sql);
                     if($result->num_rows>0){
                                     while($row=$result->fetch_assoc()){
                                           echo "<META http-equiv=\"refresh\" content=\"0;facultyhome?sub=$subcode\">";   
                                     }
                                     
                     }
                     else{
                     $sql="INSERT INTO `attendance`(`id`, `sid`, `sem`, `subid`, `status`, `datetime`) VALUES (null,'$regno', '$sem','$subcode','Absent','$today')";
                     // echo $sql;
                    
                     if($conn->query($sql))
                         {
    
                 echo "<META http-equiv=\"refresh\" content=\"0;facultyhome?sub=$subcode\">";   
   }
  else
  {
      echo '<script>alert("Failed to add faculty ")</script>';
                 echo "<META http-equiv=\"refresh\" content=\"0;facultyhome?sub=$subcode\">";   
  }
        
                     }               
  ?>