<?php include "db.php";  
connection();
if(isset($_POST['submit'])){
$email = $_POST['email'];
                $updateQuery = "UPDATE employer SET Status = 'V' WHERE EMAIL = '$email'";
                $updateQuery = mysqli_query($conn, $updateQuery);
    
                if($updateQuery){
                    echo "<script>alert('Done');</script>";
                  
                } else {
                    echo "<script>alert('failed');</script>";
                }

          }


          if(isset($_POST['delete'])){
                    $email = $_POST['id'];
                    $sql = "DELETE FROM verification WHERE id = '$email'";
                    $query = mysqli_query($conn, $sql);
                              
                                    if($email){
                                        echo "<script>alert('Done');</script>";
                                      
                                    } else {
                                        echo "<script>alert('failed');</script>";
                                    }
                    
                              }

?>


<?php
if(isset($_POST['remove'])){
    $id = $_POST['id'];
    connection(); // Assuming you have a function named connection() for database connection

    echo "
    <script>
        var x = confirm('Are you sure you want to delete this record?');
        if (x) {
            // If the user confirms, proceed with the deletion
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'your_php_script_that_handles_deletion.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    alert('Record deleted successfully');
                } else {
                    alert('Failed to delete record');
                }
            };
            xhr.send('id=$id');
        } else {
            // If the user cancels, show a message or perform any other action
            alert('Deletion canceled');
        }
    </script>
    ";
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
                    <a href='createadmin.php'><input type="button" value="CREATE NEW ADMIN"></a>
                    <a href='adminLogin.php'><input  id='out' type="button" value="Log Out"></a>
                   
          </div>
          
          <div class="content">
                    <h1>POSTED APPLICATIONS</h1>
    <table border="1">
        <thead>
            <tr>
            <th>Role</th>
            <th>Name</th>
            <th>Location</th>
            <th>Description</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
   
<?php
connection();
$data = "SELECT * FROM promote_user";
$query = mysqli_query($conn, $data);

while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>{$row[3]}</td>";
    echo "<td>{$row[1]}</td>";
    echo "<td>{$row[5]}, {$row[6]}, {$row[7]}</td>";
    echo "<td>{$row[8]}</td>";
    echo "<td>
            <form action='application.php' method='post'>
                <input type='hidden' name='id' value='{$row[0]}'>
                <input type='submit' id='remove' class='btn_1' value='remove' name='remove'>
            </form>
          </td>";
    echo "</tr>";
}

echo "</table>";
?>
            <!-- Example row, you can add more rows dynamically based on your data -->
       
        </tbody>
    </table>
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


</style>