<?php include 'facultyheader.php';?>
<div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
                 <div class="col-sm-12">
                   <div style="width: 100%;text-align: center"class="titlepage">
                       
                       
                       <form class="modal-content animate" action=" " method="post">
                           <input type="text" class="contactus"style="border-radius:5px;" name="roll" required placeholder="Enter Roll Number">    
                                <button type="submit" name="rollno"> Search</button>
                           </form>
                       <h1>Student List</h1>
                        <?php
                        if(isset($_POST['rollno']))
                         {
                            $sl=0;
                            include 'dbconfig.php';
                            $roll=$_POST['roll'];
                            $sql="SELECT * FROM `student` WHERE `regno`='$roll'";
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
                       <h2><?php echo $name;?></h2>
                       <table border="2" width="100%">
                           <tr style='background:#403F3F;color:#ffffff;'>
                               <th>SIno</th>
                               <th>Subject</th>
                               <th>Classes</th>
                               <th>Percentage</th>
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
                                  $sql3="SELECT * FROM `attendance` WHERE `sid`='$roll' and subid='$subcode';";
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
                         
                        }
                              //echo "$pcount $count $per <br>";
                               echo"<tr style='background:#403F3F;color:#ffffff;'><td>$sl</td><td>$sname</td><td>$pcount / $count</td><td>$per%</td></tr>";
                                 
                             
                            }
                            }
                        ?>  </table><?php
                         }
                         }?>
                    
                       <?php
                     if(isset($_POST['rol']))
                         {
                         
                         $roll=$_POST['roll'];
                         //echo $roll;
                         include 'dbconfig.php';
                         $count=0;
                         echo "<table border=\"2\" width=\"100%\">";
                        $sql="SELECT DISTINCT datetime FROM `attendance` WHERE  sid='$roll'";
                        echo "<tr style='background:#403F3F;color:#ffffff;'><th>SLNO</th><th>Name and Regno</th>";
                        $result=$conn->query($sql);
                        if($result->num_rows>0)
                        {
                       
                            while($row=$result->fetch_assoc()){
                            $datetime=$row['datetime'];
                            $count++;
                            echo "<th width='10px'>$datetime</th>";
                      }
                    }
                    echo "<th>Classes</th><th>Percentage</th></tr>";
                           $sql="SELECT DISTINCT sid FROM `attendance` WHERE sid='$roll'";
                           $result=$conn->query($sql);
                    if($result->num_rows>0){
                        $slno=0;
                      while($row=$result->fetch_assoc()){
                          $slno++;
                          $sid=$row['sid'];
                          $sql1="SELECT * FROM `student` WHERE `regno`='$sid';";
                        
                          $result1=$conn->query($sql1);
                     if($result1->num_rows>0){
                        while ($row1=$result1->fetch_assoc()){
                            $name=$row1['name'];
                        }
                     } 
                        if($slno%2==0)
                          {
                              echo "<tr>";
                          }
                          else{
                              echo "<tr style='background:#D8D4D4;'>";
                          }
                          echo "<th>$slno</th><th>$name ($sid)</th>";
                           $pcount=0;
                          $sql2="SELECT DISTINCT datetime FROM `attendance` WHERE sid='$roll'"; 
                          $result2=$conn->query($sql2);
                     if($result2->num_rows>0){
                        while ($row2=$result2->fetch_assoc()){
                            $datetime=$row2['datetime'];
                            echo '<td>';
                            $sql3="SELECT * FROM `attendance` WHERE `sid`='$roll' and `datetime`='$datetime' and sid='$sid';";
                            //echo "SELECT * FROM `attendance` WHERE `sid='$roll' and `datetime`='$datetime' and sid='$sid';";
                        
                          $result3=$conn->query($sql3);
                     if($result3->num_rows>0){
                         
                         
                        while ($row3=$result3->fetch_assoc()){
                            $status=$row3['status'];
                            
                            echo "$status";
                            if($status=="Present")
                            {
                                $pcount++;
                            }
                        }
                        $per=($pcount/$count)*100;
                        $per=  number_format($per, 2);
                        }
                        echo "</td>";
                     } 
                      }
                      echo "<th>$pcount / $count</th><th>$per%</th></tr>";
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
       <?php include 'adminfooter.php';?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

