<?php
if (! empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $conn = mysqli_connect("localhost", "root", "", "insertdata") or die("Connection Error: " . mysqli_error($conn));
    $stmt = $conn->prepare("INSERT INTO tblcontact (user_name, user_email, subject,content) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $content);
    $stmt->execute();
    $message = "Your contact information is saved successfully.";
    $type = "success";
    $stmt->close();
    $conn->close();
}
require_once "insert-view.php";
?>