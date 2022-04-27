<html> 
<title>haCk mE iF yOu Can</title>
<body>
<!-- redirect, url, flag, link, return_url, file, go, page. -->
<?php
$string= "This page has nothing to do -_-. Take me to some other page.";
echo '<span style="font-size: 50px;"> ' . $string;
echo "<br>";
echo "<br>";
$string="But before that answer this:";
echo '<span style="font-size: 50px;"> ' . $string;
echo "<br>"; 
$string="I am a special kind of variable used in a function to refer to one of the pieces of data provided as input to the function.";
echo '<span style="font-size: 50px;"> ' . $string;
echo "<br>";
// url, flag.php, link, flag, return_url, file, redirect, go, page.
if(isset($_GET['redirect']))
{
    $slide = $_GET['redirect'];
    if($slide === "flag"){
        header("Location: /qwertyusdfghj.php", true, 301);
        exit();
    }
}
?>

</body>
</html>