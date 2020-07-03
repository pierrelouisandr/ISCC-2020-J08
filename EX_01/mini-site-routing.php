<DOCTYPE !>
<html>
<head>
<title>mini-site-routing</title>
<meta charset="utf-8">
<meta name="viexport" content = "width-device-width, initial-scale-1.0">
</head>
<body>
<header>
<nav>
<ul>
<li><a href="mini-site-routing.php?page=1">Accueil</a></li>
<li><a href="mini-site-routing.php?page=2">Page 2</a></li>
<li><a href="mini-site-routing.php?page=3">Page 3</a></li>
</ul>
</nav>
<?php
if ($_GET ['page'] == 1)
echo "<p> Accueil </p>" ; 
if ($_GET ['page'] == 2)
echo "<p> Page 2 </p>" ;
if ($_GET ['page'] == 3)
echo "<p> Page 3 </p>"; 
?>
</body>
</html>