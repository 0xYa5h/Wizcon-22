<?php

$string= "I hope you can read this simple PHP code ;-)";
echo '<span style="font-size: 30px;"> ' . $string;
echo "<br>";
echo "<br>";
echo "<br>";
$string= "Try to reach the ";
echo '<span style="font-size: 20px;"> ' . $string;
echo "<i>super_secret_function()</i>";
echo "<br>";
echo "<br>";
echo ' 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<img src="./images/code1.png" width="800" height="400" title="Logo of a company" alt="Logo of a company" />

</html>
';

if(isset($_GET['firstanswer']))
{
    $slide = $_GET['firstanswer'];
    $is = "phpcanbetrickysometimes";
    $final_string = preg_replace("/$is/", '', $slide);
    if($final_string === $is){
        header("Location: /bsdfbysvfgys.php", true, 301);
        exit();
    }
}

?>