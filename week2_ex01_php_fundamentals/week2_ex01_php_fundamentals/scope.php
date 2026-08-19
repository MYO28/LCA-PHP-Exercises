<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals - Variable Scope</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            padding: 40px 20px;
        }
        .container {
            max-width: 650px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #e74c3c;
            padding-bottom: 8px;
        }
        .box {
            background-color: #fdfefe;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .error-note {
            color: #c0392b;
            background-color: #fadbd8;
            padding: 10px;
            border-left: 4px solid #e74c3c;
            margin-top: 10px;
            border-radius: 0 4px 4px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Global Scope</h2>
        <div class="box">
            <?php
            $appName = "EduTrack SA Portal";

            function displayGlobalVariable() {
                global $appName;
                echo "<p>Successfully accessed global variable inside function: <strong>" . $appName . "</strong></p>";
            }

            displayGlobalVariable();
            ?>
        </div>

        <h2>Local Scope</h2>
        <div class="box">
            <?php
            function displayLocalVariable() {
                $localStatus = "Database Connection Active";
                echo "<p>Inside function local variable value: <strong>" . $localStatus . "</strong></p>";
            }

            displayLocalVariable();

            // Attempting to access the local variable outside the function scope
            // Directly echoing $localStatus here triggers a PHP Notice/Warning: Undefined variable $localStatus
            if (!isset($localStatus)) {
                echo "<div class='error-note'><p><strong>Outside Function Access Test:</strong> Cannot access <code>\$localStatus</code> in global scope (Variable is undefined outside its local function scope).</p></div>";
            }
            ?>
        </div>

        <h2>Static Scope</h2>
        <div class="box">
            <?php
            function trackExecutionCount() {
                static $counter = 1;
                echo "<p>Execution Call #" . $counter . "</p>";
                $counter++;
            }

            trackExecutionCount();
            trackExecutionCount();
            trackExecutionCount();
            ?>
        </div>
    </div>
</body>
</html>