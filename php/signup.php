<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    

    if (!empty($user_name) && !empty($password) && !empty($email) && !empty($gender) && !empty($age) &&  !is_numeric($user_name)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
         // Generate a random user ID
        $user_id = random_num(20);
        
        // Prepare and execute the SQL query
        $query = "INSERT INTO website (user_id, user_name, password, email, gender, age) VALUES ('$user_id', '$user_name', '$hashed_password', '$email', '$gender', '$age')";
        mysqli_query($con, $query);
        
        // Redirect to the login page
        header("location:login.php");
        die;
    } else {
        echo "Please enter valid information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <style type="text/css">
        #text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        #button {
            padding: 10px;
            width: 100px;
            color: white;
            background-color: blueviolet;
        }

        #box {
            background-color: yellow;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>
</head>
<body>
<div id="box">
    <form method="POST">
        <div style="font-size:20px; margin:10px ;color:blue;">Signup page</div>
        <div style="font-size:20px; margin:10px ;color:blue;">Username</div>
        <input id="text" type="text" name="user_name"><br><br>
        <div style="font-size:20px; margin:10px ;color:blue;">Password</div>
        <input id="text" type="password" name="password"><br><br>
        <div style="font-size:20px; margin:10px ;color:blue;">Email</div>
        <input id="text" type="email" name="email"><br><br>
        <div style="font-size:20px; margin:10px ;color:blue;">Your Gender</div>
        <input id="text" type="gender" name="gender"><br><br>
        <div style="font-size:20px; margin:10px ;color:blue;">Your Age</div>
        <input id="text" type="age" name="age"><br><br>
       

        <input id="button" type="submit" value="signup"><br><br>
        <a href="login.php">Click to login</a><br><br>
    </form>
</div>
</body>
</html>
