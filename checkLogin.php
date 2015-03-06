<?php

$host="mysql.cs.uky.edu"; // Host name 
$username="meth225"; // Mysql username 
$password="u0780919"; // Mysql password 
$db_name="meth225"; // Database name 
$tbl_name="users"; // Table name 
$tbl_name2 ="Staff";

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['login']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$sqlStaff="SELECT * FROM $tbl_name2 WHERE eid='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$resultStaff = mysql_query($sqlStaff);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$countStaff = mysql_num_rows($resultStaff);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1){

// Register $myusername, $mypassword and redirect to file "loginSuccess.php"
session_register($myusername);
session_register($mypassword); 

header("location:loginSuccess.php?varname=".$myusername);
}
else {
     if($countStaff==1){
         // Register $myusername, $mypassword and redirect to file "loginSuccess.php"
         session_register($myusername);
         session_register($mypassword); 

         header("location:loginSuccess.php?varname=".$myusername);
     }
     else{
          echo "Wrong Username or Password";
          echo "<br><h>Click <u><a href = 405g.php>here</a></u> to return to the main login page.</h>";
     }
}
?>