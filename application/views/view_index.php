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
	/*background-color:#56bc94;*/
	/*background-color:#222;*/
}
.container-background
{
	background:url('/images/pattern-1.png') #18bc9c;
	/*background-color:#18bc9c;*/
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
	#p2
	{
		font-size: 25px;
	}
	#p3
	{
		font-size: 25px;
	}
	#p4
	{
		font-size: 20px;
	}

}
@media(min-width:768px){
	.event,.event-data
	{
		width:270px;
	}
	#p2
	{
		font-size: 30px;
	}
	#p3
	{
		font-size: 30px;
	}
	#p4
	{
		font-size: 20px;
	}

}
@media(min-width:992px){
	.event,.event-data
	{
		width:270px;
	}
	#p2
	{
		font-size: 30px;
	}
	#p3
	{
		font-size: 30px;
	}
	#p4
	{
		font-size: 20px;
	}

}
@media(min-width:1200px){
	.event,.event-data
	{
		width:270px;
	}
	#p2
	{
		font-size: 30px;
	}
	#p3
	{
		font-size: 30px;
	}
	#p4
	{
		font-size: 20px;
	}
	#p5
	{
		font-size: 20px;
	}
}
</style>
</head>
<body>
<div class="container-wrapper">
	<!--container background-->
	<div class="container-background">
		<!--margin-top-->
		<div style="height:50px"></div>
		<!--container soon apps-->
		<div class="hidden-sm hidden-xs" style="background:url('<?php echo base_url();?>/images/apps.png');width:200px;height:100px;float:right;margin:5px 180px 0 0;">
		</div>
		<!--logo-->
		<div style="height:100px;width:170px;background-color:;margin:0px auto 0px auto;background:url('<?php echo base_url();?>images/ticket_trans170x100.png');">
		</div>
		<p id="p1" style="padding:10px 7px 0px 7px;line-height: 47px;text-shadow:1px 1px 2px #6B8E91;background-color:;margin:0px;width:100%px;font-size:50px;color:white;text-align:center;"><strong>Concursa y Gana!</strong></p>
		<p id="p2" style="padding:15px 10px 0px 10px;line-height: 35px;text-shadow:1px 1px 2px #6B8E91;background-color:;margin:0px;width:100%px;color:white;text-align:center;">Asiste al concierto de tu artista favorito, obtén un iphone, una xbox 360<br> o incluso la moto que siempre has soñado!</p>
		<p id="p3" style="padding:5px 10px 0px 10px;line-height: 25px;text-shadow:1px 1px 2px #6B8E91;background-color:;margin:0px;width:100%px;color:white;text-align:center;">No te quedes fuera!</p>
		<p id="p4" style="padding:30px 10px 0px 10px;line-height: 25px;text-shadow:1px 1px 2px #6B8E91;background-color:;margin:0px;width:100%px;color:white;text-align:center;"><strong>¿Qué debo hacer para participar?</strong></p>
		<p id="p5" style="padding:5px 10px 0px 10px;line-height: 25px;text-shadow:1px 1px 2px #6B8E91;background-color:;margin:0px;width:100%px;color:white;text-align:center;"><strong>Solo debes tener una cuenta de twitter o facebook y seguir unos sencillos pasos!</strong></p>
		<!-- <div style="background-color:;width:30px;height:30px;margin:20px auto 0px auto"> -->
			<!-- <i style="color:white;"class="fa fa-chevron-down fa-2x"></i> -->
		<!-- </div> -->
		<!--info-->
		<?php 
			$events = array(); 
			$events[0]['name']='Iphone 5s doraro';
			$events[0]['pais']='Chile';
			$events[0]['participantes']='800';
			$events[0]['foto_event']='iphone_event.png';
			$events[0]['url']='iphone-5s-dorado/chile';
			$events[0]['termino']='20 de mayo';
			$events[0]['soon']=false;
			// onedirectionchile
			$events[1]['name']='Demi Lovato';
			$events[1]['pais']='Mexico';
			$events[1]['participantes']='750';
			$events[1]['entradas']='11';
			$events[1]['foto_event']='demi_event.png';
			$events[1]['url']='demi-lovato/mexico';
			$events[1]['termino']='15 de mayo';
			$events[1]['soon']=false;
			// onedirectionchile
			$events[2]['name']='Avril Lavigne';
			$events[2]['pais']='Mexico';
			$events[2]['participantes']='400';
			$events[2]['entradas']='10';
			$events[2]['foto_event']='avril_event.png';
			$events[2]['url']='avril-lavigne/mexico';
			$events[2]['termino']='13 de mayo';
			$events[2]['soon']=false;
			//iphone
			$events[3]['name']='Iphone 5s doraro';
			$events[3]['pais']='Mexico';
			$events[3]['participantes']='0';
			$events[3]['foto_event']='iphone_event.png';
			$events[3]['url']='iphone-5s-dorado/mexico';
			$events[3]['termino']='Pronto';
			$events[3]['soon']=true;
			//
			$events[4]['name']='Xbox 360';
			$events[4]['pais']='Chile';
			$events[4]['participantes']='400';
			$events[4]['foto_event']='xbox_event.png';
			$events[4]['url']='xbox-360/chile';
			$events[4]['termino']='30 mayo';
			$events[4]['soon']=false;
			//
			$events[5]['name']='Plasma HD';
			$events[5]['pais']='Chile';
			$events[5]['participantes']='130';
			$events[5]['foto_event']='tele_event.png';
			$events[5]['url']='plasma-hd/chile';
			$events[5]['termino']='30 mayo';
			$events[5]['soon']=false;
			//
			$events[6]['name']='Notebook Samsung 14';
			$events[6]['pais']='Chile';
			$events[6]['participantes']='318';
			$events[6]['foto_event']='note_event.png';
			$events[6]['url']='notebook/chile';
			$events[6]['termino']='28 mayo';
			$events[6]['soon']=false;
			//
			$events[7]['name']='Audífonos Beats';
			$events[7]['pais']='Chile';
			$events[7]['participantes']='765';
			$events[7]['foto_event']='beets_event.png';
			$events[7]['url']='beats/chile';
			$events[7]['termino']='29 mayo';
			$events[7]['soon']=false;

		?>
		<!---->
		<!--events-->
		<div class="container" style="margin-top:30px;">
				<div class="row">
					<?php for($i=0;$i<count($events);$i++){ ?>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="background-color:;padding:0px;margin:10px 0px">
						<div class="event" data-num="<?php echo $i;?>" style="background-color:#888;height:150px;overflow:hidden;margin:10px auto;position:relative;border-radius:3px;">
							
							<div id="event-data-<?php echo $i;?>" style="margin-top:100px;height:150px;position:absolute;" class="event-data">
								<div style="padding:5px 10px;background:rgba(255, 255, 255, 0.95);height:50px;">
								<p style="float:left;font-size:13px;color:#333;margin:0;padding:0"><strong><?php echo $events[$i]['name'];?></strong></p>
								<p style="float:right;font-size:13px;margin:0;padding:0;color:#18bc9c;"><strong><?php echo $events[$i]['pais'];?></strong></p>
								<div style="clear:both"></div>
								<p style="float:left;font-size:13px;color:#888;margin:0;padding:0"><strong>Participantes</strong></p>
								<p style="float:right;font-size:14px;margin:0;padding:0;color:#18bc9c;"><strong><?php echo $events[$i]['participantes'];?></strong></p>
								<div style="clear:both"></div>
								</div>
								<div style="height:100px;text-align:center;border-top:1px solid #ccc;background: rgba(255, 255, 255, 0.9);">
									<p style="font-weight:bold;font-size:13px;margin:5px 0 0 0;padding:0">Fecha de termino: <?php echo $events[$i]['termino'];?></p>
									<?php if($events[$i]['soon']===FALSE){ ?>
										<a href="/introduction/<?php echo $events[$i]['url'];?>">
										<button class="btn btn-success" style="margin:10px 0 0 0;">Participar</button>
										</a>
									<?php }else{ ?>
										<a href="/introduction/<?php echo $events[$i]['url'];?>">
										<button class="btn btn-success disabled" style="margin:10px 0 0 0;">Pronto</button>
										</a>
									<?php } ?>
								</div>
							</div>
							<img src="<?php echo base_url()?>images/<?php echo $events[$i]['foto_event'];?>" class="img-responsive" style="margin:0px;padding:0px;">
						</div>
					</div>
					<?php } ?>
				</div>
		</div>
		<p style="color:white;margin:0px;width:100%;background-color:;padding:20px 30px;text-align:center;font-size:23px;">
		Buscanos en Twitter <br> <i class="fa fa-twitter"></i> <a href="https://twitter.com/concursala" style="color:white;"><strong>@Concursala</strong></a>
		</p>
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
