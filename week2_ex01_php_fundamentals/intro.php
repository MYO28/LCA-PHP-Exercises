<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals - Introduction</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
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
        h1 {
            color: #2c3e50;
            margin-top: 0;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            font-size: 24px;
        }
        .card {
            background-color: #f8f9fa;
            border-left: 4px solid #3498db;
            padding: 15px 20px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        .highlight {
            font-weight: bold;
            color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo "Welcome to PHP Programming!"; ?></h1>

        <div class="card">
            <?php
            $hour = date('H');
            if ($hour < 12) {
                $greeting = "Good morning";
            } elseif ($hour < 18) {
                $greeting = "Good afternoon";
            } else {
                $greeting = "Good evening";
            }
            echo "<p>" . $greeting . "! My name is <span class='highlight'>Yusuf Osman</span>.</p>";
            echo "<p>My favourite programming language is <strong>JavaScript</strong> because it allows me to build interactive frontend interfaces and seamlessly connect them with backend APIs.</p>";
            ?>
        </div>

        <div class="card">
            <?php
            $completedTasks = 14;
            $remainingTasks = 6;
            $totalTasks = $completedTasks + $remainingTasks;
            echo "<p>Sprint Progress: " . $completedTasks . " completed + " . $remainingTasks . " pending = <span class='highlight'>" . $totalTasks . " total tasks</span>.</p>";
            ?>
        </div>

        <div class="card">
            <?php
            echo "<p>Today is <span class='highlight'>" . date("l, F j, Y") . "</span>.</p>";
            $luckyNumber = rand(1, 100);
            echo "<p>Your lucky number today is: <span class='highlight'>" . $luckyNumber . "</span></p>";
            ?>
        </div>
    </div>
</body>
</html>