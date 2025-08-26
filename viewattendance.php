<?php include 'facultyheader.php';?>
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
                                         echo "<option>$subcode</option>";
                                     }
                                 }
                                 ?>    
                             </select>
    
        <input type="date"  name="adob" required>          
                 
                                 <button type="submit" name="search"> Search</button>
                           </form>
                       <h2>Student List</h2>
                     <table align="center" width="100%">
                         <tr><th>Slno</th><th>Reg No</th><th>Name</th><th>status</th></tr>
                     
                       <?php
                     if(isset($_POST['search']))
                         {
                         $subcode=$_POST['subcode'];
                         $date=$_POST['adob'];
                         $d=strtotime($date);
$date=date("d/m/Y", $d);
                         //echo $today;
                         $sql="SELECT * FROM `attendance` WHERE `subid`='$subcode' and `datetime`='$date';";
                         
                          $result=$conn->query($sql);
                     if($result->num_rows>0){
                         $slno=0;
                         while ($row=$result->fetch_assoc()){
                             $slno++;
                             $sid=$row['sid'];
                             $status=$row['status'];
                             $sql1="SELECT * FROM `student` WHERE `regno`='$sid';";
                        
                          $result1=$conn->query($sql1);
                     if($result1->num_rows>0){
                        while ($row1=$result1->fetch_assoc()){
                            $name=$row1['name'];
                        }
                     } 
                     if($status=="Present")
                     {
                             echo "<tr style='background:#ADFDB2;'><td>$slno</td><td>$sid</td><td>$name</td><td>$status</td></tr>";
                     }
                     else{
                          echo "<tr style='background:#FDADB2;'><td>$slno</td><td>$sid</td><td>$name</td><td>$status</td></tr>";
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
<?php include 'adminfooter.php';?>