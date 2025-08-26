<?php include 'adminheader.php';?>

 <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
                 <div class="col-sm-12">
                   <div style="width: 100%;text-align: center"class="titlepage">
                     <h2>Select Branch and Sem</h2>
                     <form class="modal-content animate" action=" " method="post">
    

    <div class="container" style="text-align: left;">   
      
      <select name="branch" required>    
            <option selected="true" disabled="true">select branch</option>
          <option>Computer Science</option>
          <option>Civil</option>
          <option>Electronics & Communication</option>
          </select>
      
     
      <select name='sem' required>
          <option selected="true" disabled="true">select sem</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
      </select>
              
      <button type="submit" name="view">submit</button>
      
    </div>

    
                     </form><BR>
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
      </div>
                  </div>
               </div>               
            </div>
         </div>
      </div>    

<?php include 'adminfooter.php';?>