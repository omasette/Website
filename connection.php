<?php 
// Method 1

// Method 2
if(!empty($_POST["send"])) {
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
	$email = $_POST["userEmail"];
	$content = $_POST["content"];
	
    $conn = mysqli_connect ('localhost', 'root', '', 'king', '3307') or die("Connection Error: " . mysqli_error($conn));

	mysqli_query($conn, "INSERT INTO contact_us (first_name, last_name, user_email, content) VALUES ('" . $fname. "', '" . $lname. "', '" . $email. "','" . $content. "')");
	$insert_id = mysqli_insert_id($conn);
	if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	   header('location:contact.php');
	}
 }
// require_once "contact.php";
?> 