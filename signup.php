<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pouch";
//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if(!$conn){
  die("Connection Failed:" . mysqli_connect_error());
}

echo "Connected Successfully!<br>";
//get data from form
$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];
//make sql insert statement
$sql="INSERT INTO users (username,email,password) VALUES ('" . $user . "','" . $email . "','" . $pass . "');" ;
//check if SQL is correctly formed
echo $sql;
if(mysqli_query($conn, $sql)){
	echo "Records inserted successfully.";
} else{
	echo "ERROR: Unable to excute $sql.".
	mysqli_error($conn);
}
mysqli_close($conn);

header('Location: home.php');
?>
