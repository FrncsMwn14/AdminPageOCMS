<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Señora de la Soledad Parish</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #28205a;
            color: white;
            height: 100vh;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(40, 32, 90, 0.6);
        }
        .login-box {
            position: relative;
            z-index: 2;
            background-color: #3f3b82;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .login-box img {
            width: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .login-box h1 {
            margin: 0;
            padding: 0;
            font-size: 24px;
            color: white;
            margin-bottom: 20px;
        }
        .login-box p {
            margin: 0;
            padding: 0;
            font-size: 18px;
            margin-bottom: 20px;
            color: white;
        }
        .login-box input {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .login-box button {
            width: 100%;
            padding: 10px;
            background-color: #28205a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        .login-box button:hover {
            background-color: #1e1742;
        }
        .login-box a {
            color: white;
            text-decoration: none;
        }
        .login-box a:hover {
            text-decoration: underline;
        }
        .header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            text-align: center;
            background-color: #28205a;
            z-index: 1;
        }
        .header img {
            height: 40px;
            vertical-align: middle;
        }
        .header h1 {
            display: inline;
            margin-left: 10px;
            font-size: 18px;
            vertical-align: middle;
        }
    </style>
    <script>
        function redirectToDashboard(event) {
            event.preventDefault();
            // Additional validation logic can be added here if needed
            window.location.href = 'dashboard.php';
        }
    </script>
</head>
<body>
    <div class="header">
        <img src="logo.png" alt="Logo">
        <h1>NUESTRA SEÑORA DE LA SOLEDAD PARISH</h1>
    </div>
    <div class="container">
        <div class="overlay"></div>
        <div class="login-box col-10 col-md-6 col-lg-4 mx-auto">
            <img src="seal.png" alt="Seal">
            <h1>LOGIN</h1>
            <p>STAFF</p>
            <form action="process.php" method="post">
                <input type="text" name = "Usern" placeholder = "Username" required class = "form-control">
                <input type="password" name = "Password" placeholder = "Password" required class = "form-control">
                <a href="admin.php">Not a Staff? Click here for Admin login</a>
                <button  class="btn" name="Login">Login</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
