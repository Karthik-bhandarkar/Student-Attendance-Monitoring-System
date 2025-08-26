<?php include 'adminheader.php';?>
      <!-- six_box-->
      <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
                 <div class="col-sm-12">
                     
                     <form class="modal-content animate" action="addallotdb" method="post">
                   <div style="width: 100%;text-align: center"class="titlepage">
                     <h2>Subject Allotment</h2>
    
                         <div class="col-md-12">
                             <div style="width: 100%;text-align: left"class="titlepage">
                              <label for="subname"><b>SELECT FACULTY</b></label>
                              <select name="fid" class="contactus"style="border-radius:5px;" required>
                                 <option select='true' disabled="true">Faculty Name</option>
                                 <?php
                                 $sql="SELECT * FROM `faculty`";
                                 include 'dbconfig.php';
                                 $result=$conn->query($sql);
                                 if($result->num_rows>0){
                                     while($row=$result->fetch_assoc()){
                                         $id=$row['id'];
                                         $name=$row['name'];
                                         echo "<option value=$id>$name</option>";
                                     }
                                 }
                                 ?>                                 
                             </select>
                         </div>
                             </div>
                          <div class="col-md-12">
                               <div style="width: 100%;text-align: left"class="titlepage">
                                   <label for="subname"><b>SELECT SUBJECT</b></label>
                             <select name="subcode" class="contactus"style="border-radius:5px;" required>
                                 <option select='true' disabled="true">Subject Name</option>
                                 <?php
                                 $sql="SELECT * FROM `subject`";
                                 include 'dbconfig.php';
                                 $result=$conn->query($sql);
                                 if($result->num_rows>0){
                                     while($row=$result->fetch_assoc()){
                                         $subcode=$row['subcode'];
                                         $name=$row['name'];
                                         echo "<option value=$subcode>$name</option>";
                                     }
                                 }
                                 ?>
                                 
                             </select>
                         </div>
                         </div>
                         </div>
    <div class="container" style="text-align: left;">   
        
      <button type="submit" name="add">ADD</button>
      
    </div>

    
  </form>
      </div>
                  </div>
               </div>               
            </div>
         </div>
      </div>
      <!-- end six_box-->
       <!-- end six_box-->
       <?php include 'adminfooter.php';?>
