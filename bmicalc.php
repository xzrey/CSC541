<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">

</head>
<body>
	<header>
        <button id="menuBtn">Menu</button>
		<h1>Passion</h1>
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
		<br><br>
        <form id="bmi-form">
            <label for="height">Height (cm):</label>
            <input type="number" id="height" name="height" required><br><br>
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" required><br><br>
            <button type="submit">Calculate BMI</button>
        </form>
        <div id="result"></div>
    </main>
    <script src="Script/bmiscript.js"></script>
</body>
</html>
