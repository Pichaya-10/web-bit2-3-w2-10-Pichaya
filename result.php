<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            font-family: 'Kanit', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff0f5; 
            color: #4a4a4a;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .result-container {
            background-color: #ffffff;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(255, 182, 193, 0.4); 
            width: 320px;
            text-align: center;
            border: 2px solid #ffb6c1;
        }

        .result-text {
            font-size: 20px;
            font-weight: bold;
            color: #ff69b4; 
            line-height: 1.6;
            margin-bottom: 25px;
            word-wrap: break-word;
        }

        a {
            display: inline-block;
            background-color: #ffb6c1;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(255, 182, 193, 0.3);
        }

        a:hover {
            background-color: #ff69b4; 
            transform: translateY(-2px); 
        }

        a:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <div class="result-container">
        <div class="result-text">
            <?php
                
                $p_price = $_POST["p_price"];
                $p_qty = $_POST["p_qty"];

               
                $total = 4 * $p_qty;
                echo "เส้นรอบรูปขนมเปียกปูน: " . $total . " <br>";

            ?>
        </div>
        <a href="index.php">กลับไปหน้าแรก</a>
    </div>
    
</body>
</html>