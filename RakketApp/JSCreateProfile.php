<?php  session_start(); include "db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container-fluid">
  <a href="JobseekerHome.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4"><h1 >RAKKET</h1></span>
      </a>
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

   <div class="Profile-container">
    <div class="side-menu">
        <div class="pro-card">
            <h4 >My Account</h4>
            <a href="JobseekerHome.php"><h2>Home</h2></a>
            <a href="JSCreateProfile.php"><h2>Profile </h2></a> 
            <a href="JSSaveJobs.php"><h2>Jobs</h2></a>
            <a href="job.php">
                    <h2>Alert</h2>
                </a>

        </div>
     
    </div>

    <div class="create-prof">
    <div class="container my-5">
  <div class="p-5 text-center bg-body-tertiary rounded-3">
    
    <img id='pr' src='./img-resource/employee.png'>
    <h1 class="text-body-emphasis">
    <?php  connection();

    $user = $_SESSION['email'];

    $data="SELECT * FROM user_info WHERE EMAIL = '$user'";
    $query = mysqli_query($conn, $data);
    while($row  = mysqli_fetch_array($query)){
       echo"<h3>$row[2]$row[1]</h3>";
    }

    ?></h1>
    <p  class="col-lg-8 mx-auto fs-5 text-muted">
    <?php connection();
    $user = $_SESSION['email'];
    $data="SELECT * FROM user_info WHERE EMAIL = '$user'";
    $query = mysqli_query($conn, $data);
    while($row  = mysqli_fetch_array($query)){
        if(!$row[7]){
            echo" <form method='post' action='profile.php'>
            <h2 id='Service'>$row[4]</h2><br>
            <h5 id='Service'>$row[8]</h5><br>
            <h5 id='Service'>$row[9]</h5><br>
            <h4 id='bio'>$row[7]</h4>
            <br>
            <br>
            <input id='btn_3' type='submit' name='update' value='Update'>
            </form>";
        }else{
            echo" <form method='post' action='profile.php'>
            <h2 id='Service'>$row[4]</h2><br>
            <h5 id='Service'>$row[8] |         <img id='ps' src='./img-resource/call.png'>$row[9]</h5><br>
            <h4 id='bio'>$row[7]</h4>
            <br>
            <br>
     
            <input id='btn_3' type='submit' name='update' value='Update'>
            </form>";
        }
    }

    ?>
    </p>
  </div>
</div>

       
    </div>

   </div>
<footer>

</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/7.8.5/d3.min.js"></script>
    <script>
        let menus = document.getElementById("form_1");
        let loginChoice = document.getElementById("login_choice");

        function menu() {
            if (menus.style.height === "0px" || menus.style.height === "0%") {
                menus.style.height = "100%";
            } else {
                menus.style.height = "0";
            }
        }

        function login() {
            // Get a reference to the #login-choice element
            var loginChoice = document.getElementById('login-choice');

            if (loginChoice.style.display === "none" || loginChoice.style.display === "") {
                loginChoice.style.display = "flex"; // Show the element
            } else {
                loginChoice.style.display = "none"; // Hide the element
            }
        }

        function logInJobSeeker() {
            window.location.href = "LoginJobSeeker.html";
        }

        function logInJobSeeker() {
            window.location.href = "LoginJobSeeker.html";
        }
    </script>
</body>
<style>
  .nav-link{
        font-size: 20px;
        font-weight: 700;
        color: #394ec5;
    }#logo{
        width: 90px;
        height: 80px;
        margin: 5px;
        margin-left: 50px;

    }.side-menu{
        width: 350px;
        height: 100%px;
        margin-left: 125px;
    }.create-prof{
        width: 750px;
        height: 100%px;
        margin-left: 80px;
        margin-top: 50px;
    }.Profile-container{
        padding: 10px;
        width:100%;
         height: 750px;
        display: flex;
        flex-direction: row;
    }.pro-card{
        height: 600px;
        border: solid 0.1px;
        border-radius: 10px;
    }.pro-card h4{
 
        text-align: center;
        padding: 10px;
        color: rgb(255, 255, 255);
        border-radius: 10px 10px 0px 0px;
        background-color: rgb(145, 145, 145);
    }.input-area{
        width: 90%;
        height: 60px;
        border-radius: 5px;
        border: solid 0.5px;
        font-size: 25px;
        padding: 10px;
        padding-left:15px ;
    }.form-horizontal label{
        font-size: 25px;
    }.create-prof h1{
        margin-bottom: 50px;
        color: rgb(255, 42, 0);
    }footer{
    height: 400px;
    }h2{
       border-bottom: solid 0.5px;
       font-size: 20px;
       padding: 5px;
       margin-left: 20px;
       margin-right: 40px;
       margin-top: 40px;
 
    }h2:hover{
        border-bottom: blue solid 3px;
       font-size: 20px;
       padding: 5px;
       margin-left: 20px;
       margin-right: 40px;
       margin-top: 40px;
       color: blue;
   
    } a{
        text-decoration: none;
    }#form_1{
width: auto;
}#location{
    margin-bottom: 10px;
}#pr{
    width: 120px;
    height: 120px;
}#bio{
    text-align: justify;
    font-size: 18px;
    max-height: 300px;
    overflow: hidden;
}#Service{
    font-size: 25;
}#btn_3{
    width: 130px;
    height: 40px;
    border-radius: 5px;
    background-color: #394ec5;
    color: white;
}h3{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}#ps{
    width: 25px;
    height: 25px;
    margin-left: 5px;
    margin-right: 3px;
}
</style>


</html>