<!DOCTYPE html>

<head>
    <title>Product And Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #container {
        background-color: black;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url(Photo/Background_image.png);
    }

    .wrapper {
        min-width: 400px;
        color: #ffffff;
        padding: 30px;
        background-color: transparent;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        transition: 0.3s;
    }

    .wrapper:hover {
        transform: scale(1.05);
    }

    form h1 {
        text-align: center;

    }

    form .input-box {
        background-color: transparent;
        position: relative;
    }

    form .box-btn {
        text-align: center;
    }

    .input-box input {
        min-width: 100px;
        width: 100%;
        padding: 10px 20px;
        border-radius: 27px;
        background-color: transparent;
        border: 1px solid white;
    }

    .link-box a {
        color: #ffff00;

    }

    .link-box {
        margin: 16px;
    }

    input::placeholder {
        color: #ffffff;
    }

    .box-btn button {
        margin-top: 20px;
        padding: 10px 28px;
        background-color: #3ad8dd;
        border: none;
        border-radius: 9px;
        font-size: 15px;
    }

    .pop-box {
        max-width: 400px;
        width: 100%;
        height: 200px;
        background-color: white;
        position: relative;
    }

    .pop-box p {
        color: green;
        font-size: 17px;
        text-align: center;
    }

    .input-box img,
    svg {
        vertical-align: middle;
        position: absolute;
        right: 10px;
        transform: translate(-3px, 11px);
    }
    .login-img img{
        transform: translate(140px, 0px);
        border-radius: 20px;
    }
    </style>
</head>

<body>

    <div class="wrapper">
        <form action="Admin_Login.php" method="POST">
            <div class="login-img">
                <img src="Photo/login.gif" alt="Login" width="60px">
            </div>
            <div class="input-box">
                <label for="Detalis"></label>
                <input type="Email" name="Username" placeholder="Enter Your Username" Required>
                <img src="Photo/user.png" alt=""><br>
                <label for="Detalis"></label>
                <input type="Password" name="Password" placeholder="Enter Your Password" Required><br>


                <div class="link-box">
                    <!-- <label for="Detalis">Remember me:</label> -->
                    <a href="Register.php">Register Now</a>
                </div>
                <div class="box-btn">
                    <Button type="submit">Login</Button>
                </div>
            </div>

        </form>
        <!-- <div class="pop-box">
            <p>"Invalid username or password."</p>
        </div> -->
        <div id="container">

        </div>
    </div>

    <script>

    </script>
</body>

</html>