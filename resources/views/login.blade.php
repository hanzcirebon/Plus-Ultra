<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <div class="login-container">
        <div class="form-container">
            <img src="{{ asset('img/Logo.jpeg') }}" class="login-image">
            <h2>Login</h2>
            @if ($errors->has('wrong_password'))
            <div class="alert alert-danger">{{ $errors->first('wrong_password') }}</div>
            @endif
            <form id="loginForm" action="{{ route('login-auth') }}">
                @csrf
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">LOGIN</button>
            </form>
        </div>
    </div>
    <style>
        /* Styles moved into the head for convenience */
        body {
            font-family: 'Arial', sans-serif;
            background: rgb(255,255,255);
            background: radial-gradient(circle, rgba(255,255,255,1) 31%, rgba(173,168,214,0.860364214044993) 100%); 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            width: 300px;
            height: 400px;
            max-width: 300px;
            max-height: 400px;
            margin: auto;
            background-color: #fbfdfc;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }
        .form-container {
            text-align: center;
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 20px;
            background-color: #7c6fe2;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #6451f0;
        }
        .signup-text {
            margin-top: 20px;
            color: #555;
            cursor: pointer;
        }
        .signup-text:hover {
            text-decoration: underline;
        }

        button:active {
            box-shadow: 0 0 0 2px #4f3aee;
        }
        .alert {
            width: 100%;
            box-sizing: border-box; 
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 5px;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        
        .login-image {
            max-width: 100%;
            height: auto; 
            width: 150px; 
            display: block; 
            margin: 0 auto 20px;
        }

    </style>
</body>
</html>
