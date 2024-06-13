<?php

// Process user action based on submitted form data
if (isset($_POST['username']) && isset($_POST['action'])) {
  $username = $_POST['username'];
  $action = $_POST['action'];

  // Validate user input (omitted for brevity)

  // Connect to database (replace with your details)
  $servername = "localhost";
  $username = "your_username";
  $password = "your_password";
  $dbname = "your_database";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Perform action based on user selection
  if ($action === "update_profile") {
    // Logic to update user profile information (e.g., name, email) in the database
    // ...
  } else if ($action === "change_password") {
    // Logic to handle password change requests (secure password hashing required)
    // ...
  }

  $conn->close();
}

?>
 

<!doctype html>
<html>
   <head>
            <title>multi-user-based-login-system</title>
  </head>
  <body>
                  <div class="container d-flex justify-content-centre
                align-items-centre"
                style="min-height: 50%;"
                style="left: 50%;">
                    
                            <label for="chk" aria-hidden="true">Welcome user</label>
				            <img src="img/users.jpg";
                    
                 </div>

           
   </body>

<style>
  
body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}

#chk{
	display: none;
}
label{
	color: #fff;
	font-size: 2.3em;
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
	margin: 20px auto;
	padding: 12px;
	border: none;
	outline: none;
	border-radius: 5px;
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
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
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