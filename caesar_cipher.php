<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caesar Cipher Encryption and Decryption</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--primary-color);
            overflow-x: hidden;
            color: var(--secondary-color);
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
            <h2>Caesar Cipher Encryption</h2>
            <form id="encryptForm">
                <label for="plaintext">Enter the plaintext:</label><br>
                <input type="text" id="plaintext" name="plaintext" required><br><br>
                <label for="key">Enter the key:</label><br>
                <input type="number" id="key" name="key" required><br><br>
                <input type="submit" value="Encrypt">
            </form>
            <div id="encryptedText"></div>

            <hr>

            <h2>Caesar Cipher Decryption</h2>
            <form id="decryptForm">
                <label for="ciphertext">Enter the ciphertext:</label><br>
                <input type="text" id="ciphertext" name="ciphertext" required><br><br>
                <label for="key_dec">Enter the key:</label><br>
                <input type="number" id="key_dec" name="key_dec" required><br><br>
                <input type="submit" value="Decrypt">
            </form>
            <div id="decryptedText"></div>
        </div>

        <script>
            // Caesar Cipher Encryption Function
            function caesarCipher(text, key) {
                let result = "";
                for (let i = 0; i < text.length; i++) {
                    let char = text[i];
                    if (char.match(/[a-z]/i)) {
                        let code = text.charCodeAt(i);
                        let shift = code + key;
                        if (char.match(/[a-z]/)) {
                            if (shift > 122) {
                                shift -= 26;
                            } else if (shift < 97) {
                                shift += 26;
                            }
                        } else if (char.match(/[A-Z]/)) {
                            if (shift > 90) {
                                shift -= 26;
                            } else if (shift < 65) {
                                shift += 26;
                            }
                        }
                        result += String.fromCharCode(shift);
                    } else {
                        result += char;
                    }
                }
                return result;
            }

            // Caesar Cipher Decryption Function
            function caesarDecipher(text, key) {
                return caesarCipher(text, -key);
            }

            // Form submit event for encryption
            document.getElementById('encryptForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const plaintext = document.getElementById('plaintext').value;
                const key = parseInt(document.getElementById('key').value);
                const encryptedText = caesarCipher(plaintext, key);
                document.getElementById('encryptedText').textContent = "Encrypted text: " + encryptedText;
            });

            // Form submit event for decryption
            document.getElementById('decryptForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const ciphertext = document.getElementById('ciphertext').value;
                const keyDec = parseInt(document.getElementById('key_dec').value);
                const decryptedText = caesarDecipher(ciphertext, keyDec);
                document.getElementById('decryptedText').textContent = "Decrypted text: " + decryptedText;
            });
        </script>
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