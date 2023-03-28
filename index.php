<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF PARSER</title>
  <style>
    .Div{
      border: 5px outset lightgray;
      text-align:center;
    }
    </style>

	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="C:\xampp\htdocs\internship\index.php">Home</a></li>
				<li><a href="https://www.adobe.com/in/acrobat/online/convert-pdf.html">Convert to pdf</a></li>
				<li><a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=pdf_parser">Database</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</nav>
	</header>

	<main>
    <h1>PDF Parser</h1>
<div class="Div">
<form action="parser.php" method="post" enctype="multipart/form-data">
    <label for="file">Select a PDF file:</label><br>
    <input type="file" name="file" id="file" accept=".pdf"><br><br><br>
    <input type="submit" value="Parse">
</form>

    </div>


		<div class="Div">
      <h2>Export Numbers</h2><br>
		<a href="Nexport.php"><button type="button" class="btn btn-primary">Export Numbers</button></a>
	 	</div>



				<div class="Div">
         <h2>Export Emails</h2><br>
				<a href="Eexport.php"><button type="button" class="btn btn-primary">Export Emails</button></a>
				    </div>


	</main>

	<footer>
		<p>&copy; 2023 PDF PARSER Website. All rights reserved.</p>
	</footer>
</body>
</html>
