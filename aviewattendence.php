<?php include 'adminheader.php';?>
<div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
                 <div class="col-sm-12">
                   <div style="width: 100%;text-align: center"class="titlepage">
                        <form class="modal-content animate" action=" " method="post">
                          
                             <select name="subcode" class="contactus"style="border-radius:5px;" required>
                                 <option select='true' disabled="true">Subject Code</option>
                                 <?php
                                 $sql="SELECT * FROM `subject`";
                                 include 'dbconfig.php';
                                 $result=$conn->query($sql);
                                 if($result->num_rows>0){
                                     while($row=$result->fetch_assoc()){
                                         $subcode=$row['subcode'];
                                         $name=$row['name'];
                                         echo "<option value='$subcode'>$subcode ($name)</option>";
                                     }
                                 }
                                 ?>    
                             </select>
    
                                 <button type="submit" name="search"> Search</button>
                           </form>
                       
                       <h2>Student List</h2>
                       <?php
                     if(isset($_POST['rollno']))
                         {
                         
                         $roll=$_POST['roll'];
                         //echo $roll;
                         include 'dbconfig.php';
                         $count=0;
                         echo "<table border=\"2\" width=\"100%\">";
        $sql="SELECT DISTINCT datetime FROM `attendance` WHERE  sid='$roll'";
        echo "<tr style='background:#403F3F;color:#ffffff;'><th>SLNO</th><th>Name and Regno</th>";
         $result=$conn->query($sql);
                    if($result->num_rows>0){
                       
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
                     
                       <?php
                     if(isset($_POST['search']))
                         {
                         $subcode=$_POST['subcode'];
                         //echo $subcode;
                         include 'dbconfig.php';
                         $count=0;
                         echo "<table border=\"2\" width=\"100%\">";
        $sql="SELECT DISTINCT datetime FROM `attendance` WHERE subid='$subcode'";
        //echo "SELECT DISTINCT datetime FROM `attendance` WHERE subid='$subcode'";
        echo "<tr style='background:#403F3F;color:#ffffff;'><th>SLNO</th><th>Name and Regno</th>";
         $result=$conn->query($sql);
                    if($result->num_rows>0){
                       
                      while($row=$result->fetch_assoc()){
                          $datetime=$row['datetime'];
                          $count++;
                          echo "<th width='10px'>$datetime</th>";
                      }
                    }
                    echo "<th>Classes</th><th>Percentage</th></tr>";
                           $sql="SELECT DISTINCT sid FROM `attendance` WHERE subid='$subcode'";
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
                          $sql2="SELECT DISTINCT datetime FROM `attendance` WHERE subid='$subcode'"; 
                          $result2=$conn->query($sql2);
                     if($result2->num_rows>0){
                        while ($row2=$result2->fetch_assoc()){
                            $datetime=$row2['datetime'];
                            echo '<td>';
                            $sql3="SELECT * FROM `attendance` WHERE `subid`='$subcode' and `datetime`='$datetime' and sid='$sid';";
                         
                        
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
       <?php include 'adminfooter.php';?>