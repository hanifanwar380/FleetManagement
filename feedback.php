<meta http-equiv='refresh' content='6; url=http://localhost/'>
<meta charset="UTF-8" />
<?php
session_start();

// Making connection to the database
$connection=mysqli_connect("localhost","root","","vehicle_management");

// Check Connection 
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
// Obtaining user inputs
$firstname= mysqli_real_escape_string($connection, ($_REQUEST['firstname']));
$lastname= mysqli_real_escape_string($connection, ($_REQUEST['lastname']));
$feedback= mysqli_real_escape_string($connection, ($_REQUEST['feedback']));

// specifying the insert mysql query
$feedback_insert_query= "INSERT INTO `feedback`(`firstname`, `lastname`, `feedback`) VALUES ('$firstname','$lastname','$feedback')"; 

// inserting into the database
if(mysqli_query($connection, $feedback_insert_query)){
    echo "Feedback has been submitted successfully";
    echo "\nRedirecting to main page in few seconds";
} else {
    echo "ERROR: Feedback could not be submitted the moment ". mysqli_error($connection);
}

// closing connection
mysqli_close($connection)
?>