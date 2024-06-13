<?php

session_start();
include("db_con.php");
include("home.php");

// Function to check if user is logged in as super admin (replace with your authentication method)
function isLoggedIn($isAdmin = true) {
	// Replace with your actual authentication method (session variable, cookie, etc.)
	if (isset($_SESSION['user_id']) && isset($_SESSION['user_role'])) {
	  $userId = $_SESSION['user_id'];
	  $userRole = $_SESSION['user_role'];
  
	  // Validate session data (optional)
	  // You can add checks for session expiration time or tamper detection
  
	  if ($isAdmin) {
		// Check for super admin role (replace with your role identifier)
		return $userRole === "super_admin";
	  } else {
		// Check for any valid logged-in user (admin or regular user)
		return in_array($userRole, ["admin", "regular_user"]); // Replace with your roles
	  }
	}
	return false;
  }
  true; {
  // Replace this with your actual session/cookie check for super admin
  return isset($_SESSION['super_admin']) && $_SESSION['super_admin'] === true;
}

// Function to escape user input to prevent SQL injection (important for security)
function escapeData($data) {
  global $conn;
  return mysqli_real_escape_string($conn, $data);
}

if (isLoggedIn()) {

  if (isset($_POST['action'])) {
    $action = $_POST['action'];
    $username = escapeData($_POST['username']);

    if ($action === "add") {
      $sql = "INSERT INTO users (username, is_admin) VALUES ('$username', 0)";
      if ($conn->query($sql) === TRUE) {
        echo "User added successfully!";
      } else {
        echo "Error adding user: " . $conn->error;
      }
    } else if ($action === "remove") {
      $sql = "DELETE FROM users WHERE username = '$username'";
      if ($conn->query($sql) === TRUE) {
        echo "User removed successfully!";
      } else {
        echo "Error removing user: " . $conn->error;
      }
    }
  }

  // Display form to add/remove users
  ?>
  <h2>Super Admin Panel</h2>
  <form method="post">
    <input type="hidden" name="action" value="add">
    <label for="username">Username to Add:</label>
    <input type="text" name="username" id="username" required>
    <button type="submit">Add User</button>
  </form>
  <form method="post">
    <input type="hidden" name="action" value="remove">
    <label for="username">Username to Remove:</label>
    <input type="text" name="username" id="username" required>
    <button type="submit">Remove User</button>
  </form>
  <?php

} else {
  echo "You are not logged in as Super Admin.";
}

$conn->close();

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
                     <div>
                            <label for="chk" aria-hidden="true">Welcome admin</label>
				            <img src="img/superadmin.jpg";
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
