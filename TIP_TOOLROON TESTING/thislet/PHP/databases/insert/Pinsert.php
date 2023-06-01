<?php
// Check if the form is submitted
if (isset($_POST['Submit'])) {
    // Retrieve form data
    $id_num = $_POST['id_num'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Include database connection file
    include_once("C:\Users\johnr\Documents\GitHub\TOOLv.2\TIP_TOOLROON TESTING\thislet\PHP\config.php");
    
    
    // Insert user data into the professors table
    $professorQuery = "INSERT INTO professors (id_num, first_name, last_name, address, department, email, password) 
                      VALUES ('$id_num', '$first_name', '$last_name', '$address', '$department', '$email', '$password')";
    
    if ($professorConnection->query($professorQuery) === TRUE) {
        echo "Professor user added successfully.";
    } else {
        echo "Error adding professor user: " . $professorConnection->error;
    }
    
    // Close the database connection
    $professorConnection->close();
}
?>
