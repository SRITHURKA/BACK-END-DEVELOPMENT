<html>
<body> 

<?php


$link = mysqli_connect("localhost", "root", "", "school");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Parent ID<br><hr></th>
				<th width="250px">Parent Name<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT pid, pname  FROM parent");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['pid']}</th>
				<th>{$row['pname']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

