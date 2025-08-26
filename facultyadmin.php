<?php include 'adminheader.php';?>
      <!-- six_box-->
      <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
                 <div class="col-sm-12">
                   <div style="width: 100%;text-align: center"class="titlepage">
                     <h2>Faculty Registration</h2>
                     <form class="modal-content animate" action="addfacultydb" method="post">
    

    <div class="container" style="text-align: left;">
        
        <label for="name"><b>NAME</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      
      <select name="designation" required>    
            <option selected="true" disabled="true">Select Designation</option>
          <option>Principal</option>
          <option>Head Of the Department</option>
          <option>Lecturer</option>
          </select>
      
            
    <select name="branch" >    
            <option selected="true" disabled="true">Select Branch</option>
          <option>Computer Science</option>
          <option>Civil</option>
          <option>Electronics & Communication</option>
          </select>
      
      <label for="phone"><b>PHONE NO</b></label>
      <input type="number" placeholder="Enter Phone Number" min="999999999" max="9999999999" class="mytext" name="phone" required>

      <label for="pswd"><b>PASSWORD</b></label>
      <input type="password" placeholder="Enter Password" min="99999" max="999999" name="pswd" required>
      
       <label for="rpswd"><b>RE-ENTER PASSWORD</b></label>
      <input type="password" placeholder="Re-Enter to confirm your Password" name="rpswd" required>
        
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
