<?php
$pictures = array('./images/car1.png', './images/mehran car2.jpg', './images/car2.png',
'./images/car3.png', './images/vigo2.png',
'./images/xli.jpg', './images/mehran car.jpg', './images/xli.jpg', './images/car4.png', './images/mehran car1.jpg');
shuffle($pictures);
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Store</title>
</head>
<body>
<h1 class="text-center" style="text-align:center">Welcome to Gallery</h1>
<div align="center">
<table style="width: 100%; border: 0">
<tr>
<?php
for ($i = 0; $i < 5; $i++) {
echo "<td style='width: 33%; text-align: center'>
<img src='$pictures[$i]' style='width:100%;' ";
echo $pictures[$i];
echo "\"/></td>";
}
?>
</tr>
</table>
</div>
</body>
</html>