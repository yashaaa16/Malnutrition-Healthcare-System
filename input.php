<?php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "username", "password", "database");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO registrations (childName, dob, gender, guardianName, contactNumber, email, streetAddress, city, state, postalCode, country, weight, height, lastCheckup, healthConditions, nutritionalNeeds, dietaryPreferences, foodIntake, mealFrequency, supplement, supportNeeded, communicationMethod, consent, emergencyName, relationship, emergencyNumber, additionalComments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssssssssssssssssssss", $childName, $dob, $gender, $guardianName, $contactNumber, $email, $streetAddress, $city, $state, $postalCode, $country, $weight, $height, $lastCheckup, $healthConditions, $nutritionalNeeds, $dietaryPreferences, $foodIntake, $mealFrequency, $supplement, $supportNeeded, $communicationMethod, $consent, $emergencyName, $relationship, $emergencyNumber, $additionalComments);

    // Assign values from the form
    $childName = $_POST['childName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $guardianName = $_POST['guardianName'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $streetAddress = $_POST['streetAddress'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $lastCheckup = $_POST['lastCheckup'];
    $healthConditions = $_POST['healthConditions'];
    $nutritionalNeeds = $_POST['nutritionalNeeds'];
    $dietaryPreferences = $_POST['dietaryPreferences'];
    $foodIntake = $_POST['foodIntake'];
    $mealFrequency = $_POST['mealFrequency'];
    $supplement = $_POST['supplement'];
    $supportNeeded = $_POST['supportNeeded'];
    $communicationMethod = $_POST['communicationMethod'];
    $consent = isset($_POST['consent']) ? 1 : 0; // 1 for true, 0 for false
    $emergencyName = $_POST['emergencyName'];
    $relationship = $_POST['relationship'];
    $emergencyNumber = $_POST['emergencyNumber'];
    $additionalComments = $_POST['additionalComments'];

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>

?>