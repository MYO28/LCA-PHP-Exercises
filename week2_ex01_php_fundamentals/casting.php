<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals - Type Casting</title>
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
            border-bottom: 2px solid #8e44ad;
            padding-bottom: 8px;
        }
        .cast-item {
            background: #f8f9fa;
            border-left: 4px solid #8e44ad;
            margin: 10px 0;
            padding: 12px 16px;
            border-radius: 0 6px 6px 0;
        }
        code {
            background: #eaeded;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP Explicit Type Casting</h2>

        <?php
        $rawPrice = "149.99 ZAR";
        $rawScore = 98.6;
        $isMember = 1;
        $itemCount = 0;

        $castToInt = (int)$rawPrice;
        $castToFloat = (float)$rawPrice;
        $castToString = (string)$rawScore;
        $castToBool1 = (bool)$isMember;
        $castToBool2 = (bool)$itemCount;
        ?>

        <div class="cast-item">
            <p>Original String: <code>"149.99 ZAR"</code></p>
            <p>Cast to Integer <code>(int)</code>: <strong><?php echo $castToInt; ?></strong> (Type: <?php echo gettype($castToInt); ?>)</p>
        </div>

        <div class="cast-item">
            <p>Original String: <code>"149.99 ZAR"</code></p>
            <p>Cast to Float <code>(float)</code>: <strong><?php echo $castToFloat; ?></strong> (Type: <?php echo gettype($castToFloat); ?>)</p>
        </div>

        <div class="cast-item">
            <p>Original Float: <code>98.6</code></p>
            <p>Cast to String <code>(string)</code>: <strong>"<?php echo $castToString; ?>"</strong> (Type: <?php echo gettype($castToString); ?>)</p>
        </div>

        <div class="cast-item">
            <p>Original Integer: <code>1</code> and <code>0</code></p>
            <p>Cast to Boolean <code>(bool)</code>: <strong><?php echo $castToBool1 ? 'true' : 'false'; ?></strong> and <strong><?php echo $castToBool2 ? 'true' : 'false'; ?></strong> (Type: <?php echo gettype($castToBool1); ?>)</p>
        </div>
    </div>
</body>
</html>