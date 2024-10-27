<?php
session_start();

include("config/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: login_page.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Change Profile</title>

    <style>
        body {
            background-color: var(--primary-color);
        }

        .nav {
            background: var(--primary-color);
            color: var(--secondary-color);
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            line-height: 60px;
            z-index: 100;
            margin-top: 3%;
        }

        .sidebar {
            position: fixed;
            top: 0;
            right: 0;
            height: 100%;
            width: 40%;
            z-index: 999;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .sidebar li {
            width: 100%;
        }

        .sidebar ul {
            width: 100%;
        }


        .sidebar li i {
            color: var(--secondary-color);
        }


        #icon i {
            width: 30px;
            cursor: pointer;
            font-size: 40px;
            font-weight: bolder;
            color: var(--hover-color);
            display: inline-block;
            margin-right: 10px;
            margin-top: 6px;

        }

        




        #icon i:hover {
            background: transparent;
            color: var(--secondary-color);
        }


        :root {
            --primary-color: #fff;
            --secondary-color: #212121;
            --hover-color: saddlebrown;
            --container-box-shadow-color: 0 0 10px rgba(0, 0, 0, 0.1);

        }


        .dark_theme {
            --primary-color: #212121;
            --secondary-color: #fff;
            --hover-color: #00B0A5;
            --container-box-shadow-color: 0 0 10px rgba(255, 255, 255, 0.8);


        }

        .right-links {
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: row;
            background: var(--primary-color);
            color: var(--secondary-color);
            margin-left: 50%;



        }

        a {
            text-decoration: none;
            color: var(--secondary-color);
        }


        .container {

            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 90vh;
            background-color: var(--primary-color);
            color: var(--secondary-color);

        }



        .logo {
            font-size: 2.2vw;
            font-weight: bold;
            color: #333;
            cursor: pointer;
            background: var(--primary-color);
            color: var(--secondary-color);
        }


        .logo::first-letter {
            font-size: 3vw;
            border: 2px solid var(--secondary-color);
            border-right: transparent;
            padding-left: 5px;
            color: var(--hover-color);
        }


        .right-links a {
            padding: 0 10px;
            background: var(--primary-color);
            color: var(--secondary-color);
        }

        main {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 60px;
            background: var(--primary-color);
            color: var(--secondary-color);
        }

        .main-box {
            display: flex;
            flex-direction: column;
            width: 70%;
            background: var(--primary-color);
            color: var(--secondary-color);
        }

        .main-box .top {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background: var(--primary-color);
            color: var(--secondary-color);
        }

        .box {
            background: #fdfdfd;
            display: flex;
            flex-direction: column;
            padding: 25px 25px;
            border-radius: 20px;
            box-shadow: var(--container-box-shadow-color);
            background: var(--primary-color);
            color: var(--secondary-color);
        }

        .form-box {
            width: 450px;
            margin: 0px 10px;
            color: var(--secondary-color);
            background-color: var(--primary-color);
        }

        .form-box header {
            font-size: 25px;
            font-weight: 600;
            padding-bottom: 10px;
            border-bottom: 1px solid #e6e6e6;
            margin-bottom: 10px;
        }

        .form-box form .field {
            display: flex;
            margin-bottom: 10px;
            flex-direction: column;

        }

        .form-box form .input input {
            height: 40px;
            width: 100%;
            font-size: 16px;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }


        .bottom {
            width: 100%;
            margin-top: 20px;
            background: var(--primary-color);
            color: var(--secondary-color);
        }

        .message {
            text-align: center;
            background: var(--primary-color);
            padding: 15px 0px;
            border: 1px solid #699053;
            border-radius: 5px;
            margin-bottom: 10px;
            color: red;
            background: var(--primary-color);
            color: var(--secondary-color);
        }

        .btn {
            color: var(--primary-color);
            font-size: 16px;
            text-transform: uppercase;
            background: var(--hover-color);
            padding: 10px 30px;
            border-radius: 500px;
            display: flex;
            font-weight: 500;
            transition: all 0.4s ease-in-out;
            border: 2px solid var(--hover-color);
            justify-content: center;

        }


        .btn:hover {
            background: transparent;
            color: var(--secondary-color);
        }


        @media only screen and (max-width:840px) {
            .main-box .top {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .top .box {
                margin: 10px 10px;
            }

            .bottom {
                margin-top: 0;
            }






        }
    </style>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p>CryptoHub</a></p>
        </div>

        <div class="right-links">
            <h4 id="icon"><i class="ri-contrast-2-fill"></i></h4>
            <a href="logout.php"> <button class="btn">Log Out</button> </a>


        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email', Age='$age' WHERE Id=$id ") or die("error occurred");

                if ($edit_query) {
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                </div> <br>";
                    echo "<a href='display_profile_info.php'><button class='btn'>Display Profile</button>";
                }
            } else {

                $id = $_SESSION['id'];
                $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id ");

                while ($result = mysqli_fetch_assoc($query)) {
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                }

            ?>
                <header>Change Profile</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" value="<?php echo $res_Age; ?>" autocomplete="off" required>
                    </div><br>

                    <div class="field">

                        <input type="submit" class="btn" name="submit" value="Update" required>
                    </div>

                </form>
        </div>
    <?php } ?>
    </div>

    <script src="toggle_effect_other_page.js"></script>
</body>

</html>