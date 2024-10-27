<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login_page_style.css">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <div class="hero">
        <nav>
            <p class="logo">CryptoHub</p>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li id="icon" style="margin-left:120%;"><i class="ri-contrast-2-fill"></i></li>
            </ul>
            <h4 onclick=showSidebar() class="nav-menu-btn"><i class="ri-menu-2-fill"></i></h4>


            <ul class="sidebar">
                <li onclick=closeSidebar()><i class="ri-close-large-fill"></i></li>
                <li><a href="landing_page.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li onclick=alert_msg()><a href="#">Algorithm</a>
                    <div class="sub-menu">
                        <ul>
                            <li onclick=alert_msg()><a>Classical</a></li>
                            <li onclick=alert_msg()><a href="#">Modern</a></li>
                            <li onclick=alert_msg()><a href="#">Hash Function</a></li>
                        </ul>
                    </div>

                </li>
                <li onclick=alert_msg()><a href="#">Contact</a></li>
                <li><a href="login_page.php">Login</a></li>
                <li id="icon"><a><i class="ri-contrast-2-fill"></i></a></li>


            </ul>
        </nav>

        <div class="container">
            <div class="box form-box">
                <?php

                include("config/config.php");
                if (isset($_POST['submit'])) {
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);

                    if (is_array($row) && !empty($row)) {
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['id'] = $row['Id'];
                    } else {
                        echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                        echo "<a href='login_page.php'><button class='btn'>Go Back</button>";
                    }
                    if (isset($_SESSION['valid'])) {
                        header("Location: classical_info.php");
                    }
                } else {


                ?>
                    <header>Login</header>
                    <form action="" method="post">
                        <div class="field input">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" autocomplete="off" required>
                        </div>

                        <div class="field input">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" autocomplete="off" required>
                        </div>

                        <div class="field">

                            <input type="submit" class="btn" name="submit" value="Login" required>
                        </div>
                        <div class="links">
                            Don't have account? <a href="register_user.php">Sign Up Now</a>
                        </div>
                    </form>
            </div>
        <?php } ?>
        </div>
    </div>

    <script>
        function showSidebar() {
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }

        function closeSidebar() {
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }

        var icon = document.getElementById("icon");
        var img = document.querySelector("img");

        icon.onclick = function() {
            document.body.classList.toggle("dark-theme");

        }
    </script>

    <script src="toggle_effect_other_page.js"></script>

</body>

</html>