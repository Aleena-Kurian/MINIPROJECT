<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
if($_SERVER['REQUEST_METHOD']==="POST"){
	//insertion
	if(isset($_POST['submit'])){
		if(!empty($_POST['email'])&& !empty($_POST['pswd'])&& !empty($_POST['pswd2'])){ 
     $email = $_POST['email'];
     $password = $_POST['pswd'];
     $sql = "INSERT INTO `customer_login` (`email`,`password`)
     VALUES ('$email','$password')";
	 header("Location:homepage.php");
	 if ($conn->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	 
}
}
}
?>