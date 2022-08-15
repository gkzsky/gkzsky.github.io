<!DOCTYPE html>
<html>
<body>

<?php 
$myLinks = array("https://gkzsky.github.io/wallpapers/01.png", 
    "https://gkzsky.github.io/wallpapers/02.png",
    "https://gkzsky.github.io/wallpapers/03.jpg",
    "https://gkzsky.github.io/wallpapers/04.jpg",
    "https://gkzsky.github.io/wallpapers/05.jpg",
    "https://gkzsky.github.io/wallpapers/06.jpg",
    "https://gkzsky.github.io/wallpapers/07.png",
    "https://gkzsky.github.io/wallpapers/08.png",
    "https://gkzsky.github.io/wallpapers/09.png",
    "https://gkzsky.github.io/wallpapers/10.png",
    "https://gkzsky.github.io/wallpapers/11.jpg",
    "https://gkzsky.github.io/wallpapers/12.png",
    "https://gkzsky.github.io/wallpapers/13.jpg",
    "https://gkzsky.github.io/wallpapers/14.jpg",
    "https://gkzsky.github.io/wallpapers/15.jpg",
	"https://gkzsky.github.io/wallpapers/16.jpg");

$randomRedirection = $myLinks[array_rand($myLinks)];
header("Location: $randomRedirection");
?>

</body>
</html>
