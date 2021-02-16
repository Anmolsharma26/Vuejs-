<?php
 if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        exit(0);
    }
    echo "You have CORS!";
$host = "localhost"; 
$user = "anmol"; 
$pass = "anmol"; 
$dbname = "vue"; 

$con = new mysqli($host, $user, $pass, $dbname);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = array( 'error' => false);
$action = $_GET['action'];
print_r($_REQUEST);
if($action == 'create'){
  $firstname = $_REQUEST["firstname"];
  $lastname = $_REQUEST["lastname"];
  $email = $_REQUEST["email"];
  $regpassword = $_REQUEST["password"];
  $sql= "INSERT INTO register (firstname, lastname, email, pass) VALUES ('$firstname', '$lastname', '$email', '$regpassword')";
  if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
$conn->close();