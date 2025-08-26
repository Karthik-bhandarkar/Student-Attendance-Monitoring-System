<?php include 'adminheader.php';?>
<h2>Student List</h2>
                     <table align="center" width="100%">
                         <tr><th>Slno</th><th>Reg No</th><th>Name</th><th>Gender & DOB</th><th>Parent Phno</th><th>Student Phno</th><th>Branch & SEM</th></tr>
                     <?php
                     if(isset($_POST['view']))
                     {
                         $branch=$_POST['branch'];
                         $sem=$_POST['sem'];
                     $sql="SELECT * FROM `student` WHERE `branch`='$branch' and `sem`='$sem';";
                     include 'dbconfig.php';
                     $result=$conn->query($sql);
                     if($result->num_rows>0){
                         $slno=0;
                         while ($row=$result->fetch_assoc()){
                             $slno++;
                             $regno=$row['regno'];
                             $name=$row['name'];
                             $dob=$row['dob'];
                             $gender=$row['gender'];
                             $branch=$row['branch'];
                             $sem=$row['sem'];
                             $sphone=$row['sphone'];
                             $fphone=$row['fphone'];
                             $mphone=$row['mphone'];
                             echo "<tr><td>$slno</td><td>$regno</td><td>$name</td><td>$gender<br>$dob</td><td>Mother: $mphone<br>Father: $fphone</td><td>$sphone</td><td>$branch<br>$sem</td></tr>";
                         }
                     }
                     }
                     
                     ?>
                     </table>
<?php include 'adminfooter.php';?>