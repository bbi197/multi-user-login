<?php

session_start();
include("login.php");
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

      // Redirect based on role (assuming secure logic for roles)
      if ($_SESSION['role'] === 'user' && $_SESSION['username'] === 'admin') {
        header('location: admin.php');
      } elseif ($_SESSION['role'] === 'admin' && $_SESSION['username'] === 'super admin') {
        header('location: super_admin.php');
      } else {
        // Handle other roles (redirect to appropriate page)
       echo"not yet";  // Or another relevant page
      }

    
    
 