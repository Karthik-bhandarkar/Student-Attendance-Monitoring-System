<?php
        if(isset($_POST['login']))
        {
            $username=$_POST['uname'];
            $password=$_POST['pswd'];
            //echo "$username $password";
            include 'dbconfig.php';
            session_start();
            $sql="SELECT * FROM `student` WHERE `fphone`='$username' or `mphone`='$username' and `password`='$password';";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    $_SESSION['username']=$username;
                    $_SESSION['password']=$password;
                    echo '<META http-equiv="refresh" content="0;parenthome">';
                }
            }
            else{  
                 echo '<script>alert("username and password deosnot match")</script>';
                 echo '<META http-equiv="refresh" content="0;parents">';
            }
        }
        else 
        {
            echo '<META http-equiv="refresh" content="0;parents">';
        }
        ?>
   