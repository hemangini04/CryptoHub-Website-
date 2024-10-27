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

    <title>Profile Info</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

    <style>
        body
        {
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

        #icon i{
            width: 30px;
            cursor: pointer;
            font-size: 40px;
            font-weight: bolder;
            color: var(--hover-color);
            display: inline-block;
            margin-right: 10px;
            margin-top:6px;
            
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
            margin-left:50%;
            


        }

        a {
            text-decoration: none;
            color:var(--secondary-color);
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
            <p>CryptoHub</p>
        </div>

        <div class="right-links">
            <h4 id="icon"><i class="ri-contrast-2-fill"></i></h4>

            <?php

            $id = $_SESSION['id'];
            $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

            while ($result = mysqli_fetch_assoc($query)) {
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
                $res_password = $result['Password'];
            }

            echo "<a href='change_profile.php?Id=$res_id'><button class='btn'>Change Profile</button></a>";
            ?>
             
            <a href="logout.php"> <button class="btn">Log Out</button> </a>

        </div>
    </div>
    <main>

        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
                </div>
                <div class="box">
                    <p>Your email is <b><?php echo $res_Email ?></b>.</p>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <p>And you are <b><?php echo $res_Age ?> years old</b>.</p>
                </div><br>
                <div class="box">
                    <p>Thanks For Visiting our Website!!</p>
                </div>
            </div>
        </div>

    </main>
    <script src="toggle_effect_other_page.js"></script>
</body>

</html>