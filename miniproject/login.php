<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<script>
function verifyPassword() {
  var pw = document.getElementById("pswd").value;
 //minimum password length validation
  if(pw.length < 8) {
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
     return false;
  }

//maximum length of password validation
  if(pw.length > 15) {
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
     return false;
  }
 var cpw = document.getElementById("pswd2").value;
 if (pw!=cpw) {
     document.getElementById("message").innerHTML = "**Passwords should be same";
     return false;
  } 
  else {
     alert("successfully registered");
  }
}
</script>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form onsubmit ="return verifyPassword()" action="signupconnection.php" method="POST">
					<label for="chk" aria-hidden="true">Sign up</label> 
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" id="pswd" name="pswd" placeholder="Password" required="">
					<input type="password" name="pswd2" id="pswd2" placeholder="Confirm password" required="">
					<span id = "message" style="color:red"> </span> 
					<button name="submit" onClick="myFunction()">Sign Up</button>
				</form>
			</div>

			<div class="login">
				<form action="loginvalidation.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button name="submitl">Login</button>
				</form>
			</div>
	</div>
</body>
</html>