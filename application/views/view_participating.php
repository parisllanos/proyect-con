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
	background:url('/images/wal_one.png');
	background-color: rgba(100, 100, 100, 0.5);

}
</style>
</head>
<body>
<div class="container_wrapper">
	<div class="container">
		<!--form-->
		<div style="background-color:white;max-width:500px;min-width:280px;margin:5% auto 0 auto;border-radius:5px;">
			<p  class="alert alert-success" style="margin:0px 0px 20px 0px;padding:20px 30px;border-bottom:1px solid #ccc;text-align:center;font-weight:bold;font-size:18px">Ya estás participando</p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:16px;color:#333;text-align:center"><strong>¡Felicidades!</strong></p>
			<p style="margin:5px 0px;padding:0px 30px;font-size:14px;color:#333;text-align:center">Ya estás participando por una de las entradas a <?php echo $data_artist['artista'];?>!<br> Un día antes del evento, contactaremos a todos los ganadores a través de sus correos electronicos y telefonos correspondientes. <br> Te enviamos mucha suerte. <br> <strong>Muchas gracias por participar con nosotros.</strong></p>
			<div style="text-align:center;border-top:1px solid #ccc;padding:20px 0;margin:20px 0 0 0">
			<a href="/">
				<button class="btn btn-success"> Ver otros concursos</button>
			</a>	
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
