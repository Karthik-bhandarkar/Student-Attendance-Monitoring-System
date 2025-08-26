<?php include 'adminheader.php';?>
      <!-- six_box-->
      <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
                 <div class="col-sm-12">
                   <div style="width: 100%;text-align: center"class="titlepage">
                     <h2>Student Registration</h2>
                     <form class="modal-content animate" action="addstudentdb" method="post">
    

    <div class="container" style="text-align: left;">
       <label for="regno"><b>Reg No</b></label>
      <input type="text" placeholder="Enter Register Number" name="regno" required>
      
       <label for="name"><b>NAME</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      
        <label for="dob"><b>DOB</b></label>
        <input type="date" placeholder="Enter DOB" name="dob" >
        
        <select name="gender" required>    
            <option selected="true" disabled="true">Select Gender</option>
          <option>MALE</option>
          <option>FEMALE</option>
          <option>OTHER</option>
          </select>
      
        
      <select name="branch" required>    
            <option selected="true" disabled="true">Select Branch</option>
          <option>Computer Science</option>
          <option>Civil</option>
          <option>Electronics & Communication</option>
          </select>
      
      <select name='sem' required>
          <option selected="true" disabled="true">Select Semester</option>
          <option>1 Sem</option>
          <option>2 Sem</option>
          <option>3 Sem</option>
          <option>4 Sem</option>
          <option>5 Sem</option>
          <option>6 Sem</option>
      </select>
      
      <label for="sphone"><b>STUDENT PHONE NO</b></label>
      <input type="number"  placeholder="Enter Student Phone Number" min="999999999" max="9999999999" class="mytext" name="sphone" required>
        
      <label for="mphone"><b>MOTHER PHONE NO</b></label>
      <input type="number" placeholder="Enter Mother Phone Number"  min="999999999" max="9999999999" class="mytext" name="mphone" >
      
      <label for="fphone"><b>FATHER PHONE NO</b></label>
      <input type="number" placeholder="Enter Father Phone Number"  min="999999999" max="9999999999" class="mytext" name="fphone" required>
      <label for="pswd"><b>PASSWORD</b></label>
      <input type="password" placeholder="Enter Password" name="pswd" required>
      
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
