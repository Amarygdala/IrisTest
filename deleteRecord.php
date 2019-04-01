<html>
<header>
<title>

</title>

</header>
<body>
	Enter the ID of the record you wish to delete.
<form action="" method="POST">
    <input type= "number" name="ID" placeholder="ID">
    <input type="submit">
</form>
<?php

	include("C:\Users\Dshop\Desktop\maybexampp\htdocs\Iristestproject\connection.php");
    $sql = "SELECT * FROM iris;";
    $result = mysqli_query( $connection, $sql );

    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
    	    	$space="&nbsp;&nbsp;&nbsp;";
    	echo "ID"."$space"."Sepal Length"."$space". "Sepal Width"."$space"."Petal Length"."$space"."Petal Width"."$space"."Flower Type"."$space". "<br>";
	    while($all =mysqli_fetch_assoc($result) ){
	    	echo $all['id']."$space$space$space$space$space";
	        echo $all['Sepal_length']."$space$space$space$space$space";
	        echo $all['Sepal_width']."$space$space$space$space$space";
	        echo $all['Petal_length']."$space$space$space$space$space" ;
	        echo $all['Petal_width']."$space$space$space$space$space" ;
	        echo $all['Flower_type'] . "<br>";

	}
}
	$deleteID=$_POST['ID']??'';
	$dbDelete = "DELETE FROM `iris` WHERE `iris`.`id` = $deleteID";
	mysqli_query( $connection, $dbDelete); 
  
?>
