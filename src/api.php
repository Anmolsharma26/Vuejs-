<?php
//for CORS issue
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
//Variable for sql connection
$host = "localhost"; 
$user = "anmol"; 
$pass = "anmol"; 
$dbname = "vue"; 
// creating Sql connection
$con = new mysqli($host, $user, $pass, $dbname);

//checking connection is conect or not!
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = array( 'error' => false);
//get action for the request
$action = $_GET['action'];
// creatin queary for sql to insert data
if($action == 'create'){
  $firstname = $_REQUEST["firstname"];
  $lastname = $_REQUEST["lastname"];
  $email = $_REQUEST["email"];
  $regpassword = $_REQUEST["password"];
  //sql statement
  $sql= "INSERT INTO register (firstname, lastname, email, pass) VALUES ('$firstname', '$lastname', '$email', '$regpassword')";
  //checking sql statement is working or not
  if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
//close sql conection!
$conn->close();