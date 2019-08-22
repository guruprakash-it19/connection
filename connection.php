
<?php
$servername = "121.200.55.60:3307";
$username = "2019UIT1145";
$password = "2019UIT1145";
$dbname = "2019UIT1145";

// create connection
$conn =new  mysqli($servername,$username,$password,$dbname);
// check connection
if ($conn->connect_error)
{
die("connection failed: " . $conn->connect_error);
}
$sql = "SElECT s_no,enrollment_no,student_name,course_name FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
// output data of each row
while($row=$result->fetch_assoc())
{
echo "s_no: " . $row["s_no"]. " NAME: " . $row["student_name"]. $row["enrollment_no"]. $row["course_name"]. "<br />";
}
}
else
{
echo "0 results";
}
$conn->close();
?>

