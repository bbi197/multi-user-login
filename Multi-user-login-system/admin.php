<?php

// Include the super admin functionality file
include("home.php");
require_once('super_admin.php');


// Restrict access to logged-in admins only (replace with your logic)
if (isLoggedIn(true)) {

  // Display admin panel content
  echo "<h2>Admin Panel</h2>";

  // Here you can add functionalities specific to regular admins
  // For example, displaying user information or managing specific sections

  echo "This is the admin panel where you can perform tasks specific to administrators.";

} else {
  echo "You are not logged in as Admin.";
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
                 
                            <label for="chk" aria-hidden="true">Welcome admin</label>
				            <img src="img/admin.jpg";
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
