
<?php
    session_start();
    require 'dbconfig.php';
        if(isset($_POST["submit"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
        
        $con = mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
        mysql_select_db($dbname) or die('cannot select db');
        
        $query = mysql_query("SELECT * FROM login WHERE email='$email' AND password='$password'");
        $numrows = mysql_num_rows($query);
        
        if($numrows != 0){
            while($row=mysql_fetch_assoc($query)){
                $dbemail = $row['email'];
                $dbpassword = $row['password'];
            }
            if($email == $dbemail && $password == $dbpassword){
                $_SESSION['email'] = $email;
                
                header("location:index.php");
            }
        } else {
            echo "invalid email or password";
        }
        }
?>