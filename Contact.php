<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact us</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        * {
            margin: 0;

            padding: 0;
        }


        body {
            background: var(--primary-color);
            font-size: 14px;
            font-family: "Poppins", sans-serif;
            overflow-y: hidden;
            color:var(--secondary-color);
        }

        .nav {
            background: var(--primary-color);
            color: var(--secondary-color);
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            line-height: 60px;
            z-index: 100;
            margin-top: 1%;
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

        .message {
            vertical-align: middle;
        }

        .container {
            width: 80%;
            margin: 50px auto;
        
        }


        .contact-box {
            background: var(--primary-color);
            display: flex;
            box-shadow:var(--container-box-shadow-color);
        }


        .contact-left {
            flex-basis: 60%;
            padding: 40px 60px;
        }


        .contact-right {
            flex-basis: 40%;
            padding: 40px;
            background:var(--hover-color);
            color: var(--primary-color);
            
        }


        h1 {
            margin-bottom: 10px;
        }


        .container p {
            margin-bottom: 10px;
        }


        .input-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        ::placeholder
        {
            color:var(--secondary-color);
        }

        .input-row .input-group {
            flex-basis: 45%;

        }


        input {
            width: 100%;
            border: none;
            border-bottom: 1px solid var(--secondary-color);
            outline: none;
            padding-bottom: 5px;
            background-color: var(--primary-color);
            color:var(--secondary-color);
        }


        label .message {
            vertical-align: middle;
            text-align: center;
            margin-bottom: 30%;

        }


        button {

            width: 200px;
            height: 50px;
            border-radius: 50px;
            background-color: var(--hover-color);
            color: var(--primary-color);
        }

        button:hover {
            background-color: var(--primary-color);
            border: 2px solid var(--hover-color);
            color: var(--secondary-color);
        }

        textarea {
            width:100%;
            background-color: var(--primary-color);
            color:var(--secondary-color);
            text-align: start;
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
            <a href="index.php"> <button class="btn">Home</button> </a>

        </div>
    </div>
    <div class="container">
        <h1>Connect With Us</h1>
        <p>We would love to respond to your queries and help you succeed. Feel free to get in touch with us.</p>

        <div class="contact-box">

            <div class="contact-left">
                <h3>Sent your request</h3>
                <form name="contact-form" action="https://api.web3forms.com/submit" method="POST">
                    <input type="hidden" name="access_key" value="3f7ac50a-58c6-447a-8726-eba73e14103a">
                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" name="name1" placeholder="John Amendo">
                        </div>
                        <div class="input-group">
                            <label>Phone</label>
                            <input type="text" name="phone" placeholder="+1 412 520 3231">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="johnamendogm@gmail.com">
                        </div>
                    </div>


                    <div class="input-group">
                        <label>Subject</label>
                        <input type="text" name="subject" placeholder="some reason....">

                    </div>
                    <br><br>

                    <label class="message"><p>Message</p></label>
                    <textarea rows="5" placeholder=" Your Message" name="message"></textarea>
                    <br><br>
                    <button type="submit">Submit</button>

                    <p class="error register-error"></p>
                </form>
            </div>
            <div class="contact-right">
                <h3>Reach us</h3>

                <table>
                    <tr>
                        <td>Email</td>
                        <td>Contact us@example.com</td>
                    </tr>

                    <tr>
                        <td>Phone</td>
                        <td>+91 9404739364</td>
                    </tr>

                    <tr>
                        <td>Address</td>
                        <td>Contact us@example.com</td>
                    </tr>

                    <tr>
                        <td>Address</td>
                        <td>#212,Ground floor,7th cross<br>Gulmohar Nagar,Reliance Petrol Pump<br>Nashik 422009</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="toggle_effect_other_page.js"></script>
</body>

</html>