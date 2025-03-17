<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }

        .login-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 320px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background: #6a11cb;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: #2575fc;
        }

        .register-link {
            margin-top: 10px;
            font-size: 14px;
        }

        .register-link a {
            text-decoration: none;
            color: #2575fc;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
        @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Masuk</button>
        </form>
        <p class="register-link"><a href="#">Lupa password?</a></p>
    </div>
</body>

</html>