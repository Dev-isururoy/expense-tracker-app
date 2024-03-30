<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add your CSS links  -->
</head>
<body>
    <h1>Login</h1>
    <form action="/login" method="POST">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
        
        <!-- Email Field -->
        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- Password Field -->
        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>
