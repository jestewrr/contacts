<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contactnum";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="container mt-4">

<div class="container vh-100">
<div class="row vh-100 align-items-center justify-content-center">

    <div class="col col-6">
        <div class="card">
    <div class="card-body">
    <h1 class="card-title">Contacts</h1>
        <p class="card-text small text-secondary">
        This application is built using native PHP for basic CRUD functionality.
    </p>

        <div class="col-12 d-grid">
    <a href="create.php" class="btn btn-primary mb-3">
    <i class="bi bi-person-plus"></i> New Contact
    </a>
        </div>

       
        <div class="list-group">

        <div class="list-group-item d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">

    <i class="bi bi-person-circle fs-3 me-2"></i>
<div>
    
</div>
</div>
<div class="btn-group">

    <a href="update.php?index=<?= $index ?>" class="btn btn-outline-success btn-sm">
    <i class="bi bi-pencil-square"></i>
        </a>

    <a href="index.php?delete=<?= $index ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?');">
    <i class="bi bi-trash"></i>
        </a>
            </div>
        </div>

    <div class="d-flex justify-content-center align-items-center">
        <p class="text-muted fs-10">No contacts available.</p>

    </div>
    </div>
    </div>
    </div>
</div>

</body>
</html>
