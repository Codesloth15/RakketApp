
<?php include "db.php"; 


if(isset($_POST['submit'])){


    $email = $_POST['email'];
    $password = $_POST['password'];
    connection();
    $newData = "INSERT INTO admin(EMAIL,password) VALUES ('$email', '$password')";
    $checkData ="SELECT * FROM admin";
    $validation = true;
    $query = mysqli_query($conn,$checkData);
    while($row = mysqli_fetch_array($query)){
        if($row['EMAIL'] == $email){
           $validation =false;
           break;
        }
    }

    if($validation){
        mysqli_query($conn,$newData);
        echo"<script>alert('Success');</script>";
        echo"<script>window.location.href='LoginJobSeeker.php'</script>";
    }else{
        echo"<script>alert('account already exist');</script>";
        echo"<script>window.location.href='admin.php'</script>";
    }

}
?>






<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <div id="container">

          <div class="side-nav">
                    <div class="Logo">
<h1 id='logo'>RAKKET</h1>
                    </div>
                    <a href='admin.php'><input type="button" value="EMPLOYER VERIFICATION"></a>
                    <a href='jobVF.php'><input type="button" value="POST JOB VERIFICATION"></a>
                    <a><input type="button" value="APLICANTS APPLICATIONS"></a>
                    <a href='adminLogin.php'><input  id='out' type="button" value="Log Out"></a>
                   
          </div>
          
          <div class="content">
          <form method="post" action="createADMIN.php">
    <h2>Create New Admin</h2>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" name='submit'>Create Admin</button>
</form>
</div>





          </div>
          
</body>
</html>
<style>
          #container {
                    width: 100%;
                    height: 100vh; 
                    display: flex;
                    flex-direction: row;
          }.side-nav{
                    display: flex;
                    flex-direction: column;
                    width: 350px;
                    padding: 10px;
                    height: 100vh; 
                    background-color: blue;
          }.content{
                    padding: 20px;
                    width: 100%;
                    height: 100%;
               
          }a input{
                    width: 300px;
                    height: 45px;
                    margin-top: 10px;
          }.Logo{
                    height: 120px;

          }table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    #vr {
        padding: 8px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }

    #vr:hover {
        background-color: #45a049;
    }a input:hover{
          background-color: skyblue;
    }#logo{
          color: white;
          text-align: center;
    }tbody{
     overflow: scroll;
    }#remove{
        width: 100px;
        height: 40px;
        background-color: maroon;
        color: white;
        border-radius: 5px;
    }#remove:hover{
        background-color: redbrown ;
        color:white;

    }#out{
        margin-top: 200px;
    }
    form {
    width: 550px;
    height: 320px;
    background-color: blue;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    color: #fff;
    margin: 0 auto; /* Center the form horizontally */
    margin-top: 50px; /* Adjust the top margin as needed */
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