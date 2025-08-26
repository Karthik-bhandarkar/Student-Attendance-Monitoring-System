<?php include 'adminheader.php';?>
      <!-- six_box-->
      <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
                 <div class="col-sm-12">
                   <div style="width: 100%;text-align: center"class="titlepage">
                     <h2>Add Subject</h2>
                     <form class="modal-content animate" action="addsubjectdb" method="post">
    

    <div class="container" style="text-align: left;">
        
        <label for="subname"><b>SUBJECT NAME</b></label>
      <input type="text" placeholder="Enter Name" name="subname" required>
      
      <label for="subcode"><b>SUBJECT CODE</b></label>
      <input type="text" placeholder="Enter Subject Code" name="subcode" required>
      
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
