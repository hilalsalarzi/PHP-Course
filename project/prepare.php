// Assuming you have established a connection in $conn
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Establish the connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the SQL query with placeholders
$sql = "INSERT INTO `courses` (`id`, `course_name`, `course_code`, `course_description`, `created_at`) VALUES (?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Check if the statement was prepared successfully
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Example values to insert
$id = 1; // or any value you want
$course_name = "Web Development";
$course_code = "WD101";
$course_description = "An introductory course to web development.";
$created_at = date("Y-m-d H:i:s"); // Current timestamp

// Bind the parameters (assuming all are strings except for ID)
$stmt->bind_param("issss", $id, $course_name, $course_code, $course_description, $created_at);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
