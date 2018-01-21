@extends('layouts.master')
@extends('layouts.app')
@section('home1')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body background="gambar/a.jpg"></body>
<center><h1><font color="white">Selamat Datang di Web Widiaf</font></h1></center>
<center>

<?php
$image=glob("gambar/widi.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
<?php
}
	?>
	</center>


</body>
</html>
@endsection