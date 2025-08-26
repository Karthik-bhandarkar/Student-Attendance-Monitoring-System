<?php
        if(isset($_POST['login']))
        {
            $username=$_POST['fid'];
            $password=$_POST['fpswd'];
            //echo "$username $password";
            include 'dbconfig.php';
            session_start();
            $sql="SELECT * FROM `faculty` WHERE `id`='$username' and `password`='$password';";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    $_SESSION['username']=$username;
                    $_SESSION['password']=$password;
                    echo '<META http-equiv="refresh" content="0;facultyhome">';
                }
            }
            else{  
                 echo '<script>alert("username password deosnot match")</script>';
                 echo '<META http-equiv="refresh" content="0;faculty">';
            }
        }
        else 
        {
            echo '<META http-equiv="refresh" content="0;faculty">';
        }
        ?>
   