

<html>
<head>
<title></title>
<link href="nav_bar.css" rel="stylesheet" type="text/css">
</head>
<body>



   <div>
   <?php
   session_start();
   echo '<a id="welcomer" class="navtext">Welcome, '.$_SESSION['username'].'. <a href="logout.php" id="welcomer">Log out'.'</a>';

   ?>
   <hr>
      <img src="encs_logo.png" id="navbar_logo">

      <ul id="navbar">
          <li><a href="main.php" class="navtext">Home</a></li>
          <li><a href="test.php" class="navtext">???</a></li>
          <li><a href="#" class="navtext">Users</a>
             <ul>
                 <li class="noBorder"><a href="new_user_main.php" class="navtext">Create New User</a></li>
                 <li class="noBorder"><a href="query_user_main.php" class="navtext">Query User</a></li>
             </ul>
          </li>
          <li id="patient"><a href="#" class="navtext">Patient</a>
             <ul>
                 <li class="noBorder"><a href="#" class="navtext">Create New Patient</a></li>
                 <li class="noBorder"><a href="#" class="navtext">Query Patient</a></li>
             </ul>
          </li>
          <li><a href="#" class="navtext">Notes</a>
             <ul>
                 <li class="noBorder"><a href="#" class="navtext">Create New Note</a></li>
                 <li class="noBorder"><a href="#" class="navtext">Query Note</a></li>
             </ul>
          </li>
          <li class="noBorder"><a href="#" class="navtext">Help</a></li>
      </ul>
   </div>
   <hr>
   <br><br>
</body>
</html>

