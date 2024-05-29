<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <header>
        <!-- Button to trigger the sliding menu -->
        <button id="menuBtn">Menu</button>
		<h1>Rezuan's Webpage</h1>
    </header>
    <!-- Sliding menu -->
    <div class="menu" id="menu">
        <!-- Exit button -->
        <button class="exit-btn" id="exitBtn">Close</button>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Photo_Gallery.php">Photo Gallery</a></li>
            <li><a href="myself.php">About myself</a></li>
            <li><a href="Education.php">Education</a></li>
            <li><a href="Passion.php">Passion</a></li>
            <li><a href="Comment.php">Comment</a></li>
        </ul>
    </div>
    <main>
		<br><br>
        <img src="image/profile.jpg" alt="Profile picture" height="200" width="200">
        <h1>Welcome to My World</h1>
        <p>This is my first web page</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna vel congue egestas, dui velit auctor nisl, vel aliquet nisl nunc vel nisi. Sed bibendum, metus eget pharetra rhoncus, mi lacus venenatis nisl, vel aliquet nisl nunc vel nisi.</p>
    </main>
    <footer>
        <p>Copyright © 2024 Rezuan Nurhakim bin Bakhtiar</p>
    </footer>
    <script src="Script/myScript.js"></script>
</body>
</html>
