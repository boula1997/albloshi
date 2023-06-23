<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
$coustmer_id=$_GET['coustmer_id'];

			$name=$_POST["name"];
			$phone=$_POST["phone"];
			$email=$_POST["email"];
			$service=$_POST["service"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO service_request (name, phone, email,service)
	 VALUES ('$name', '$phone', '$email','$service')";



        if($conn->query($sql) === TRUE){
            header("location:index.html");
        }else{
             header("location:contact.html");
        }

$conn->close();
?>