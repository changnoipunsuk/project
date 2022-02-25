<?php
session_start();
include('server.php');

$errors = array();

// php code to Update data from mysql database Table


if (isset($_POST['delete'])) {
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
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

    // mysql query to Update data

    $user_check_query = "SELECT * FROM user WHERE username = '$username'";
    $query = mysqli_query($conn, $user_check_query);
    $result = mysqli_fetch_assoc($query);

    if ($result['username'] === $username) { // if user exists
        $query = "DELETE from user WHERE username = '$username'";
        $sql = mysqli_query($connect, $query);
        if ($sql) {
            array_push($errors, "Delete successed");
            $_SESSION['error'] = "Delete successed";
            session_destroy();
            unset($_SESSION['username']);
            echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "ลบบัญชีสำเร็จ",
                            text: "กดตกลงเพื่อกลับสู่เว็บไซต์",
                            type: "success"
                        }, function() {
                            window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
        }
    } else {
        array_push($errors, "Not Found username");
        $_SESSION['error'] = "Not Found username";
        echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "Username ไม่ถูกต้อง",
                            type: "error"
                        }, function() {
                            window.location = "delete.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
    }
    mysqli_close($connect);
}
