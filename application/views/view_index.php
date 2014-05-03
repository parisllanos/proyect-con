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
	background:url('<?php echo base_url();?>images/pattern-1.png');
	/*background-color:#56bc94;*/
	background-color:#222;
}
.event-data
{
	transition:all .7s ease;
	-moz-transition:all .7s ease;
	-webkit-transition:all .7s ease;
}
@media(max-width:767px){
	.event,.event-data
	{
		width:270px;
	}

}
@media(min-width:768px){
	.event,.event-data
	{
		width:270px;
	}

}
@media(min-width:992px){
	.event,.event-data
	{
		width:270px;
	}

}
@media(min-width:1200px){
	.event,.event-data
	{
		width:270px;
	}
}
</style>
</head>
<body>
<div class="container_wrapper">
	<!-- image -->
	<div class="gradient" style="background-color:red;height:600px;width:100%;background-color:;background:url('/images/imagen1.png') 100% 100%">
		<p style="text-shadow:1px 1px 2px #6B8E91;background-color:;margin:0px;height:500px;width:100%px;font-size:50px;color:white;text-align:center;padding-top:300px;"><strong>Cumple tu sueño</strong><br>Asiste al concierto de tu artista favorito</p>
	</div>
	<!--p welcome-->
	<p style="margin:0px;width:100%;background-color:;color:#fff;padding:50px 30px;text-align:center;font-size:23px;">Concursa con tu cuenta de facebook o twitter <br> Con solo un click tendras la oportunidad de estár cerca de tu idolo soñado.</p>
	<!--events-->
	<div class="container" style="background-color:">
			<div class="row">

				<?php for($i=0;$i<4;$i++){ ?>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="background-color:;padding:0px;margin:10px 0px">
					<div class="event" data-num="<?php echo $i;?>" style="background-color:green;height:150px;overflow:hidden;margin:10px auto;position:relative;border-radius:3px;">
						
						<div id="event-data-<?php echo $i;?>" style="margin-top:100px;height:150px;position:absolute;" class="event-data">
							<div style="padding:5px 10px;background:rgba(255, 255, 255, 0.95);height:50px;">
							<p style="float:left;font-size:13px;color:#333;margin:0;padding:0"><strong>One Direction</strong></p>
							<p style="float:right;font-size:13px;margin:0;padding:0;color:#18bc9c;"><strong>Chile</strong></p>
							<div style="clear:both"></div>
							<p style="float:left;font-size:13px;color:#888;margin:0;padding:0"><strong>Participantes</strong></p>
							<p style="float:right;font-size:14px;margin:0;padding:0;color:#18bc9c;"><strong>1022</strong></p>
							<div style="clear:both"></div>
							</div>
							<div style="height:100px;text-align:center;border-top:1px solid #ccc;background: rgba(255, 255, 255, 0.9);">
								<p style="font-weight:bold;font-size:13px;margin:5px 0 0 0;padding:0">Entradas disponibles: 15</p>
								<a href="/introduction/one-direction/chile">
								<button class="btn btn-success" style="margin:10px 0 0 0;">Participar</button>
								</a>
							</div>
						</div>
						<img src="<?php echo base_url()?>images/one_event.png" class="img-responsive" style="margin:0px;padding:0px;">
					</div>
				</div>
				<?php } ?>
			</div>
	</div>
	<p style="color:white;margin:0px;width:100%;background-color:;padding:50px 30px;text-align:center;font-size:23px;">
		Buscanos en Twitter <br> <i class="fa fa-twitter"></i> <a href="" style="color:white;"><strong>@Tickett</strong></a>
	</p>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
<script>
$( document ).ready(function() {
    $('.event').mouseenter(enter_event).mouseleave(leave_event)
});
function enter_event()
{
	var num=$(this).attr('data-num');
	$('#event-data-'+num).css('margin-top','0px');

}
function leave_event()
{
	var num=$(this).attr('data-num');
	$('#event-data-'+num).css('margin-top','100px');

}
</script>
</body>
</html>
