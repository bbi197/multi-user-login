<?php

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
                 <form  method="post" action="login.php">
                     <div>
                            <label for="chk" aria-hidden="true">Login</label>
				            <input type="text" name="username" id="username" placeholder="User name">
				        	<input type="password" name="password" id="password" placeholder="password">
						
                    </div>
                        <div>
                          <h1>user type</h1> 
                              <select  name="role">
                                  <option selected value="user">user</option>
                                 <option value="admin">Admin</option>
                             </select>
                             <button type="submit">Login</button>
						<h3> click here to<a href="register.php">sign up</a></h3>
						</div>
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
select{
	width: 80%;
	height: 30px;
    margin-top: 0px;
	background: #e0dede;
	justify-content: up;
	display: block;
	margin: 22px ;
	padding: 2px;
	border: none;
	outline: none;
	border-radius: 5px;
}
h3{
	color: #fff;
	height: 10px;
	padding: 0pxp;
	justify-content: center;
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