<?php 
header( "Location: ../shopping-cart.php");
$servername = 'localhost';
$user = 'root';
$pass = '';
$db = 'techhub';


$conn = new mysqli($servername, $user, $pass, $db) or die("Unable to connect");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO techhub.userinformation (fullName, address1, address2, city, state, zip, phone, email) 
VALUES ('$_POST[fullName]','$_POST[addressOne]','$_POST[addressTwo]', 
'$_POST[city]', '$_POST[state]', '$_POST[zipCode]', '$_POST[phoneNumber]', '$_POST[email]')";

print "<h2><center><font face='Arial' color='black' text-align='center' margin='100px'> Information saved! </font></center></h2> <br>";




$sql2="SELECT userID FROM userinformation WHERE email = '$_POST[email]' ";

if (!mysqli_query($conn,$sql))
  {
      die('Error: ' . mysqli_error($conn));
      //print_r($_POST);
  }
  else {
    //print_r($_POST);
    //echo "<br Successfully input your information />";
  }

//   $result = mysqli_query($conn,$sql2);
//   while($row = mysqli_fetch_array($result)) {
//     echo $row['userID']; // Print a single column data
//     echo print_r($row);       // Print the entire row data
//   }
  
  
  
 
 
mysqli_close($conn);

?>