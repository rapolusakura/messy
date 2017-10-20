<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="sys"; // Database name, the schema 
$tbl_student = "student"; 
$tbl_late = "late"; 

$conn=mysqli_connect($host, $username, $password, $db_name) or die("cannot connect");
echo "Connection success"; 

$studentID=$_POST['studentID'];
$sql="INSERT INTO $tbl_late(first_name, last_name, grade) select first_name, last_name, grade from $tbl_student where id = $studentID";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
