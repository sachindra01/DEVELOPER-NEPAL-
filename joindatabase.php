
<?php 

  //creating connection to database
$con=mysqli_connect("localhost","root","","join") or die(mysqli_error());
  //check whether submit button is pressed or not
if((isset($_POST['send'])))
{
  //fetching and storing the form data in variables
$name = $con->real_escape_string($_POST['name']);
$email = $con->real_escape_string($_POST['email']);
$phone = $con->real_escape_string($_POST['phone']);
$address = $con->real_escape_string($_POST['address']);
  //query to insert the variable data into the database
$sql="INSERT INTO zero1 (name, email, phone, address) VALUES ('".$name."','".$email."', '".$phone."', '".$address."')";
  //Execute the query and returning a message
if(!$result = $con->join($sql)){
die('Error occured [' . $con->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";
}
require("join.php");

?>