<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
$coustmer_id=$_GET['coustmer_id'];

			$name=$_POST["name"];
			$phone=$_POST["phone"];
			$email=$_POST["email"];
			$subject=$_POST["subject"];
			$message=$_POST["message"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (name, phone, email,subject,message)
	 VALUES ('$name', '$phone', '$email','$subject','$message')";



        if($conn->query($sql) === TRUE){
            header("location:index.html");
        }else{
             header("location:contact.html");
        }

$conn->close();
?>