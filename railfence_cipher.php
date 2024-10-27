<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rail Fence Cipher Encryption and Decryption</title>
    <link rel="stylesheet" href="stylemeta.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--primary-color);
            color: var(--secondary-color);
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }



        :root {
            --primary-color: #fff;
            --secondary-color: #212121;
            --hover-color: saddlebrown;
            --container-box-shadow-color: 0 0 10px rgba(0, 0, 0, 0.1);
            --drop-down-color: #ECECEC;

        }


        .dark_theme {
            --primary-color: #212121;
            --secondary-color: #fff;
            --hover-color: #00B0A5;
            --container-box-shadow-color: 0 0 10px rgba(255, 255, 255, 0.8);
            --drop-down-color: rgba(255, 255, 255, 0.1);


        }


        .hero {
            height: 100vh;
            width: 100vw;
            background: var(--primary-color);
        }


        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 100px;
            border-bottom: var(--secondary-color);



        }


        .logo {
            font-size: 2.2vw;
            font-weight: bold;
            color: var(--secondary-color);
            cursor: pointer;
        }


        .logo::first-letter {
            font-size: 3vw;
            border: 2px solid var(--secondary-color);
            border-right: transparent;
            padding-left: 5px;
            color: var(--hover-color);
        }


        nav ul {
            display: flex;
            margin-left: 17%;
        }


        nav ul li {
            display: inline-block;
            list-style: none;
            padding: 10px 20px;
            text-align: center;
        }



        nav ul li a {
            position: relative;
            color: var(--secondary-color);
            font-weight: bold;
            padding: 5px 0;
        }



        nav ul li a:hover {
            color: var(--hover-color);
        }



        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--hover-color);
            transition: 0.3s;
        }


        nav ul li a:hover::after {
            width: 100%;
        }

        .sub-menu {
            display: none;

        }


        .sub-menu ul li a {
            color: var(--secondary-color);
        }


        nav ul li:hover .sub-menu ul li a:hover {
            color: var(--hover-color);
        }


        nav ul li:hover .sub-menu {
            display: flex;
            flex-direction: column;
            position: absolute;
            background-color: var(--drop-down-color);
            margin-top: 15px;
            /* Adjust this value as needed */
            margin-left: -15px;
            /* Adjust this value as needed */
            z-index: 999;
            /* Ensure it's above other elements */
        }


        nav ul li:hover .sub-menu ul {
            display: flex;
            flex-direction: column;
            margin: 10px;
        }


        nav ul li:hover .sub-menu ul li {
            width: 150px;
            padding: 10px;
            border-bottom: 1px dotted gray;
            background-color: transparent;
            border-radius: 0;
            text-align: left;

        }


        nav ul li:hover .sub-menu ul li:last-child {
            border-bottom: none;
        }



        .inner_sub-menu {
            display: none;
        }

        .hover-me:hover .inner_sub-menu {
            position: absolute;
            display: block;
            margin-top: -40px;
            margin-left: 140px;
            background-color: var(--drop-down-color);
        }

        .most_inner_sub-menu {
            display: none;
        }

        .inner_hover-me:hover .most_inner_sub-menu {
            position: absolute;
            display: block;
            margin-top: -40px;
            margin-left: 140px;
            background-color: var(--drop-down-color);
        }




        nav .btn {
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
            margin-left: 20%;
        }


        .btn:hover {
            background: transparent;
            color: var(--secondary-color);
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
            text-align: left;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .sidebar li {
            width: 100%;

        }

        .sidebar ul {
            width: 100%;
        }

        .sidebar #close-btn i {
            font-size: larger;
            font-weight: bolder;
            display: block;
            color: var(--secondary-color)
        }



        .nav-menu-btn i {
            font-size: larger;
            font-weight: bolder;
            display: none;


        }

        h4 a i {
            font-size: larger;
            font-weight: bolder;
            display: block;
            margin-right: 8px;




        }


        .sidebar i {
            display: inline-block;
            align-items: center;
            text-align: center;


        }

        .sidebar li a {
            display: inline-block;
            align-items: center;
            text-align: center;

        }

        .container {
            width: 60%;
            margin: 50px auto;
            padding: 20px;
            background-color: var(--primary-color);
            border-radius: 8px;
            box-shadow: var(--container-box-shadow-color);


        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--secondary-color);
        }

        form {
            margin-bottom: 20px;
            background-color: var(--primary-color);
            color: var(--secondary-color);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: var(--secondary-color);
        }

        input[type="text"],
        input[type="number"] {
            width: 98%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid var(--secondary-color);
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
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

        input[type="submit"]:hover {
            background: transparent;
            color: var(--secondary-color);
        }

        p {
            margin-top: 20px;
            font-size: 18px;
            color: var(--secondary-color);
        }


        @media (max-width:600px) {

            .logo {
                font-size: 3vw;
                margin-right: 80%;

            }


            .logo::first-letter {
                font-size: 4vw;

            }

            nav ul {
                display: none;
            }


            .nav-menu-btn i {
                display: block;
                color: var(--secondary-color);
            }

            nav .btn {
                display: none;
            }
        }



        @media(max-width:600px) {
            .sidebar {
                width: 50%;
            }

        }
    </style>
</head>

<body>
    <div class="hero">
    <nav>
            <p class="logo">CryptoHub</p>
            <ul>
                <li><a href="#">Account</a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="display_profile_info.php">My Profile</a>
                            <li><a href="change_profile.php">Edit Profile</a></li>
                            <li><a href="logout.php">Log out</a></li>

                        </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Algorithm</a>
                    <div class="sub-menu">
                        <ul>
                            <li class="hover-me"><a href="classical_info.php">Classical</a><i class="ri-arrow-drop-right-line"></i>
                                <div class="inner_sub-menu">
                                    <ul>
                                        <li><a href="caesar_info.php">Ceasar</a></li>
                                        <li><a href="columnar_transsposition_info.php">Columnar Transposition</a></li>
                                        <li><a href="playfair_info.php">Playfair</a></li>
                                        <li><a href="railfence_info.php">Railfence</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="hover-me"><a href="modern_info.php">Modern</a><i class="ri-arrow-drop-right-line"></i>
                                <div class="inner_sub-menu">
                                    <ul>
                                        <li class="inner_hover-me"><a href="Symmetric_info.php">1.Symmetric</a><i class="ri-arrow-drop-right-line"></i>
                                            <div class="most_inner_sub-menu">
                                                <ul>
                                                    <li><a href="DES_info.php">DES</a></li>
                                                    <li><a href="AES_info.php">AES</a></li>

                                                </ul>
                                            </div>
                                        </li>
                                        <li class="inner_hover-me"><a href="Asymmetric_info.php">2.Asymmetric</a><i class="ri-arrow-drop-right-line"></i>
                                            <div class="most_inner_sub-menu">
                                                <ul>
                                                    <li><a href="RSA_info.php">RSA</a></li>


                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="hover-me"><a href="hash_info.html">Hash Function</a><i class="ri-arrow-drop-right-line"></i>
                                <div class="inner_sub-menu">
                                    <ul>
                                        <li><a href="SHA1_info.php">SHA1</a></li>
                                        <li><a href="SHA256_info.php">SHA256</a></li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                </li>
                <li><a href="Contact.php">Contact</a></li>
                <li id="icon"><a><i class="ri-contrast-2-fill"></a></i></li>
            </ul>
            <a href="index.php" class="btn">Home</a>
            <h4><a href="logout.php" class="btn"><i class="ri-logout-box-r-line"></i></a></h4>

            <h4 onclick=showSidebar() class="nav-menu-btn"><i class="ri-menu-2-fill"></i></h4>

            <ul class="sidebar">
                <li onclick=closeSidebar() id="close-btn"><i class="ri-close-large-fill"></i></li>
                <li><a href="index.php"><i class="ri-home-4-fill"></i> Home</a></li>
                <li><a href="#"><i class="ri-account-circle-fill"></i> My Account</a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="display_profile_info.php">My Profile</a>
                            <li><a href="change_profile.php">Edit Profile</a></li>
                            <li><a href="logout.php">Log out</a></li>

                        </ul>
                </li>
                <li><a href="about.html"><i class="ri-team-fill"></i> About Us</a></li>
                <li><a href="#"><i class="ri-book-open-fill"></i> Algorithm</a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="classical_info.php">Classical</a></li>
                            <li><a href="modern_info.php">Modern</a></li>
                            <li><a href="hash_info.php">Hash Function</a></li>
                        </ul>
                    </div>

                </li>
                <li><a href="Contact.php"><i class="ri-phone-fill"></i> Contact Us</a></li>
                <li><a href="logout.php"><i class="ri-logout-box-r-line"></i> Logout</a></li>
                <li id="icon"><a><i class="ri-contrast-2-fill"></i></a></li>
            </ul>
        </nav>
        <div class="container">
            <h2>Rail Fence Cipher Encryption and Decryption</h2>
            <form id="encryptionForm">
                <label for="plaintext">Enter the plaintext:</label><br>
                <input type="text" id="plaintext" name="plaintext" required><br><br>
                <label for="rails">Enter the number of rails:</label><br>
                <input type="number" id="rails" name="rails" min="2" required><br><br>
                <input type="submit" value="Encrypt">
            </form>
            <p id="encryptedText"></p>

            <hr>

            <form id="decryptionForm">
                <label for="ciphertext">Enter the ciphertext:</label><br>
                <input type="text" id="ciphertext" name="ciphertext" required><br><br>
                <label for="rails_dec">Enter the number of rails:</label><br>
                <input type="number" id="rails_dec" name="rails_dec" min="2" required><br><br>
                <input type="submit" value="Decrypt">
            </form>
            <p id="decryptedText"></p>
        </div>

        <script>
            // Function to encrypt a message using Rail Fence Cipher
            function encryptRailFence(text, key) {
                let rail = new Array(key).fill().map(() => new Array(text.length).fill('\n'));
                let dir_down = false;
                let row = 0,
                    col = 0;
                for (let i = 0; i < text.length; i++) {
                    if (row === 0 || row === key - 1) dir_down = !dir_down;
                    rail[row][col++] = text[i];
                    dir_down ? row++ : row--;
                }
                let result = '';
                for (let i = 0; i < key; i++)
                    for (let j = 0; j < text.length; j++)
                        if (rail[i][j] !== '\n') result += rail[i][j];
                return result;
            }

            // Function to decrypt a message using Rail Fence Cipher
            function decryptRailFence(cipher, key) {
                let rail = new Array(key).fill().map(() => new Array(cipher.length).fill('\n'));
                let dir_down = false;
                let row = 0,
                    col = 0;
                for (let i = 0; i < cipher.length; i++) {
                    if (row === 0) dir_down = true;
                    if (row === key - 1) dir_down = false;
                    rail[row][col++] = '*';
                    dir_down ? row++ : row--;
                }
                let index = 0;
                for (let i = 0; i < key; i++)
                    for (let j = 0; j < cipher.length; j++)
                        if (rail[i][j] === '*' && index < cipher.length) rail[i][j] = cipher[index++];
                let result = '';
                row = 0, col = 0;
                for (let i = 0; i < cipher.length; i++) {
                    if (row === 0) dir_down = true;
                    if (row === key - 1) dir_down = false;
                    if (rail[row][col] !== '*') result += rail[row][col++];
                    dir_down ? row++ : row--;
                }
                return result;
            }

            // Event listener for encryption form submission
            document.getElementById("encryptionForm").addEventListener("submit", function(event) {
                event.preventDefault();
                var plaintext = document.getElementById("plaintext").value;
                var rails = parseInt(document.getElementById("rails").value);
                var encryptedText = encryptRailFence(plaintext, rails);
                document.getElementById("encryptedText").textContent = "Encrypted text: " + encryptedText;
            });

            // Event listener for decryption form submission
            document.getElementById("decryptionForm").addEventListener("submit", function(event) {
                event.preventDefault();
                var ciphertext = document.getElementById("ciphertext").value;
                var rails_dec = parseInt(document.getElementById("rails_dec").value);
                var decryptedText = decryptRailFence(ciphertext, rails_dec);
                document.getElementById("decryptedText").textContent = "Decrypted text: " + decryptedText;
            });
        </script>
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