@extends('layouts.master3')
@extends('layouts.app')
@section('datatabel')
<!DOCTYPE html>
<html>
<head>
<body background="gambar/kuning.png"></body>

	<title></title>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">


      <div class="page-header">
        <center><h1>Biodata</h1></center>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
<tr>
              <tr>
              <center>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tanggal lahir</th>
                <th>cita-cita</th>
                <th>Photo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1607</td>
                <td>Iqbal Aqis Aprilio</td>
                <td>2012-04-19</td>
                <td>Polisi</td>
                <td><?php
$image=glob("gambar/iqbal.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</td>
              </tr>
              <tr>
                <td>2402</td>
                <td>widi Ayu Feby Anggraini Affandi</td>
                <td>2002-02-24</td>
                <td>Pramugari</td>
                <td><?php
$image=glob("gambar/a.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>

   <tr>
                <td>2110</td>
                <td>Muhammad fiqih Hidayatuloh Affandi</td>
                <td>2000-10-21</td>
                <td>Tentara</td>
                <td><?php
$image=glob("gambar/fiqih.jpg");
for($i=0;$i<count($image);$i++)
{
  $single_image = $image[$i];
?>
  <img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
  ?>
	</center>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      </div>
</div>
</div>
</body>
</html>
@endsection