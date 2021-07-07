<?php

   
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db2";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
	
	

?>
<!DOCTYPE html>
<html>
<head>
<style>

div.b1{
 margin-top: 150px;
 margin-left: 500px;
 margin-wright: 500px;
display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  padding: 10px;
}
div.b4{
	margin-left: 500px;
 margin-wright: 500px;
display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  padding: 10px;
}
div.b5{
	margin-left: 500px;
 margin-wright: 500px;
display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  padding: 10px;
}
div.b2{
margin-left: 500px;
 margin-wright: 500px;
	display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  padding: 10px;
}
div.b3{
 margin-left: 500px;
 margin-wright: 500px;
	display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  padding: 10px;
	{




</style>
</head>
<body>

<div class="b1">


				<button id="b1" style="color:lightblue" type="submit">Forward</button>
				
				
				</div>
				
<div class="b2">
				

					<button style="color:lightblue" type="submit">Left</button>
				</th>
				
				</div>
				
<div class="b3">
				

					<button style="color:red" type="submit">Stop</button>
				
				
				</div>
				
<div class="b4">


				<button style="color:lightblue" type="submit">Right</button>
				
				
				</div>
				
<div class="b5">


					<button style="color:lightblue" type="submit">Backward</button>
				
				
				</div>


</body>
</html>