<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Online</title>
    <meta name="description" content="Flexbox page layout, MusicOnline">
    <meta name="keywords" content="Flexbox, Responsive, R&B, Rap, Afrobeats, Home, Buy, Sell, Vinyls, Account">
    <meta name="author" content="Timi Odedairo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- HTML for the frosted menu box -->
    <div class="box">
        <!-- This is the html for the yellow side of the frosted box -->
        <div class="yellow-box"></div>
        <img src="img/Electric guitar aesthetic.jpg" class="left-img-box">
        
        <h1 class="register-heading cinzel-decorative-bold">Register</h1>
        <!-- Link to Google for the fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
        
        <form action="registerProcess.php" method="POST">
            <!-- Username input -->
            <div class="username-input">
                <input type="text" id="username" name="username" placeholder=" " required>
                <label for="username" class="username-label">Username</label>
            </div>

            <!-- Password input -->
            <div class="password-input">
                <input type="password" id="password" name="password" placeholder=" " required>
                <label for="password" class="password-label">Password</label>
            </div>

            <!-- Email input -->
            <div class="email-input">
                <input type="email" id="email" name="email" placeholder=" " required>
                <label for="email" class="email-label">E-mail</label>
            </div>

            <!-- Log In link -->
            <div class="login-link">Already have an account? <a href="login.php">Log In!</a></div>

            <!-- Enter button -->
            <div class="enter-button">
                <button type="submit" class="enter-btn">Enter</button>
            </div>
        </form>
    </div>
</body>
</html>
