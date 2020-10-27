<?php
session_start();
// include('database/dbconfig.php');

// if ($dbconfig) {
//     // echo "Database Connected";
// } else {
//     header("Location: dbconfig.php");
// }

// Redirect Invalid User to login [ security ]
if (!$_SESSION['username']) {
    # code...
    header('Location: login.php');
}
