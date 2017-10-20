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
$sql="Select first_name, last_name, grade from $tbl_student where id = $studentID";
$fN = "select first_name from $tbl_student where id = $studentID";
$lN = "select last_name from $tbl_student where id = $studentID";
$grade = "select grade from $tbl_student where id = $studentID";

echo fN; 
echo lN; 
echo grade; 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
