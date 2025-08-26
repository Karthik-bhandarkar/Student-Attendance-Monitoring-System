
<?php include 'facultyheader.php';?>
      <!-- six_box-->
      <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
                 <div class="col-sm-12">
                   <div style="width: 100%;text-align: center"class="titlepage">
                      <?php 
                            include 'dbconfig.php';
                            $sql="SELECT * FROM `faculty` WHERE `id`='$username'";
                             $result=$conn->query($sql);
                                 if($result->num_rows>0)
                                     {
                                     while($row=$result->fetch_assoc())
                                      {
                                         $name=$row['name'];
                                         $designation=$row['designation'];
                                         $branch=$row['branch'];
                                         
                                     }
                                         
                                     }
                            
                            ?>
                            
                       <h1 style="font-size: 50px;"><b><span style="color:DodgerBlue;"><?php echo "$name <br> $designation <br> $branch"; ?></span></b></h1>
        <div class="col-md-12">
                           <form class="modal-content animate" action=" " method="post">
                          
                             <select name="subcode" class="contactus"style="border-radius:5px;" required>
                                 <option select='true' disabled="true">Subject Details</option>
                                 <?php
                                 echo $username;
                                 $sql="SELECT * FROM `allot` WHERE `fid`='$username'";
                                 include 'dbconfig.php';
                                 $result=$conn->query($sql);
                                 if($result->num_rows>0){
                                     while($row=$result->fetch_assoc()){
                                         $subcode=$row['subcode'];
                                         echo "<option>$subcode</option>";
                                     }
                                 }
                                 ?>    
                             </select>
                                 <button type="submit" name="search"> Search</button>
                           </form>
                                 <h2>Student List</h2>
                     <table align="center" width="100%">
                         <tr><th>Slno</th><th>Reg No</th><th>Name</th><th>Gender & DOB</th><th>Parent Phno</th><th>Student Phno</th><th>Branch & SEM</th><th></th><th></th></tr>
                     <?php
                     if(isset($_POST['search']))
                     {
                        $subcode=$_POST['subcode'];
                     $sql="SELECT * FROM `subject` WHERE `subcode`='$subcode';";
                     // echo $sql;
                     include 'dbconfig.php';
                     $result=$conn->query($sql);
                     if($result->num_rows>0){
                                     while($row=$result->fetch_assoc()){
                                         $branch=$row['branch'];
                                         $sem=$row['sem'];
                                        
                                     }
                                     
                     }
                     
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
                             include 'dbconfig.php';
                             $today=date('d/m/Y');
                             $Astatus=0;
                               $sql1="SELECT * FROM `attendance` WHERE `subid`='$subcode' and `datetime`='$today' and `sid`='$regno';";
                             // echo $sql1; 
                     $result1=$conn->query($sql1);
                     if($result1->num_rows>0){
                                     while($row1=$result1->fetch_assoc()){
                                           $Astatus=1;
                                     }
                                     
                     }
                     if($Astatus==0)
                     {
                             echo "<tr style='background:#000;color:white;'><td>$slno</td><td>$regno</td><td>$name</td><td>$gender<br>$dob</td><td>Mother: $mphone<br>Father: $fphone</td><td>$sphone</td><td>$branch<br>$sem</td><td><a href='stdpresent?regno=$regno&sub=$subcode&sem=$sem'><img src='images/correct.png' width='30px'/></a></td><td><a href='stdabsent?regno=$regno&sub=$subcode&sem=$sem'><img src='images/cross.png' width='30px'/></a></td></tr>";
                     }
                      else if($Astatus==1)
                     {
                             echo "<tr style='background:#000;color:white;'><td>$slno</td><td>$regno</td><td>$name</td><td>$gender<br>$dob</td><td>Mother: $mphone<br>Father: $fphone</td><td>$sphone</td><td>$branch<br>$sem</td><td></td><td></td></tr>";
                     }
                             
                         }
                     }
                     }
                     else if(isset ($_GET['sub']))
                     {
                         $subcode=$_GET['sub'];
                     $sql="SELECT * FROM `subject` WHERE `subcode`='$subcode';";
                     // echo $sql;
                     include 'dbconfig.php';
                     $result=$conn->query($sql);
                     if($result->num_rows>0){
                                     while($row=$result->fetch_assoc()){
                                         $branch=$row['branch'];
                                         $sem=$row['sem'];
                                        
                                     }
                                     
                     }
                     
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
                             $today=date('d/m/Y');
                             $Astatus=0;
                               $sql1="SELECT * FROM `attendance` WHERE `subid`='$subcode' and `datetime`='$today' and `sid`='$regno';";
                             // echo $sql1; 
                     $result1=$conn->query($sql1);
                     if($result1->num_rows>0){
                                     while($row1=$result1->fetch_assoc()){
                                           $Astatus=1;
                                     }
                                     
                     }
                     if($Astatus==0)
                     {
                             echo "<tr style='background:#000;'><td>$slno</td><td>$regno</td><td>$name</td><td>$gender<br>$dob</td><td>Mother: $mphone<br>Father: $fphone</td><td>$sphone</td><td>$branch<br>$sem</td><td><a href='stdpresent?regno=$regno&sub=$subcode&sem=$sem'><img src='images/correct.png' width='30px'/></a></td><td><a href='stdabsent?regno=$regno&sub=$subcode&sem=$sem'><img src='images/cross.png' width='30px'/></a></td></tr>";
                     }
                      else if($Astatus==1)
                     {
                             echo "<tr style='background:#000;'><td>$slno</td><td>$regno</td><td>$name</td><td>$gender<br>$dob</td><td>Mother: $mphone<br>Father: $fphone</td><td>$sphone</td><td>$branch<br>$sem</td><td></td><td></td></tr>";
                     }
                             
                         }
                     }
                     }
                     ?>
                     </table>
                         
                         </div>
      </div>
                  </div>
               </div>               
            </div>
         </div>
      </div>
      <!-- end six_box-->
       <!-- end six_box-->
       <?php include 'adminfooter.php';?>





