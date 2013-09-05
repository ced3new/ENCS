<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];


if ($username&&$password){
   if ($username!=""){
      if ($password!=""){

      $connect = mysql_connect("localhost","root","") or die ("Couldn't Connect");
      mysql_select_db("users") or die ("Couldn't find database");
      $query = mysql_query("SELECT * FROM users_table WHERE username='$username'");
      $numrows = mysql_num_rows($query);
          if ($numrows!=0){
               while ($row = mysql_fetch_assoc($query)){
                     $dbusername = $row['username'];
                     $dbpassword = $row['password'];
                     $dbuser_fName = $row['fName'];
               }

               if ($password==$dbpassword){
                     echo "log in successful. ";
                     $_SESSION['username']=$dbuser_fName;
                     header('Location: session_checker.php');

                     /*
                     echo "Welcome, ".$_SESSION['username'];
                     echo "<br> <a href='logout.php'>log out</a>";
                     */
               }
               else{
                    die ("incorrect password...");
               }
          }
          else{
               die("user does not exist");
          }

      }
      else{
           echo "Error in database";
      }
   }

}
else {
     echo "Incorrect username and/or password";

}



?>