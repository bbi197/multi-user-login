<?php
session_start();
include("db_con.php");

if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["role"])) {

    function test_input($data) {
        $data = stripslashes($data);
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $role = test_input($_POST["role"]);

    if (empty($username)) {
        header("location: ../index.php?error=username is required");
    } elseif (empty($password)) {
        header("location: ../index.php?error=password is required");
    } else {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            // Secure password comparison using password_verify
            if (password_verify($password, $row["password"])) {
                if ($row['role'] == $role) {
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['username'] = $row['username'];

                    header("location:home.php");
                } else {
                    header("location: ../index.php?error=Incorrect role");
                }
            } else {
                header("location: ../index.php?error=Invalid password");
            }
        } else {
            header("location: home.php?error=Invalid username or password"); // More informative message
        }
    }
} else {
    header("location: ../index.php");
}
