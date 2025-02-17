<?php
include "db.php";

try {
    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $Email = $_POST['Email'];
    $ContactNum = $_POST['ContactNum'];

    $sql = "INSERT INTO create_contact (FName, LName, Email, ContactNum) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $FName, $LName, $Email, $ContactNum);

    if (!$stmt->execute()) {
        die("SQL Error: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();

    header("Location: index.php");
} catch (\Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
