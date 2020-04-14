
<?php 

error_reporting(-1);
ini_set('dispay_errors', TRUE)



  //creating connection to database
$con=mysqli_connect("localhost","root","","firstdb") or die(mysqli_error());
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['userName']);
$Email = $con->real_escape_string($_POST['userEmail']);
$subject = $con->real_escape_string($_POST['suject']);
$comment = $con->real_escape_string($_POST['text']);
  //query to insert the variable data into the database
$sql="INSERT INTO detail (	userName, userEmail, subject, comment) VALUES ('".$Name."','".$Email."', '".$subject."', '".$comment."')";
  //Execute the query and returning a message
if(!$result = $con->detail($sql)){
die('Error occured [' . $con->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";
}


?>