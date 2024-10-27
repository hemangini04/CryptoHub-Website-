<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Columnar Transposition Encryption and Decryption</title>
    <link rel="stylesheet" href="stylemeta.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: var(--primary-color);
            margin: 0;
            padding: 0;
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

        button[type="submit"] {
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

        button[type="submit"]:hover {
            background: transparent;
            color: var(--secondary-color);
        }

        p {
            margin-top: 20px;
            font-size: 18px;
            color: var(--secondary-color);
        }

        #encryptedOutput,
        #decryptedOutput {
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
            <h2>Columnar Transposition Cipher</h2>

            <h3>Encryption</h3>
            <form id="encryptionForm">
                <label for="plainTextInput">Enter plaintext:</label><br>
                <input type="text" id="plainTextInput" name="plainTextInput" required><br><br>
                <button type="submit">Encrypt</button>
            </form>
            <div id="encryptedOutput"></div>

            <h3>Decryption</h3>
            <form id="decryptionForm">
                <label for="cipherTextInput">Enter ciphertext:</label><br>
                <input type="text" id="cipherTextInput" name="cipherTextInput" required><br><br>
                <button type="submit">Decrypt</button>
            </form>
            <div id="decryptedOutput"></div>
        </div>

        <script>
            document.getElementById("encryptionForm").addEventListener("submit", function(event) {
                event.preventDefault();
                const plainText = document.getElementById("plainTextInput").value;
                const encryptedText = encryptMessage(plainText);
                document.getElementById("encryptedOutput").textContent = "Encrypted Text: " + encryptedText;
            });

            document.getElementById("decryptionForm").addEventListener("submit", function(event) {
                event.preventDefault();
                const cipherText = document.getElementById("cipherTextInput").value;
                const decryptedText = decryptMessage(cipherText);
                document.getElementById("decryptedOutput").textContent = "Decrypted Text: " + decryptedText;
            });

            // JavaScript implementation of Columnar Transposition Cipher
            const key = "HACK";

            // Encryption
            function encryptMessage(msg) {
                let cipher = "";

                let k_indx = 0;

                const msg_len = msg.length;
                const msg_lst = Array.from(msg);
                const key_lst = Array.from(key).sort();

                const col = key.length;

                const row = Math.ceil(msg_len / col);

                const fill_null = (row * col) - msg_len;
                for (let i = 0; i < fill_null; i++) {
                    msg_lst.push('_');
                }

                const matrix = [];
                for (let i = 0; i < msg_lst.length; i += col) {
                    matrix.push(msg_lst.slice(i, i + col));
                }

                for (let _ = 0; _ < col; _++) {
                    const curr_idx = key.indexOf(key_lst[k_indx]);
                    for (const row of matrix) {
                        cipher += row[curr_idx];
                    }
                    k_indx++;
                }

                return cipher;
            }

            // Decryption
            function decryptMessage(cipher) {
                let msg = "";

                let k_indx = 0;
                let msg_indx = 0;
                const msg_len = cipher.length;
                const msg_lst = Array.from(cipher);

                const col = key.length;

                const row = Math.ceil(msg_len / col);

                const key_lst = Array.from(key).sort();

                const dec_cipher = [];
                for (let i = 0; i < row; i++) {
                    dec_cipher.push(Array(col).fill(null));
                }

                for (let _ = 0; _ < col; _++) {
                    const curr_idx = key.indexOf(key_lst[k_indx]);

                    for (let j = 0; j < row; j++) {
                        dec_cipher[j][curr_idx] = msg_lst[msg_indx];
                        msg_indx++;
                    }
                    k_indx++;
                }

                try {
                    msg = dec_cipher.flat().join('');
                } catch (err) {
                    throw new Error("This program cannot handle repeating words.");
                }

                const null_count = (msg.match(/_/g) || []).length;

                if (null_count > 0) {
                    return msg.slice(0, -null_count);
                }

                return msg;
            }
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
    </div>
</body>

</html>