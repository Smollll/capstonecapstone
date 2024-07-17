<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courses";
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function count_directories($path) {
    $directories = array_filter(glob($path . '/*'), 'is_dir');
    return count($directories);
}

$main_path = "D:/XAMPP/htdocs/capstone1/course";

$instructors = array_filter(glob($main_path . '/*'), 'is_dir');

foreach ($instructors as $instructor) {
    $instructor_name = basename($instructor);

    $courses = array_filter(glob($instructor . '/*'), 'is_dir');

    foreach ($courses as $course) {
        $course_name = basename($course);

        $lessons = count_directories($course);

        // Check if the course already exists
        $stmt = $conn->prepare("SELECT lessonid FROM courses WHERE instructor = ? AND coursename = ?");
        $stmt->bind_param("ss", $instructor_name, $course_name);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 0) {
            $stmt->close();
            $stmt = $conn->prepare("INSERT INTO courses (instructor, coursename, lessons) VALUES (?, ?, ?)");
            $stmt->bind_param("ssi", $instructor_name, $course_name, $lessons);
            $stmt->execute();
        }
        $stmt->close();
    }
}

$sql = "SELECT lessonid, coursename, instructor, lessons, description FROM courses";
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
