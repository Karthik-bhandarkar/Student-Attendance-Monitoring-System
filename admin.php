<?php include 'header.php';?>
       <!-- six_box-->
      <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                   
                   <div style="width: 100%;text-align: center"class="titlepage">
                     <h2> Login</h2>
                     <form class="modal-content animate" action="adminlogin" method="POST"> 
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <input type="submit" value="Login" name="login" style="width:100%;color:#fff;background: #7f1410e6;"/>
    </div>
  </form>
      </div>
                  </div>
               </div>               
            </div>
         </div>
      </div>
      <!-- end six_box-->
       <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="titlepage">
                     <h2>About SAM</h2>
                     <p>It is a Attendance Monitoring System </p>
                  </div>
               </div>
               <div class=" col-sm-12">
                  <div class="about_box">
                     <div class="row d_flex">
                        <div class="col-md-5">
                           <div class="about_box_text">
                              <h3>Get Your Attendance</h3>
                              <p>Used to track student's attendance, absentee record, attendance history.
                                  DON't BE LATE..
                                  BE PANCTUAL..!
                              </p>
                              </div>
                        </div>
                        <div class=" col-md-7  pppp">
                           <div class="about_box_img">
                              <figure><img src="images/about_img.png" alt="#" /></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include 'footer.php';?>