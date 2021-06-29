<style>
    h2{
        text-align:center;
        font-family:"Brush Script MT","Lucida Handwriting", Cursive;
    }
    body{
        background-color:lightpink;
    }
    </style>
<?php
$user = "Aashritha";
?>
<!DOCTYPE html>
<html>
<head> <title> program 6 </title></head>
<body>
<h2>Hey <?php echo $user;?>, Welcome to this page! </h2>
<h3>This page displays the number of page visits</h3>
<?php
print "<h3> REFRESH PAGE </h3>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
echo "<b> Total number of views: </b>".$hits[0];
?>
</body>
</html>
