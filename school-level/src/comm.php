<?php
session_start();

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'comedy');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$cno = $_SESSION['c1'];
$jcomment = $_POST['message'];

$s = "select Name from comedian where CNO = $cno";
$result = mysqli_query($conn , $s);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $name = $row["Name"]; 
    }
}

$sql = "INSERT INTO jokes (Name, Joke)
VALUES ('$name', '$jcomment')";

if (mysqli_query($conn, $sql)) {
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>