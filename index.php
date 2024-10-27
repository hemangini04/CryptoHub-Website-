<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoHub Website</title>
    <link rel="stylesheet" href="style/index_page_style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>
    <div class="hero">
        <nav>
            <p class="logo">CryptoHub</p>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li  onclick=alert_msg()><a href="#">Algorithm</a>
                    <div class="sub-menu">
                        <ul>
                            <li  onclick=alert_msg()><a>Classical</a></li>
                            <li  onclick=alert_msg()><a href="#">Modern</a></li>
                            <li  onclick=alert_msg()><a href="#">Hash Function</a></li>
                        </ul>
                    </div>
                
                </li>
                <li  onclick=alert_msg()><a href="#">Contact</a></li>
                <li id="icon"><a><i class="ri-contrast-2-fill"></i></a></li>
            </ul>
            <a href="login_page.php" class="btn">Login</a>
            <h4 onclick=showSidebar() class="nav-menu-btn"><i class="ri-menu-2-fill"></i></h4>
            

            <ul class="sidebar">
                <li onclick=closeSidebar()><i class="ri-close-large-fill"></i></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li  onclick=alert_msg()><a href="#">Algorithm</a>
                    <div class="sub-menu">
                        <ul>
                            <li  onclick=alert_msg()><a>Classical</a></li>
                            <li  onclick=alert_msg()><a href="#">Modern</a></li>
                            <li  onclick=alert_msg()><a href="#">Hash Function</a></li>
                        </ul>
                    </div>
                
                </li>
                <li  onclick=alert_msg()><a href="#">Contact</a></li>
                <li><a href="login_page.php">Login</a></li>
                <li id="icon"><a><i class="ri-contrast-2-fill"></i></a></li>
                
                
            </ul>
        </nav>
    </div>
    <div class="detail">
        <h1><span id = "element">CryptoGraphy</span></h1>
        <p>"Explore the world of cryptography with our immersive e-learning platform, where<br>each lesson unlocks the power to secure digital secrets. Join a vibrant community<br>of enthusiasts as we unravel encryption mysteries together. Elevate your skills,<br> fortify data integrity, and become a guardian of secure communication. Start your<br>adventure today and master the art of cryptography with us."</p>
        <a href="register_user.php" class="btn">Register Now</a>
    </div>
    <div class="image">
        <img src="https://media.licdn.com/dms/image/D4D12AQEkBAY2ONkR4A/article-cover_image-shrink_720_1280/0/1686379752495?e=2147483647&v=beta&t=BIcFX4n1toskTGh0AI1lbdNW1nN80hUwkyynMD7fWfA" id='image_change'>
    </div>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#element', {
          strings: ['Explore','the art of ','CryptoGraphy'],
          typeSpeed: 80,
          shuffle:false,
          loop: true,
          loopCount: Infinity,
        });

        function showSidebar(){
            const sidebar=document.querySelector('.sidebar')
            sidebar.style.display='flex'
        }

        function closeSidebar(){
            const sidebar=document.querySelector('.sidebar')
            sidebar.style.display='none'
        }

        function alert_msg()
        {
            alert("Thanks for Visiting CryptoHub Website!!!!\n Kindly Login To access this fields!!");

        }


    </script>

    <script src="toggle_effect_index.js"></script>

      
</body>
</html>