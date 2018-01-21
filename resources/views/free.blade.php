@extends('layouts.master6')
@extends('layouts.app')
@section('cerita')
<!DOCTYPE html>
<html>
<head>
	<title>STORY</title>
</head>
<body>
<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Friends. <span class="text-muted">CEES.</span></h2>
          <p class="lead">Satu teman setia lebih berharga dari pada seribu teman palsu</p>
        </div>
        <div class="col-md-5">
          <?php
$image=glob("gambar/cees.jpg");
for($i=0;$i<count($image);$i++)	
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Fake Friends. <span class="text-muted">EBEL JEPRUT.</span></h2>
          <p class="lead">Kembangkan solidaritas karna itu kunci utama pertemanan agar tetap utuh.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
           <?php
$gg=glob("gambar/e.jpg");
for($i=0;$i<count($gg);$i++)	
{
	$double = $gg[$i];
?>
	<img src="<?php echo $double;?>" width="360" heigth="260"/?>
	<?php
}
	?>        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">My History. <span class="text-muted">ROMED.</span></h2>
          <p class="lead">Dalam sebuah pertemuan pasti ada perpisahan dan tidak ada kata bahagia dalam perpisahan
        </div>
        <div class="col-md-5">
            <?php
$ww=glob("gambar/a.jpg");
for($i=0;$i<count($ww);$i++)	
{
	$ampun = $ww[$i];
?>
	<img src="<?php echo $ampun;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

</body>
</html>
@endsection