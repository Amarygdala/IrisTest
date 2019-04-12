<html>
<header>
<link rel="stylesheet" href="styletable.css">

</header>
<body>
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

    if($resultCheck>0){
        echo "  <tr><th>ID</th><th>Sepal Length</th><th>Sepal Width</th><th>Petal Length</th><th>Petal Width</th><th>Flower Type</th></tr>";
      while($all =mysqli_fetch_assoc($result) ){

          echo "<tr><td>" . $all['id'] . "</td><td>" . $all['Sepal_length'] . "</td><td>". $all['Sepal_width'] . "</td><td>". $all['Petal_length'] . "</td><td>". $all['Petal_width'] . "</td><td>". $all['Flower_type'] . "</td></tr>"; 
}

echo "</table>"; //Close the table in HTML
echo "<form action='index1.php'><button type='submit'>Back To Form</button></form>";
  }

?>
