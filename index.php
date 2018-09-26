<?php require('index-logic.php'); ?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Tara Waddell - Project 1</title>
	<meta charset='utf-8'>
	
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans" rel="stylesheet">
	<link href='css/main.css' rel='stylesheet'>
	
</head>
<body>
    <div id="wrapper">
		<h1>Tara Waddell</h1>
        <img src="images/tara.jpg" alt="Tara Waddell"/>
        <p>Hi. I'm Tara. I recently earned a Master's Certificate in Front-End Web Development from Harvard Extension School, and I'm working toward a Master's in Digital Media Design. I am excited to learn server-side coding as well as version control and workflow processes. I live in the Great Plains, but I love traveling as much as possible.</p>
		<blockquote><p><?php echo quote(); ?></p></blockquote>
    </div>
</body>
</html>