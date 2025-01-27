<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "church"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Prepare the SQL query
    $sql = "INSERT INTO members (
                full_name, dob, gender, marital_status, phone, email,
                spouse_name, children, next_of_kin, kin_contact,
                salvation_date, baptism_status, spiritual_gifts, 
                preferred_service, consent_notifications, consent_media, 
                consent_data, photo_path
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Check if the preparation is successful
    if ($stmt === false) {
        die("Error in SQL preparation: " . $conn->error);
    }

    // Assume `$photo_path` is obtained during the file upload process
    $photo_path = ""; // Update this with the actual file upload logic if needed

    // Assign expressions to variables for `bind_param`
    $consent_notifications = isset($_POST['consent_notifications']) ? 1 : 0;
    $consent_media = isset($_POST['consent_media']) ? 1 : 0;
    $consent_data = isset($_POST['consent_data']) ? 1 : 0;

    // Bind parameters
    $stmt->bind_param(
        "sssssssssssssssiii",
        $_POST['full_name'],
        $_POST['dob'],
        $_POST['gender'],
        $_POST['marital_status'],
        $_POST['phone'],
        $_POST['email'],
        $_POST['spouse_name'],
        $_POST['children'],
        $_POST['next_of_kin'],
        $_POST['kin_contact'],
        $_POST['salvation_date'],
        $_POST['baptism_status'],
        $_POST['spiritual_gifts'],
        $_POST['preferred_service'],
        $consent_notifications,
        $consent_media,
        $consent_data,
        $photo_path
    );

    // Execute the statement and check if it was successful
    if ($stmt->execute()) {
        echo "<p>Form submitted successfully!</p>";
        echo '<button onclick="window.location.href=\'http://localhost/html/registration.php\'">Back to Form</button>';

    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
<style>
    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    button:hover {
        background-color: #45a049;
    }
</style>

