<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Add your CSS links  -->
</head>
<body>
    <h1>Register</h1>
    <form action="/register" method="POST">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
        
        <!-- Name Field -->
        <div>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required>
        </div>

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

        <!-- Password Confirmation Field -->
        <div>
            <label for="password_confirmation">Confirm Password:</label><br>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button type="submit">Register</button>
    </form>
</body>
</html>
