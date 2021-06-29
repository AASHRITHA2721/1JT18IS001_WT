<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1" />
<style>
p {
color: black;
font-size: 40px;
font-family: "Brush Script MT","Lucida Handwriting", Cursive;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
body {
background-color:royalblue;
}
</style>
<body>
    <p>
        <?php
 echo "The server time is ". date("h:i:s A") . "<br>" ;
 echo "Today is " . date("Y/m/d") ."<br>";
echo "Today is " . date("Y.m.d") ."<br>";
echo "Today is " . date("Y-m-d") ."<br>";
echo "Today is " . date("l");
?>
</p>


</body>
</head>
</html>