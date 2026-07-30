<?php
require_once 'db_connect.php';

$errorMessage = "";
$name = "";
$email = "";
$department = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $department = trim($_POST['department'] ?? '');

    if (empty($name) || empty($email) || empty($department)) {
        $errorMessage = "All fields (Name, Email, and Department) are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Please enter a valid email address.";
    } else {
        $stmt = $conn->prepare("INSERT INTO employees (name, email, department) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $department);

        if ($stmt->execute()) {
            $stmt->close();
            header("Location: index.php?status=created");
            exit();
        } else {
            $errorMessage = "Error adding record: " . $stmt->error;
            $stmt->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVibe - Add Employee</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; color: #333; padding: 40px 20px; }
        .container { max-width: 500px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h2 { color: #2c3e50; margin-top: 0; }
        .alert-error { background-color: #f8d7da; color: #721c24; padding: 12px; border-radius: 6px; margin-bottom: 20px; border: 1px solid #f5c6cb; }
        .form-group { margin-bottom: 18px; }
        label { display: block; margin-bottom: 6px; font-weight: 600; }
        input[type="text"], input[type="email"] { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; box-sizing: border-box; }
        .btn-group { display: flex; gap: 10px; margin-top: 20px; }
        .btn { padding: 10px 18px; border: none; border-radius: 6px; cursor: pointer; text-decoration: none; font-weight: 600; text-align: center; }
        .btn-primary { background-color: #27ae60; color: #fff; }
        .btn-secondary { background-color: #95a5a6; color: #fff; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New Employee</h2>
        
        <?php if (!empty($errorMessage)): ?>
            <div class="alert-error"><?php echo htmlspecialchars($errorMessage); ?></div>
        <?php endif; ?>

        <form method="POST" action="create.php">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" id="department" name="department" value="<?php echo htmlspecialchars($department); ?>" placeholder="e.g. Frontend Development" required>
            </div>
            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Save Employee</button>
                <a href="index.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>