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
    $id= $_POST['id'];
connection();

$email = $_POST['id'];
$sql = "DELETE FROM job_info WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
          
                if($email){
                    echo "<script>alert('Done');</script>";
                  
                } else {
                    echo "<script>alert('failed');</script>";
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
                    <a><input type="button" value="POST JOB VERIFICATION"></a>
                    <a href='application.php'><input type="button" value="APLICANTS APPLICATIONS"></a>
                    <a href='createadmin.php'><input type="button" value="CREATE NEW ADMIN"></a>
                    <a href='adminLogin.php'><input id='out' type="button" value="Log Out"></a>
                    
          </div>
          
          <div class="content">
                    <h1>POSTED JOB VERIFICATION</h1>
    <table border="1">
        <thead>
            <tr>
            <th>Role</th>
            <th>Company</th>
            <th>Location</th>
            <th>Description</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
          connection();
        $data = "SELECT * FROM job_info";
$query = mysqli_query($conn, $data);
while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>{$row[1]}</td>";
    echo "<td>{$row[4]}</td>";
    echo "<td>{$row[3]}</td>";
    echo "<td>{$row[8]}</td>";
    echo "<td>
            <form action='jobVF.php' method='post'>
                <input type='hidden' name='id' value='{$row[0]}'>
                <input type='submit' id='remove' value='remove' name='remove'>
            </form>
          </td>";
    echo "</tr>";
}
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