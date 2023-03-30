<html>
<body> 

<?php


$link = mysqli_connect("localhost", "root", "", "school");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">sname<br><hr></th>
				<th width="250px">lname<br><hr></th>

                <th width="250px">sid<br><hr></th>
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT sname , lname , sid FROM STUDENT");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['sid']}</th>
				<th>{$row['sname']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


