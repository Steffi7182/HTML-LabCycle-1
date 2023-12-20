<?php
$servername="localhost";
$username="23mca054";
$password="2935";
$dbname="23mca054";
$conn=new mysqli($servernamne,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed:". $conn->connect_error);
}
$NAME=$_POST['name'];
$COURSE=$_POST['course'];
$AGE=$_POST['age'];
$sql="INSERT INTO student(name, course , age)VALUES('$NAME', '$COURSE', '$AGE')";
if($conn->query($sql)===TRUE){
echo "data inserted successfully";
}else{
echo "error:". $sql ."<br>". $conn->error;
}

$conn->close();
?>