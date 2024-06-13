<!DOCTYPE html>
<html>
<meta charset="utf-8">
</head>
<body>
<?php
require('db_con.php');

function register_user($username, $password, $name) { // Include name as a parameter
  global $conn; // Access global connection variable

  $username = mysqli_real_escape_string($conn, $username);
  $name = mysqli_real_escape_string($conn, $name); // Sanitize name as well
  $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash password securely

  $query = "INSERT INTO `users` (username, password, name) VALUES ('$username', '$hashed_password', '$name')";
  $result = mysqli_query($conn, $query);

  return $result;
}

if (isset($_REQUEST['username'])) {
  $username = stripslashes($_REQUEST['username']);
  $password = stripslashes($_REQUEST['password']);
  $name = stripslashes($_REQUEST['name']);

  $registration_result = register_user($username, $password, $name); // Pass name as argument

  if ($registration_result) {
    echo " <div class='form'>
    <h3>You are registered successfully.</h3>
    <br/>Click here to <a href='login.php'>Login</a></div>";
    header('location: login.php');
  } else {
    echo "Registration failed. Please try again.";
  }
} else {
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="name" placeholder="Email" required />  <input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
<style>


  

  
  body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
    min-height: 100vh;
	align-items: center;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}

label{
	color: black;
	justify-content: center;
	display: flex;
	margin: 0px;
	font-weight: bold;
	cursor: pointer;
}
input{
	width: 80%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px;
	padding: 12px;
	border: none;
	outline: none;
	border-radius: 15px;
}
h1{
    width: 60%;
	height: 0px;
	margin: 0px ;
	justify-content: center;
	display: flex;
	color: #fff;
	background: bottom;
	font-size: 1em;
	font-weight: bold;
	margin-top: 1px;
	outline: none;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}
button{
	width: 80%;
	height: 60px;
	margin: 10px auto;
	justify-content: center;
	display: flex;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 30px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}

</style>
</html>