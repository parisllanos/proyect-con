<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ticket</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="http://bootswatch.com/flatly/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <style>
  body {
    background-color: #f2f2f2;
    font-family: 'Lato', sans-serif;
    font-weight: 300 !important;
    font-size: 16px;
    color: #555;
    -webkit-font-smoothing: antialiased;
    -webkit-overflow-scrolling: touch;
	}
  </style>
 <style>
body
{
	background:url('/images/<?php echo $data_artist["background"];?>');
	background-color: rgba(100, 100, 100, 0.5);

}
</style>
</head>
<body>
<div class="container_wrapper">
	<div class="container">
		<!--form-->
		<div style="background-color:white;max-width:500px;min-width:280px;margin:5% auto 0 auto;border-radius:5px;">
			<p  class="alert alert-success" style="margin:0px 0px 20px 0px;padding:20px 30px;border-bottom:1px solid #ccc;text-align:center;font-weight:bold;font-size:18px">Comparte un tweet</p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:16px;color:#333;text-align:center"><strong>Paso 2</strong></p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:14px;color:#333;text-align:center">Debes apretar el boton "tweet" de abajo, el cual realizara automaticamente un tweet con el el siguiente contenido: <br>
			<strong>"Estoy concursando para <?php echo $data_artist['participa'];?> <br> Y tu, que esperas?"</strong></p>
			<div style="text-align:center;border-top:1px solid #ccc;padding:20px 0;margin:20px 0 0 0">
				<form method="post" action="#">
					<input type="hidden" name="tk" value="<?php echo $tk;?>">
					<button class="btn btn-success"><i class="fa fa-twitter"></i> Tweet</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50598071-1', 'concursa.herokuapp.com');
  ga('send', 'pageview');

</script>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
