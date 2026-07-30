<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVibe - PHP Conditionals & Logic</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; color: #333; padding: 40px 20px; }
        .container { max-width: 700px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h1 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; font-size: 24px; }
        h2 { color: #2c3e50; font-size: 18px; margin-top: 25px; border-left: 4px solid #3498db; padding-left: 10px; }
        .card { background-color: #f8f9fa; border: 1px solid #e9ecef; border-radius: 8px; padding: 15px 20px; margin: 10px 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 8px 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #eef2f7; }
        .badge-success { background: #d4edda; color: #155724; padding: 4px 8px; border-radius: 4px; font-weight: bold; }
        .badge-info { background: #d1ecf1; color: #0c5460; padding: 4px 8px; border-radius: 4px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>TechVibe Trainee Portal: Logic & Conditionals</h1>

        <h2>1. Budget Calculator (Itemized)</h2>
        <div class="card">
            <?php
            $totalBudget = 8500.00;
            $expenses = [
                "Groceries" => 2500.00,
                "Transport" => 1200.00,
                "Entertainment" => 800.00,
                "Utilities" => 1100.00
            ];

            $totalSpent = 0;
            echo "<table><thead><tr><th>Expense Category</th><th>Amount (ZAR)</th></tr></thead><tbody>";
            foreach ($expenses as $category => $amount) {
                $totalSpent += $amount;
                echo "<tr><td>" . htmlspecialchars($category) . "</td><td>R" . number_format($amount, 2) . "</td></tr>";
            }
            $remainingBalance = $totalBudget - $totalSpent;
            echo "</tbody></table>";
            echo "<p style='margin-top: 12px;'><strong>Total Monthly Budget:</strong> R" . number_format($totalBudget, 2) . "<br>";
            echo "<strong>Total Spent:</strong> R" . number_format($totalSpent, 2) . "<br>";
            echo "<strong>Remaining Balance:</strong> <span class='badge-success'>R" . number_format($remainingBalance, 2) . "</span></p>";
            ?>
        </div>

        <h2>2. Age Category Checker</h2>
        <div class="card">
            <?php
            $userAge = 22;
            $category = "";

            if ($userAge < 12) {
                $category = "Child";
            } elseif ($userAge >= 13 && $userAge <= 17) {
                $category = "Teen";
            } elseif ($userAge >= 18 && $userAge <= 64) {
                $category = "Adult";
            } else {
                $category = "Senior";
            }

            echo "<p>Given Age: <strong>" . $userAge . " years old</strong></p>";
            echo "<p>Assigned Category: <span class='badge-info'>" . $category . "</span></p>";
            ?>
        </div>

        <h2>3. Simple Interest Calculator</h2>
        <div class="card">
            <?php
            $principal = 10000.00;
            $rate = 0.05;
            $timeYears = 3;

            $interest = $principal * $rate * $timeYears;
            $totalAmount = $principal + $interest;

            echo "<p>Principal: <strong>R" . number_format($principal, 2) . "</strong> | Rate: <strong>5%</strong> | Time: <strong>3 Years</strong></p>";
            echo "<p>Calculated Interest: <strong>R" . number_format($interest, 2) . "</strong></p>";
            echo "<p>Total Amount Accrued: <span class='badge-success'>R" . number_format($totalAmount, 2) . "</span></p>";
            ?>
        </div>

        <h2>4. Voter Eligibility Check</h2>
        <div class="card">
            <?php
            $voterAge = 22;
            $isRegistered = true;

            echo "<p>Voter Age: <strong>" . $voterAge . "</strong> | Registration Status: <strong>" . ($isRegistered ? "Registered" : "Not Registered") . "</strong></p>";

            if ($voterAge >= 18 && $voterAge <= 35 && $isRegistered) {
                echo "<p><span class='badge-success'>Eligible for Youth Voting Drive</span></p>";
            } else {
                echo "<p><span class='badge-info'>Standard Eligibility Status</span></p>";
            }
            ?>
        </div>

        <h2>5. Application Role Evaluation (Switch Statement)</h2>
        <div class="card">
            <?php
            $userRole = "Developer";

            switch ($userRole) {
                case "Admin":
                    $accessLevel = "Full administrative access granted.";
                    break;
                case "Developer":
                    $accessLevel = "Developer environment and repository access granted.";
                    break;
                case "Trainee":
                    $accessLevel = "Read-only access to course modules.";
                    break;
                default:
                    $accessLevel = "Guest access limited.";
                    break;
            }

            echo "<p>User Role: <strong>" . $userRole . "</strong></p>";
            echo "<p>System Access: <em>" . $accessLevel . "</em></p>";
            ?>
        </div>
    </div>
</body>
</html>