<?php

$string= "manager: i hope the flag is kept safely.";
echo '<span style="font-size: 20px;"> ' . $string;
echo "<br>";
$string= "kiran: yes, the flag has been submitted to karan and he has stored it safely.";
echo '<span style="font-size: 20px;"> ' . $string;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$string= "do you know karan's user ID?";
echo '<span style="font-size: 10px;"> ' . $string;

if(isset($_GET['id']))
{
    $slide = $_GET['id'];
    if($slide === "-1"){
        header("Location: /swiaofhsdgfiubi.php", true, 301);
        exit();
    }
    elseif($slide === "0"){
        header("Location: /sdfghjyugsdyeri.php", true, 301);
        exit();
    }
    elseif($slide === "1"){
        header("Location: /stweriudfgiusdf.php", true, 301);
        exit();
    }

    else{
        header("Location: /404.php", true, 301);
        exit();
    }

}
?>