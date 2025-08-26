<?php include 'adminheader.php';?>

<form class="modal-content animate" action=" " method="post">
    <div class="container" style="text-align: left;">   
      
      <select name="branch" required>    
            <option selected="true" disabled="true">select branch</option>
          <option>Computer Science</option>
          <option>Civil</option>
          <option>Electronics & Communication</option>
          </select>
      
    
              
      <button type="submit" name="view">submit</button>
      
    </div>
</form>


<?php 
if(isset($_POST['view']))
{
    ?>

<h2>Faculty List</h2>
                     <table align="center" width="100%">
                         <tr><th>Slno</th><th>Name</th><th>Branch</th><th>Designation</th><th>Phone number</th></tr>
                     <?php
                     $branch=$_POST['branch'];
                     $sql="SELECT * FROM `faculty` WHERE `branch`='$branch';";
                     include 'dbconfig.php';
                     $result=$conn->query($sql);
                     if($result->num_rows>0){
                         $slno=0;
                         while ($row=$result->fetch_assoc()){
                             $slno++;
                             $id=$row['id'];
                             $name=$row['name'];
                             $branch=$row['branch'];
                             $designation=$row['designation'];
                             $phoneno=$row['phoneno'];
                             
                             echo "<tr><td>$slno</td><td>$name</td><td>$branch</td><td>$designation</td><td>$phoneno</td></tr>";
                         }
                     }
}
                   ?>
                   
                     </table>
<?php include 'adminfooter.php';?>