<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVibe - PHP Functions</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; color: #333; padding: 40px 20px; }
        .container { max-width: 700px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h1 { color: #2c3e50; border-bottom: 2px solid #8e44ad; padding-bottom: 10px; font-size: 24px; }
        h2 { color: #2c3e50; font-size: 18px; margin-top: 25px; border-left: 4px solid #8e44ad; padding-left: 10px; }
        .card { background-color: #f8f9fa; border-left: 4px solid #8e44ad; padding: 15px; margin: 10px 0; border-radius: 0 8px 8px 0; }
        .badge { background: #e8daef; color: #6c3483; padding: 4px 8px; border-radius: 4px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>TechVibe Trainee Portal: Modular Functions</h1>

        <?php
        function printGreeting($name) {
            return "Hello, " . htmlspecialchars($name) . "! Welcome to the Backend Web Development Programme.";
        }

        function multiply($a, $b) {
            return $a * $b;
        }

        function arrayLooper($array) {
            $output = "";
            foreach ($array as $item) {
                $output .= htmlspecialchars($item) . "<br>";
            }
            return $output;
        }

        function calculateDiscount($amount) {
            $discountRate = 0.0;

            if ($amount > 1000) {
                $discountRate = 0.10;
            } elseif ($amount >= 500 && $amount <= 999) {
                $discountRate = 0.05;
            } elseif ($amount >= 250 && $amount <= 499) {
                $discountRate = 0.02;
            } else {
                $discountRate = 0.0;
            }

            $discountAmount = $amount * $discountRate;
            $finalAmount = $amount - $discountAmount;

            return [
                'original' => $amount,
                'rate_percent' => ($discountRate * 100),
                'discount_amount' => $discountAmount,
                'final_amount' => $finalAmount
            ];
        }

        function gradeCalculator($score) {
            if ($score >= 80) return 'A';
            if ($score >= 70) return 'B';
            if ($score >= 60) return 'C';
            if ($score >= 50) return 'D';
            return 'F';
        }

        function findMinMax($numbers) {
            if (empty($numbers)) return null;
            return [
                'min' => min($numbers),
                'max' => max($numbers)
            ];
        }
        ?>

        <h2>1. Greeting Output</h2>
        <div class="card">
            <p><?php echo printGreeting("Yusuf Osman"); ?></p>
        </div>

        <h2>2. Multiplication Function</h2>
        <div class="card">
            <p>Calculated Product (14 &times; 6): <strong><?php echo multiply(14, 6); ?></strong></p>
        </div>

        <h2>3. Array Looper (Fruits Test)</h2>
        <div class="card">
            <?php
            $fruits = ["Apple", "Banana", "Mango", "Orange", "Pineapple"];
            echo arrayLooper($fruits);
            ?>
        </div>

        <h2>4. Tiered Discount Engine</h2>
        <div class="card">
            <?php
            $testAmounts = [1250.00, 750.00, 350.00, 150.00];
            foreach ($testAmounts as $amt) {
                $res = calculateDiscount($amt);
                echo "<p>Original: <strong>R" . number_format($res['original'], 2) . "</strong> | Discount: <span class='badge'>" . $res['rate_percent'] . "%</span> | Final: <strong>R" . number_format($res['final_amount'], 2) . "</strong></p>";
            }
            ?>
        </div>

        <h2>5. Grade Calculator (Stretch Goal)</h2>
        <div class="card">
            <?php
            $scores = [85, 72, 64, 53, 42];
            foreach ($scores as $s) {
                echo "<p>Score: <strong>" . $s . "</strong> &rarr; Grade: <span class='badge'>" . gradeCalculator($s) . "</span></p>";
            }
            ?>
        </div>

        <h2>6. Min/Max Array Finder (Stretch Goal)</h2>
        <div class="card">
            <?php
            $sampleData = [14, 88, 3, 92, 45, 67, 21];
            $minMax = findMinMax($sampleData);
            echo "<p>Dataset: [" . implode(", ", $sampleData) . "]</p>";
            echo "<p>Minimum Value: <strong>" . $minMax['min'] . "</strong> | Maximum Value: <strong>" . $minMax['max'] . "</strong></p>";
            ?>
        </div>
    </div>
</body>
</html>