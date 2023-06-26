<?php

$servername = "your_host";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM auth2 WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);


    if ($row) {
        
        if ($username == 'admin') {
            header("Location: adminview.php");
        } elseif ($username == 'customer1' || $username == 'customer2') {
                header("Location: customerform2.html");
        } else {
            echo "Invalid user!";
        }
    } else {
        echo "Invalid username or password!";
    }
}
?>
