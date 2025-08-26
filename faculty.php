
<?php include 'header.php';?>
      <!-- six_box-->
      <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
                 <div class="col-sm-12">
                   <div style="width: 100%;text-align: center"class="titlepage">
                     <h2>Faculty Login</h2>
                     <form class="modal-content animate" action="facultylogin" method="post">
    

    <div class="container">
      <label for="fid"><b>Faculty ID</b></label>
      <input type="text" placeholder="Enter Faculty ID" name="fid" required>

      <label for="fpswd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="fpswd" required>
        
      <button type="submit" name="login">Login</button>
      
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
       <?php include 'footer.php';?>