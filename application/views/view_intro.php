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
			<p  class="alert alert-success" style="margin:0px 0px 20px 0px;padding:20px 30px;border-bottom:1px solid #ccc;text-align:center;font-weight:bold;font-size:18px">Participa por una de las <?php echo $data_artist['entradas'];?> entradas <br>al concierto de <?php echo $data_artist['artista'];?></p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:14px;color:#333"><strong>Artista:</strong> <?php echo $data_artist['artista'];?></p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:14px;color:#333"><strong>País:</strong> <?php echo $data_artist['pais'];?></p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:14px;color:#333"><strong>Ciudad:</strong> <?php echo $data_artist['ciudad'];?></p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:14px;color:#333"><strong>Hora del evento:</strong> <?php echo $data_artist['hora'];?></p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:14px;color:#333"><strong>Dirección:</strong> <?php echo $data_artist['direccion'];?></p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:14px;color:#333"><strong>Entradas disponibles para participar:</strong> <?php echo $data_artist['entradas'];?> entradas</p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:14px;color:#333"><strong>Participantes:</strong> <?php echo $data_artist['participantes'];?></p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:14px;color:#333"><strong>¿Como participar?</strong><br>Participar es muy sencillo, solo debes tener una cuenta de twitter y seguir los siguientes 3 pasos! </p>
			<div style="text-align:center;border-top:1px solid #ccc;padding:20px 0;margin:20px 0 0 0">
			<a href="/login">
			<button class="btn btn-success">Deseo participar</button>
			</a>
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
