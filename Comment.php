<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comments</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
    <header>
        <button id="menuBtn">Menu</button>
		<h1>Rezuan Nurhakim bin Bakhtiar</h1>
    </header>
    <div class="menu" id="menu">
        <button class="exit-btn" id="exitBtn">Close</button>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Photo_Gallery.php">Photo Gallery</a></li>
            <li><a href="myself.php">About myself</a></li>
            <li><a href="Education.php">Education</a></li>
            <li><a href="Passion.php">Passion</a></li>
			<li><a href="bmicalc.php">BMI Calculator</a></li>
            <li><a href="Comment.php">Comment</a></li>
        </ul>
    </div>
	<script src="Script/myScript.js"></script>
    <main>
		<br>
		<h3>Comment form</h3>
		<form class="comment-form" action="Comment.php" method="POST">
			<input type="text" name="Name" value="Your name"><br><br>
			<input type="radio" name="gender" value="male">male<br>
			<input type="radio" name="gender" value="female">female<br><br>
			<input type="text" name="email" value="Your email"><br><br>
			<textarea name="Comment" rows="4" cols="50">Write your comments here</textarea><br>
			<input type="submit" value="Submit">
		</form>
	</main>
	<footer>
		<p>Copyright © 2024 Rezuan Nurhakim bin Bakhtiar</p>
    </footer>
</body>
</html>
