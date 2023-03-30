<?php


$link = mysqli_connect("localhost", "root", "", "school");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $pname = $_POST['parentName'];
   

    $sql = "INSERT INTO parent (pname) VALUES ('$pname')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>