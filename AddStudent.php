<?php

//mysqli_connect() function establishes a connection with MySQL server and returns the connection as an object.
/*
   $host = "sdb-58.hosting.stackcp.net";
   $username  = "student71-3530313743be";
   $passwd = "ua92-studentAc";
   $dbname = "student71-3530313743be";
*/
$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student71-3530313743be", "ua92-studentAc", "student71-3530313743be");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
The isset() function checks whether a variable
 is set, which means that it has to be declared 
 and is not NULL. 
 This function returns true if the variable
  exists and is not NULL, 
  otherwise it returns false.
*/
if (isset($_POST['submit'])) {

  $sid=$_post['sid'];
 
  $sname=$_post['sname'];

   
  $lname=$_post['lname'];
   
/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query 
on the database
*/
    $sql = "INSERT INTO STUDENT (sid, sname, lname) VALUES ('$sid,'$sname','$lname')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>