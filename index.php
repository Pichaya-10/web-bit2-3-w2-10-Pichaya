<!DOCTYPE html>
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

        h1 {
            color: #ff69b4; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            font-size: 24px;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(255, 182, 193, 0.4); 
            width: 300px;
            border: 2px solid #ffb6c1; 
        }

        label {
            display: block;
            font-weight: bold;
            color: #ff69b4;
            margin-bottom: 8px;
            margin-top: 12px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #ffe4e1;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            transition: all 0.3s ease;
            outline: none;
            color: #555;
        }

        input[type="number"]:focus {
            border-color: #ff69b4;
            box-shadow: 0 0 8px rgba(255, 105, 180, 0.3);
        }

        input[type="submit"] {
            width: 100%;
            background-color: #ff69b4;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 25px;
            transition: background-color 0.3s ease, transform 0.1s ease;
            box-shadow: 0 4px 10px rgba(255, 105, 180, 0.3);
        }

        input[type="submit"]:hover {
            background-color: #ff1493;
        }

        input[type="submit"]:active {
            transform: scale(0.98); 
        }
    </style>
</head>
<body>
    <h1>งานที่ 2 Pichaya BIT.2/3 เลขที่ 10</h1>
    <form action="result.php" method="post">

        
        <label for="">เส้นทแยง:</label>
        <input type="number"  name="p_qty" ><br>

        <input type="submit" value="คำนวณ">
    </form>
</body>
</html>