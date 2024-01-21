<?php session_start(); include "db.php";
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    connection();
    if( !$email == ''){
    $checkData ="SELECT * FROM admin";
    $validation = false;
    $query = mysqli_query($conn,$checkData);
    while($row = mysqli_fetch_array($query)){
        if($row['EMAIL'] == $email && $row['password'] == $password){
           $validation =true;
           $_SESSION['email'] = $row['EMAIL']; 
           break;
        }
    }

    if($validation){
        $_SESSION['email'] = $row['EMAIL']; 
        $data = $_SESSION['email'];
            echo"<script>alert('Welcome');</script>";
            echo"<script>window.location.href='admin.php'</script>";
    }else{
        echo"<script>alert('Account does not exist');</script>";
        echo"<script>window.location.href='adminLogin.php'</script>";
    }

  }else{
    echo"<script>alert('Empty Form');</script>";
    echo"<script>window.location.href='adminLogin.php'</script>";
  }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        form {
            width: 550px;
            height: 320PX;
            background-color: blue;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            color: #fff;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #fff;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #2980b9;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<form method="post" action="adminLogin.php">
    <h2>Admin login</h2>
    <label for="username">Email</label>
    <input type="text" id="username" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" name='submit'>Login</button>
</form>

</body>
</html>
