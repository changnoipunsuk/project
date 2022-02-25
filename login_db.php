<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Your are now logged in";
                echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "Login สำเร็จ",
                            text: "กด OK เพื่อเข้าสู่เว็บไซต์",
                            type: "success"
                        }, function() {
                            window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
            } else {
                array_push($errors, "Username หรือ Password ผิด!");
                $_SESSION['error'] = "Username หรือ Password ผิด!";
                echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "Username หรือ Password ผิด!",
                            type: "error"
                        }, function() {
                            window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
            }
        } else {
            array_push($errors, "กรุณากรอก Username และ Password!");
            $_SESSION['error'] = "กรุณากรอก Username และ Password!";
            echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "กรุณากรอก Username และ Password!",
                            type: "error"
                        }, function() {
                            window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
        }
    }

?>
