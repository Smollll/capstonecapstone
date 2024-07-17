<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courses";
$port = 3307;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT lessonid, coursename, instructor, lessons ,description FROM courses";
$result = $conn->query($sql);

$courses = array();

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
}

$conn->close();

echo json_encode($courses);
?>
