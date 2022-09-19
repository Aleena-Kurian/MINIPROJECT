<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {

    echo "Connection failed!";

}
if($_SERVER['REQUEST_METHOD']==="POST"){
	//insertion
	if(isset($_POST['submitl'])){
		if(!empty($_POST['email'])&& !empty($_POST['pswd'])){ 
		 function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }
		$email = validate($_POST['email']);
        $pass = validate($_POST['pswd']);
		$sql = mysqli_num_rows($conn,"SELECT * FROM users WHERE email='$email' AND password='$pass'");
        if (mysqli_num_rows($sql) === 1) {
            $row = mysqli_fetch_assoc($sql);
            if ($row['email'] === $email && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                header("Location: homepage.php");

                exit();
				}
	 
}
}
	}
}
?>