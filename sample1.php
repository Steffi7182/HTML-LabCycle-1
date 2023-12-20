?php
$servername = "localhost";
$username = "23mca054";
$password = "2935";
$dbname = "23mca054";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO student (name, id, course, age)
VALUES ('John', '03', 'MCA','23')";

if (mysqli_query($conn, $sql)) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>