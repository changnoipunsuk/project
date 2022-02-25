<?php 
    session_start();
    include('server.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Edit Profile</h2>
                        <form action="updateprofile_db.php" method="POST" class="register-form" id="register-form">
                            <?php include('errors.php'); ?>
                            <?php if (isset($_SESSION['error'])) : ?>
                                <div class="error">
                                    <h3>
                                        <?php
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                        ?>
                                    </h3>
                                </div>
                            <?php endif ?>

                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username To Update"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Change Your Name"/>
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" id="email" placeholder="Change Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_1" id="password_1" placeholder="Change Your Password"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_2" id="password_2" placeholder="Confirm Your Password"/>
                                
                            </div>

                            <div class="form-group form-button">

                                <button type="submit" name="update" class="form-submit">EDIT</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/avatar-01.png" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

