
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Iris Test Form</title>
		<link rel="stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="/old/jquery-3.4.0.js"></script>
        <script src="/old/parallax.js-1.5.0/"></script>
    </head>
	<body>

<div class="burger">
    <button onclick="dropFunction()" class="dropbtn"></button>
    <div id="dropMenu" class="menuContent">
        <a href="index1.php">Form</a>
        <a href="showTable.php">Show Table</a>
        <a href="deleteRecord.php">Delete Record</a>
    </div>
</div>

<div class="burger"></div>
<div class="burger"></div>

</head>
<body>
<div class="parallax-window" data-parallax="scroll" data-image-src="bg.jpg">

<script type="text/javascript">
    function dropFunction(){
        document.getElementById("dropMenu").classList.toggle("show");
    }
    window.onclick = function(event){
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("menuContent");
            var i;
            for(i=0;i<dropdowns.length;i++){
                var openDropdown=dropdowns[i];
                if(openDropdown.classList.contains('show')){
                    openDropdown.classList.remove('show');
                }
                +
            }
        }
    }
</script>
    <script language="JavaScript" type="text/javascript">
<!--
var Path='/images';
var ImgAry=new Array("setosa.jpg","versicolour.jpg","virginica.jfif");
var $=document.getElementByIdName;

function Swap(obj,Class){
 var i=obj.selectedIndex;
 if (i<1){ return; }
 $(id).src="/images"+ImgAry[i];
}
        </script>   

<form action="action.php" method="POST">

   	<h1>Iris Test Form</h1> 
<div class="formclass">
    <select onchange="Swap(this,'MyImg');" >
    <label for="sepal_lengp">Sepal Length:</label>
    <input type= "number" step="any" name="sepal_lengp">
    <label for="sepal_widthp">Sepal Width:</label>
    <input type= "number" step="any" name="sepal_widthp">
    <label for="petal_lengp">Petal Length:</label>
    <input type= "number" step="any" name="petal_lengp">
    <label for="petal_widthp">Petal Width:</label>
    <input type= "number" step="any" name="petal_widthp">
    <label for="Flower_type">Flower Type:</label>
    <select name="Flower_type">
    	<option value="Iris-setosa">Iris-setosa</option>
    	<option value="Iris-versicolor">Iris-versicolor</option>
    	<option value="Iris-virginica">Iris-virginica</option>
        <img id="MyImg" src="/images/setosa.jpg" width=50 height=50 >
     
        
 </select>
    <button type="submit">Submit</button>

</form>

</div>
</div>
</body>
<img src="sap.png">