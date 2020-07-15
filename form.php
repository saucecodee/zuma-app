<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'zuma');

// Check connection
if (!$db) {
     die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";


// only process the form if $_POST is not empty
if (isset($_POST['submit'])) {
     $email = trim($_POST["email"]);

     // Insert our data
     $sql = "INSERT INTO users (email) VALUES ( '$email')";
     $insert = mysqli_query($db, $sql);

     // Print response from MySQL
     if ($insert) {
          $_SESSION["message"] = "Thanks for signing up !";
          header("location: index.php");
     } else {
          $_SESSION["message"] = "Sorry, please try again";
          header("location: index.php");
     }
}
