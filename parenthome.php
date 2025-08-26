<?php include 'parentheader.php';
?>
     <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
                 <div class="col-sm-12">
                   <div style="width: 100%;text-align: center"class="titlepage">
                       <h2></h2>
<form class="modal-content animate" action=" " method="POST">
                          <select name="sid" class="contactus"style="border-radius:5px;" required>
                                 <option select='true' disabled="true">Subject Code</option>
                                 <?php
                                 $sql="SELECT * FROM `student` WHERE `fphone`='$username' or mphone='$username';";
                            include 'dbconfig.php';
                          $result=$conn->query($sql);
                     if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()){
                            $name=$row['name'];
                            $regno=$row['regno'];
                         echo "<option value='$regno'>$name ($regno)</option>";
                                     }
                                 }
                                 ?>    
                             </select>
                            
    
                                 <button type="submit" name="search"> Search</button>
                           </form>
                       <h2>Student Attendance</h2>
                    
                     
                       <?php
                     if(isset($_POST['search']))
                         {
                         $sid=$_POST['sid'];
                         $sl=0;
                            include 'dbconfig.php';
                            $sql="SELECT * FROM `student` WHERE `regno`='$sid'";
                            //echo "SELECT * FROM `student` WHERE `regno`='$roll'";
                             $result=$conn->query($sql);
                            if($result->num_rows>0)
                            {
                             while($row=$result->fetch_assoc())
                            {
                                $name=$row['name'];
                                $sem=$row['sem'];
                            }
                            ?>
                    
                       <table border="2" width="100%">
                           <tr style='background:#403F3F;color:#ffffff;'>
                               <th>SIno</th>
                               <th>Subject</th>
                               <th>Classes</th>
                               <th>Percentage</th>
                               <th>Status</th>
                           </tr>
                     
                              <?php  
                            //echo $sem;
                                $sql1="SELECT * FROM `subject` WHERE `sem`='$sem'";
                             $result1=$conn->query($sql1);
                            if($result1->num_rows>0)
                            {
                             while($row1=$result1->fetch_assoc())
                            {
                                 $sname=$row1['name'];
                                 $subcode=$row1['subcode'];
                                 $sl++;
                                    $pcount=0;
                                    $count=0;
                                  $per=0;
                                  $sql3="SELECT * FROM `attendance` WHERE `sid`='$sid' and subid='$subcode';";
                            //echo "SELECT * FROM `attendance` WHERE `sid='$roll' and `datetime`='$datetime' and sid='$sid';";
                        
                          $result3=$conn->query($sql3);
                     if($result3->num_rows>0){
                         
                         
                        while ($row3=$result3->fetch_assoc()){
                            $count++;
                            $status=$row3['status'];
                           
                            if($status=="Present")
                            {
                                $pcount++;
                            }
                        }
                        $per=($pcount/$count)*100;
                        $per=  number_format($per, 2);
                         
                        }if($per < 75 )
                       {
   
                              //echo "$pcount $count $per <br>";
                               echo"<tr style='background:#403F3F;color:#ffffff;'><td>$sl</td><td>$sname</td><td>$pcount / $count</td><td>$per%</td><td style='color:red'>Not Eligible Attendance is bellow 75%</td></tr>";
                           
                       }  else {
                           echo "<tr style='background:#403F3F;color:#ffffff;'><td>$sl</td><td>$sname</td><td>$pcount / $count</td><td>$per%</td><td>Eligible</td></tr>";
                       }      
                             
                            }
                            }
                        ?>  </table><?php
                         }
                         
                         
                                        
                         }
                   
                         ?>
                         
               </div>               
            </div>
         </div>
      </div>
</div>
       <?php include 'footer.php';?>