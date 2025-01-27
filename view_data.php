<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "church"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
$sql = "SELECT * FROM members"; // Replace "members" with your table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display the data in a table
    echo "<table border='1'>";
    echo "<tr>
            <th>Full Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Marital Status</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Spouse Name</th>
            <th>Children</th>
            <th>Next of Kin</th>
            <th>Next of Kin Contact</th>
            <th>Salvation Date</th>
            <th>Baptism Status</th>
            <th>Spiritual Gifts</th>
            <th>Preferred Service</th>
            <th>Consent Notifications</th>
            <th>Consent Media</th>
            <th>Consent Data</th>
            <th>Photo</th>
          </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['full_name']}</td>
                <td>{$row['dob']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['marital_status']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['email']}</td>
                <td>{$row['spouse_name']}</td>
                <td>{$row['children']}</td>
                <td>{$row['next_of_kin']}</td>
                <td>{$row['kin_contact']}</td>
                <td>{$row['salvation_date']}</td>
                <td>{$row['baptism_status']}</td>
                <td>{$row['spiritual_gifts']}</td>
                <td>{$row['preferred_service']}</td>
                <td>" . ($row['consent_notifications'] ? "Yes" : "No") . "</td>
                <td>" . ($row['consent_media'] ? "Yes" : "No") . "</td>
                <td>" . ($row['consent_data'] ? "Yes" : "No") . "</td>
                <td>{$row['photo_path']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .table-container {
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 1200px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th, table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    table th {
        background-color: #4CAF50;
        color: white;
        text-align: center;
    }

    table td {
        background-color: #f9f9f9;
    }

    table tr:nth-child(even) td {
        background-color: #f1f1f1;
    }

    table tr:hover td {
        background-color: #f2f2f2;
    }

    button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
        font-size: 16px;
    }

    button:hover {
        background-color: #45a049;
    }
</style>