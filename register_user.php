<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login_page_style.css">
    <title>Register</title>
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


            </ul>
        </nav>

        <div class="container">
            <div class="box form-box">

                <?php

                include("config/config.php");
                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $age = $_POST['age'];
                    $password = $_POST['password'];

                    //verifying the unique email

                    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

                    if (mysqli_num_rows($verify_query) != 0) {
                        echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    } else {

                        mysqli_query($con, "INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

                        echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
                        echo "<a href='login_page.php'><button class='btn'>Login Now</button>";
                    }
                } else {

                ?>

                    <header>Sign Up</header>
                    <form action="" method="post">
                        <div class="field input">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" autocomplete="off" required>
                        </div>

                        <div class="field input">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" autocomplete="off" required>
                        </div>

                        <div class="field input">
                            <label for="age">Age</label>
                            <input type="number" name="age" id="age" autocomplete="off" required>
                        </div>
                        <div class="field input">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" autocomplete="off" required>
                        </div>
                        <br>

                        <div class="field">

                            <input type="submit" class="btn" name="submit" value="Register" required>
                        </div>
                        <div class="links">
                            Already a member? <a href="login_page.php">Sign In</a>
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

        
    </script>
    <script src="toggle_effect_other_page.js"></script>

</body>

</html>