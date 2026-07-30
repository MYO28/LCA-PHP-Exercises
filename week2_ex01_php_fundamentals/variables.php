<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals - Variables & Types</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            padding: 40px 20px;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #2ecc71;
            padding-bottom: 8px;
            margin-top: 25px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 10px 14px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .active-row {
            background-color: #e8f8f5;
            font-weight: bold;
            border-left: 4px solid #2ecc71;
        }
        .badge {
            background: #e1f5fe;
            color: #0288d1;
            padding: 4px 8px;
            border-radius: 4px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Developer Profile</h2>
        <?php
        $name = "Yusuf Osman";
        $age = 18;
        $favouriteColor = "Blue";
        $favouriteHobby = "System Performance Optimization";

        echo "<p>Hello, my name is <strong>" . $name . "</strong>. I am " . $age . " years old, based in Cape Town. My favourite colour is " . $favouriteColor . " and when I am not coding, my favourite hobby is " . $favouriteHobby . ".</p>";
        ?>

        <h2>BMI Health Calculator</h2>
        <?php
        $heightMeters = 1.69;
        $weightKg = 54.31;
        $bmi = $weightKg / ($heightMeters * $heightMeters);
        $bmiFormatted = number_format($bmi, 1);

        if ($bmi < 18.5) {
            $currentCategory = "Underweight";
        } elseif ($bmi < 25.0) {
            $currentCategory = "Normal weight";
        } elseif ($bmi < 30.0) {
            $currentCategory = "Overweight";
        } else {
            $currentCategory = "Obese";
        }

        echo "<p>Calculated BMI for height " . $heightMeters . "m and weight " . $weightKg . "kg: <strong>" . $bmiFormatted . "</strong> (" . $currentCategory . ")</p>";
        ?>

        <table>
            <thead>
                <tr>
                    <th>Category</th>
                    <th>BMI Range</th>
                </tr>
            </thead>
            <tbody>
                <tr class="<?php echo ($currentCategory === 'Underweight') ? 'active-row' : ''; ?>">
                    <td>Underweight</td>
                    <td>&lt; 18.5</td>
                </tr>
                <tr class="<?php echo ($currentCategory === 'Normal weight') ? 'active-row' : ''; ?>">
                    <td>Normal weight</td>
                    <td>18.5 – 24.9</td>
                </tr>
                <tr class="<?php echo ($currentCategory === 'Overweight') ? 'active-row' : ''; ?>">
                    <td>Overweight</td>
                    <td>25.0 – 29.9</td>
                </tr>
                <tr class="<?php echo ($currentCategory === 'Obese') ? 'active-row' : ''; ?>">
                    <td>Obese</td>
                    <td>&ge; 30.0</td>
                </tr>
            </tbody>
        </table>

        <h2>Type Conversion & Inspection</h2>
        <?php
        $originalFloat = 94.75;
        $convertedInt = intval($originalFloat);

        echo "<p>Float Value: <span class='badge'>" . $originalFloat . "</span> | Converted Integer: <span class='badge'>" . $convertedInt . "</span></p>";

        $sampleInt = 42;
        $sampleFloat = 18.99;
        $sampleString = "EduTrack SA";
        $sampleArray = array("HTML", "CSS", "JavaScript", "PHP");

        echo "<ul>";
        echo "<li>Variable \$sampleInt (" . $sampleInt . ") is of type: <span class='badge'>" . gettype($sampleInt) . "</span></li>";
        echo "<li>Variable \$sampleFloat (" . $sampleFloat . ") is of type: <span class='badge'>" . gettype($sampleFloat) . "</span></li>";
        echo "<li>Variable \$sampleString ('" . $sampleString . "') is of type: <span class='badge'>" . gettype($sampleString) . "</span></li>";
        echo "<li>Variable \$sampleArray is of type: <span class='badge'>" . gettype($sampleArray) . "</span></li>";
        echo "</ul>";
        ?>
    </div>
</body>
</html>