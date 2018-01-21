@extends('layouts.master2')
@extends('layouts.app')
@section('gallery')
<!DOCTYPE html>
<html>
<head>
	<title>HISTORY</title>
</head>

<body background="gambar/lamp.jpg"></body>
<center><h2>HISTORY</h2>
<?php
$image=glob("gambar/1.jpg");
$gg=glob("gambar/2.jpg");
$ww=glob("gambar/3.jpg");
$aa=glob("gambar/4.jpg");
$zz=glob("gambar/5.jpg");
$app=glob("gambar/6.jpg");
$bb=glob("gambar/7.jpg");
$cc=glob("gambar/a.jpg");

for($i=0;$i<count($image);$i++)
for($i=0;$i<count($gg);$i++)
for($i=0;$i<count($zz);$i++)	
for($i=0;$i<count($app);$i++)	
for($i=0;$i<count($bb);$i++)
for($i=0;$i<count($cc);$i++)
{
	$single_image = $image[$i];
	$double = $gg[$i];
	$three = $ww[$i];
	$four = $aa[$i];
	$five = $zz[$i];
	$six = $app[$i];
	$seven = $bb[$i];
	$eight = $cc[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<img src="<?php echo $double;?>" width="360" heigth="260"/?>
	<img src="<?php echo $three;?>" width="360" heigth="260"/?>
	<img src="<?php echo $four;?>" width="360" heigth="260"/?>
	<img src="<?php echo $five;?>" width="360" heigth="260"/?>
	<img src="<?php echo $six;?>" width="360" heigth="260"/?>
	<img src="<?php echo $seven;?>" width="360" heigth="260"/?>
	<img src="<?php echo $eight;?>" width="360" heigth="260"/?>
	<?php
}
	?>
</center>
</html>
@endsection