<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register || PVET Technologies</title>
    <style>
    /* Basic reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Center the form on the page */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
    }

    /* Form container styling */
    form {
        width: 100%;
        max-width: 400px;
        padding: 2rem;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 1.5rem;
        font-size: 24px;
        color: #333;
    }

    /* Input box styling */
    .input-box label {
        display: block;
        margin: 0.5rem 0 0.2rem;
        color: #333;
        font-size: 14px;
    }

    .input-box input {
        width: 100%;
        padding: 0.8rem;
        margin-bottom: 1rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }

    /* Button styling */
    .box-btn {
        text-align: center;
    }

    .box-btn button {
        padding: 0.8rem 1.5rem;
        font-size: 16px;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .box-btn button:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <form action="Admin_Register.php" method="get">
        <h1>Login</h1>
        <div class="input-box">
            <label for="Detalis"></label>
            <input type="Test" name="user_id" placeholder="Enter Your User Id"><br>

            <label for="Detalis"></label>
            <input type="Email" name="username" placeholder="Enter Your Username"><br>

            <label for="Detalis"></label>
            <input type="text" name="first_name" placeholder="Enter Your First Name "><br>

            <label for="Detalis"></label>
            <input type="text" name="last_name" placeholder="Enter Your Last Name"><br>

            <label for="Detalis"></label>
            <input type="text" name="designation" placeholder="Enter Your Designation"><br>

            <label for="Detalis"></label>
            <input type="Password" name="Password" placeholder="Enter Your Password"><br>

            <div class="box-btn">
                <Button type="submit">Login</Button>
            </div>
        </div>
    </form>
</body>

</html>