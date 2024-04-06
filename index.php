<?php

include("connect.php");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            background: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid gray;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        
        .form-group input {
            width: 90%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        
        .form-group button {
            width: 40%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Form</h2>
        <form action="code.php" method="POST">
            <div class="form-group">
                <label for="adharno">Adhar Name :</label>
                <input type="text" id="username" name="ename" required>
            </div>
            <div class="form-group">
                <label for="dob">D.O.B. :</label>
                <input type="date" id="adhardob" name="adhardob" required>
            </div>
            <div class="form-group">
                <button type="submit" name="loginbtn">Login</button>
            </div>
            <a href="adharsignup.php">create new adhar</a>
        </form>
    </div>
</body>
</html>
