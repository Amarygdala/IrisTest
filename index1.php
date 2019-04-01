<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Iris Test Form</title>
		<link rel="stylesheet" href="style.css">
	<body>
<form action="action.php" method="POST">
   <div class="login-box">
   	<h1>Iris Test Form</h1>
    <input type= "number" step="any" name="sepal_lengp" placeholder="Sepal Length">
    <input type= "number" step="any" name="sepal_widthp" placeholder="Sepal Width">
    <input type= "number" step="any" name="petal_lengp" placeholder="Petal Length">
    <input type= "number" step="any" name="petal_widthp" placeholder="Petal Width">
    <select name="Flower_type">
    	<option value="" disabled selected>Flower type</option>
    	<option value="Iris-setosa">Iris-setosa</option>
    	<option value="Iris-versicolor">Iris-versicolor</option>
    	<option value="Iris-virginica">Iris-virginica</option>
    </div>
 </select>
    <input type="submit">
</form>
<form action="deleteRecord.php" method="POST">
	<button type="submit">Delete Records</button>
</form>
</body>
</html>