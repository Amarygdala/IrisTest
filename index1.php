<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Iris Test Form</title>
		<link rel="stylesheet" href="style.css">
	<body>
<div class="burger"></div>
<div class="burger"></div>
<div class="burger"></div>
<form action="action.php" method="POST">

   	<h1>Iris Test Form</h1> 
<div class="formclass">
    <label for="sepal_lengp">Sepal Length:</label>
    <input type= "number" step="any" name="sepal_lengp">
    <label for="sepal_widthp">Sepal Width:</label>
    <input type= "number" step="any" name="sepal_widthp">
    <label for="petal_lengp">Petal Lenth:</label>
    <input type= "number" step="any" name="petal_lengp">
    <label for="petal_widthp">Petal Width:</label>
    <input type= "number" step="any" name="petal_widthp">
    <label for="Flower_type">Flower Type:</label>
    <select name="Flower_type">
    	<option value="Iris-setosa">Iris-setosa</option>
    	<option value="Iris-versicolor">Iris-versicolor</option>
    	<option value="Iris-virginica">Iris-virginica</option>

 </select>
    <button type="submit">Submit</button>

</form>
<form action="deleteRecord.php" method="POST">
	<button type="submit">Delete Records</button>
</form>
<form action="showTable.php" method="POST">
    <button type="submit">Show Table</button>
</form>
</div>

</body>
</html>