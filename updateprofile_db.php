<?php
    session_start();
    include('server.php');
    
    $errors = array();

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "register_db";
    
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // get values form input text and number
    
    $username = $_POST['username'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        
    // mysql query to Update data
    
    $password = md5($password_1);
    $query = "UPDATE user SET name = '$name',email='$email', password='$password' WHERE username = '$username'";
    
    $result = mysqli_query($connect, $query);

    if($result)
    {
        array_push($errors, "You are update successed");
        $_SESSION['error'] = "You are update successed";
        echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "แก้ไขข้อมูลสำเร็จ",
                            text: "กดตกลงเพื่อกลับสู่เว็บไซต์",
                            type: "success"
                        }, function() {
                            window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
    }else{
        array_push($errors, "You are update failed");
        $_SESSION['error'] = "You are update failed";
        echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "Username ไม่ถูกต้อง",
                            type: "error"
                        }, function() {
                            window.location = "updateprofile.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
    }

    mysqli_close($connect);
}


?>