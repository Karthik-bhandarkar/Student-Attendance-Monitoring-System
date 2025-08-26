<?php
        if(isset($_POST['login']))
        {
            $username=$_POST['pname'];
            //$password=$_POST['pswd'];
            //echo "$username $password";
            include 'dbconfig.php';
            session_start();
            $sql="SELECT * FROM `student` WHERE `fphone`='$username';";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    $_SESSION['username']=$username;
                    //$_SESSION['password']=$password;
                    echo '<META http-equiv="refresh" content="0;parentshome">';
                }
            }
            else{  
                 echo '<script>alert("Phone Number Does not Exisit")</script>';
                 echo '<META http-equiv="refresh" content="0;parents">';
            }
        }
        else 
        {
            echo '<META http-equiv="refresh" content="0;parents">';
        }
        ?>
   