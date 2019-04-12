<html>
<header>
<link rel="stylesheet" href="styletable.css">

</header>
<body>
	<h3>Enter the ID of the record you wish to delete.</h3>
<form action="" method="POST">
    <input type= "number" name="ID" placeholder="ID">
    <button type="submit">Delete</button>
</form>
<form action='index1.php'>
  <button type='submit'>Back To Form</button>
</form>
<?php

	include("C:\Users\Dshop\Desktop\maybexampp\htdocs\Iristestproject\connection.php");
    $sql = "SELECT * FROM iris;";
    $sql1="SELECT * FROM iris WHERE Sepal_length = 5";
    $result = mysqli_query( $connection, $sql );
echo "<table id='datatable'>";
    $resultCheck = mysqli_num_rows($result);
	if(isset($_POST['ID'])){
		header("Location:/Iristestproject/index1.php");
	}
    if($resultCheck>0){
	    	echo "  <tr><th>ID</th><th>Sepal Length</th><th>Sepal Width</th><th>Petal Length</th><th>Petal Width</th><th>Flower Type</th></tr>";
	    while($all =mysqli_fetch_assoc($result) ){

	        echo "<tr><td>" . $all['id'] . "</td><td>" . $all['Sepal_length'] . "</td><td>". $all['Sepal_width'] . "</td><td>". $all['Petal_length'] . "</td><td>". $all['Petal_width'] . "</td><td>". $all['Flower_type'] . "</td></tr>"; 
}

echo "</table>"; //Close the table in HTML
echo "<form action='' method='POST'><input type= 'number' name='ID' placeholder='ID'><button type='submit'>Delete</button></form>";
echo "<form action='index1.php'><button type='submit'>Back To Form</button></form>";
	}

	$deleteID=$_POST['ID']??'';
	$dbDelete = "DELETE FROM `iris` WHERE `iris`.`id` = $deleteID";
	mysqli_query( $connection, $dbDelete); 


?>
