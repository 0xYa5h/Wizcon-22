<?php

$string= "This is the last stage. Solve it and get the flag. ezpz.";
echo '<span style="font-size: 30px;"> ' . $string;
echo "<br>";
echo "<br>";
echo ' 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<img src="./images/code2.png" width="800" height="400" title="Logo of a company" alt="Logo of a company" />

</html>
';

if(isset($_GET['secondanswer']))
{
    if(hash("md5", $_GET['secondanswer']) == "0"){
        header("Location: /bsuerfqfuse.php", true, 301);
        exit();
    }
}

?>