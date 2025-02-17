<?php
include "index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="container mt-4">

<div class="container vh-100">
    <div class="row vh-100 align-items-center justify-content-center">
        <div class="col col-6">
    <div class="card">
    <div class="card-body">
    <h1 class="card-title">Update Contact</h1>
<p class="card-text small text-secondary">Please fill out the form to update contact.</p>

<form method="post">
    <div class="row g-2">
        <div class="col-md-6">
<label class="form-label">First Name <span class="text-danger">*</span></label>
<input type="text" name="first_name" value="<?= htmlspecialchars($contact['first_name']) ?>" class="form-control" required>
        </div>
        <div class="col-md-6">
<label class="form-label">Last Name <span class="text-danger">*</span></label>
<input type="text" name="last_name" value="<?= htmlspecialchars($contact['last_name']) ?>" class="form-control" required>
        </div>
    </div>

    <div class="row g-2 mt-2">
        <div class="col-md-6">
<label class="form-label">Email <span class="text-danger">*</span></label>
<input type="email" name="email" value="<?= htmlspecialchars($contact['email']) ?>" class="form-control" required>
        </div>
        <div class="col-md-6">
<label class="form-label">Contact Number <span class="text-danger">*</span></label>
<input type="text" name="contact_number" value="<?= htmlspecialchars($contact['contact_number']) ?>" class="form-control" required>
        </div>
    </div>

    <div class="row g-2 mt-3">
        <div class="col-12 d-grid">
<button type="submit" class="btn btn-success btn-md">
    <i class="bi bi-save"></i> Save
</button>
        </div>
        <div class="col-12 d-grid">
<a href="index.php" class="btn btn-secondary btn-md">
    <i class="bi bi-arrow-left"></i> Cancel
</a>
        </div>
    </div>
</form>

</div>
</div>
</div>
</div>
</div>

</body>
</html>
