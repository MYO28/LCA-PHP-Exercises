<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVibe - PHP Iteration & Loops</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; color: #333; padding: 40px 20px; }
        .container { max-width: 700px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h1 { color: #2c3e50; border-bottom: 2px solid #2ecc71; padding-bottom: 10px; font-size: 24px; }
        h2 { color: #2c3e50; font-size: 18px; margin-top: 25px; border-left: 4px solid #2ecc71; padding-left: 10px; }
        .box { background-color: #f8f9fa; border-left: 4px solid #2ecc71; padding: 15px; margin: 10px 0; border-radius: 0 8px 8px 0; font-family: monospace; }
        .explanation { background-color: #fef9e7; border-left: 4px solid #f1c40f; padding: 12px 15px; margin-top: 10px; font-family: 'Segoe UI', sans-serif; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>TechVibe Trainee Portal: Iteration Constructs</h1>

        <h2>1. For Loop (0 to 10)</h2>
        <div class="box">
            <?php
            for ($i = 0; $i <= 10; $i++) {
                echo "i is equal to " . $i . "<br>";
            }
            ?>
        </div>

        <h2>2. Foreach Loop (South African Cities)</h2>
        <div class="box">
            <?php
            $cities = ["Cape Town", "Johannesburg", "Durban", "Pretoria", "Gqeberha"];
            foreach ($cities as $city) {
                echo htmlspecialchars($city) . "<br>";
            }
            ?>
        </div>

        <h2>3. While Loop (Countdown 10 to 0)</h2>
        <div class="box">
            <?php
            $countdown = 10;
            while ($countdown >= 0) {
                echo "X is equal to: " . $countdown . "<br>";
                $countdown--;
            }
            ?>
        </div>

        <h2>4. Do-While Loop (Boundary Test)</h2>
        <div class="box">
            <?php
            $counter = 6;
            do {
                echo "Counter value inside do-while: " . $counter . "<br>";
                $counter++;
            } while ($counter <= 5);
            ?>
        </div>
        <div class="explanation">
            <strong>Trainee Observation:</strong> A <code>do-while</code> loop evaluates its condition at the end of the block rather than at the start. Consequently, the loop code executes once even though the initial counter value (6) violates the continuation condition (<code>$counter <= 5</code>).
        </div>
    </div>
</body>
</html>