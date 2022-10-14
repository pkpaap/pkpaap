<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
<?php

$servername = "34.69.143.247";
$username = "prem";
$password = "12345678";
$dbname = "pk";

// Create connection
$conn = mysqli_connect("34.69.143.247","prem","12345678","pk");

// Check connection
if ($conn==false) { die("ERROR : Could not connect. "
    . mysqli_connect_error());
}
$Name=$_REQUEST['Name'];
$Mail=$_REQUEST['Mail'];
$Subject=$_REQUEST['Subject'];
$sql = "INSERT INTO darloo VALUES
	('$Name', '$Mail', '$Subject','$Messege')";
if(mysqli_query($conn, $sql)){
	echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data
		    </h3>";

	echo nl2br("\n$Name\n $Mail\n "
		. "$Subject\n $Messege");
} else{
	echo "ERROR: Hush! Sorry $sql. "
		. mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);


/*$sql = "select * from test";
    $result = ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 
  
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }*/
?>
<style>
    td,th {
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
        text-align: center;
    }
</style>
<table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Branch</th>
                <th>Roll Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
            <tr>
  
                <td><?php echo $rows['Name']; ?></td>
                <td><?php echo $rows['Mail']; ?></td>
                <td><?php echo $rows['Subject']; ?></td>
  
            </tr>
            <?php } ?>
        </tbody>
    </table>
</center>
</body>
</html>
