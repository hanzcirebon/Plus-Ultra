<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="{{ route('home') }}">
        <label for="global_password">Global Password:</label><br>
        <input type="password" id="global_password" name="global_password" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>