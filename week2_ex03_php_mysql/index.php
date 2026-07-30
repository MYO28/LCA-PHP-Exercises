<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVibe - Employee Management System</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; color: #333; padding: 40px 20px; }
        .container { max-width: 900px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .header { display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #2c3e50; padding-bottom: 15px; margin-bottom: 20px; }
        h1 { color: #2c3e50; margin: 0; font-size: 24px; }
        .btn-add { background-color: #27ae60; color: white; padding: 10px 16px; border-radius: 6px; text-decoration: none; font-weight: bold; }
        .toolbar { display: flex; justify-content: space-between; margin-bottom: 20px; gap: 10px; }
        .search-form { display: flex; gap: 8px; flex-grow: 1; max-width: 400px; }
        .search-form input[type="text"] { flex-grow: 1; padding: 8px 12px; border: 1px solid #ccc; border-radius: 6px; }
        .btn-search { background-color: #3498db; color: white; border: none; padding: 8px 14px; border-radius: 6px; cursor: pointer; }
        .btn-reset { background-color: #95a5a6; color: white; text-decoration: none; padding: 8px 14px; border-radius: 6px; font-size: 13px; line-height: 20px; }
        .alert { padding: 12px; border-radius: 6px; margin-bottom: 20px; }
        .alert-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #e0e0e0; }
        th { background-color: #f8f9fa; color: #2c3e50; font-weight: 600; }
        .badge { background: #e1f5fe; color: #0288d1; padding: 4px 8px; border-radius: 4px; font-size: 13px; }
        .actions { display: flex; gap: 8px; align-items: center; }
        .btn-edit { background-color: #f39c12; color: white; padding: 5px 10px; border-radius: 4px; text-decoration: none; font-size: 13px; font-weight: 600; }
        .btn-delete { background-color: #e74c3c; color: white; border: none; padding: 6px 10px; border-radius: 4px; cursor: pointer; font-size: 13px; font-weight: 600; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>TechVibe Employee Portal</h1>
            <a href="create.php" class="btn-add">+ Add Employee</a>
        </div>

        <?php if (isset($_GET['status'])): ?>
            <div class="alert alert-success">
                <?php
                if ($_GET['status'] === 'setup_success') echo "Database and table initialized successfully!";
                elseif ($_GET['status'] === 'created') echo "New employee record created successfully!";
                elseif ($_GET['status'] === 'updated') echo "Employee record updated successfully!";
                elseif ($_GET['status'] === 'deleted') echo "Employee record removed successfully!";
                ?>
            </div>
        <?php endif; ?>

        <div class="toolbar">
            <form method="GET" action="index.php" class="search-form">
                <input type="text" name="search" placeholder="Filter by department..." value="<?php echo htmlspecialchars($_GET['search'] ?? ''); ?>">
                <button type="submit" class="btn-search">Search</button>
                <?php if (!empty($_GET['search'])): ?>
                    <a href="index.php" class="btn-reset">Reset</a>
                <?php endif; ?>
            </form>
            <a href="setup.php" style="color: #7f8c8d; font-size: 12px; align-self: center;">Run Database Setup</a>
        </div>

        <?php require_once 'read.php'; ?>
    </div>
</body>
</html>