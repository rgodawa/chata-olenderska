<!DOCTYPE html>
<html lang='pl-PL'>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<head>
	<title>Chata Olenderska - kalendarz</title>
	<meta name='description' content='Oferujemy domowe, wiejskie jadło na bazie świeżych, lokalnych produktów. Na życzenie przygotujemy również posiłki wegetariańskie'/>
	<?php include 'include/head.html'; ?>
</head>
<body>
<div id='wrapper'>
	<header id='header'><?php include 'include/menu.html'; ?></header>
	<section id='content' class="margintop20">
	<div class='container'>
		<div class='row'>
			<div class="col-md-12">
			<div class='box'>
				<div class='box-bottom'>
					<h4>Kalendarz</h4>
				</div>
				<div class='box-gray aligncenter'>
					<div class='map'> 
						<iframe
						src='https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=mt9cbeh96diptr491vbh4od1ec%40group.calendar.google.com&amp;color=%235F6B02&amp;src=bodhd062jcanl48p184uuk2294%40group.calendar.google.com&amp;color=%23691426&amp;ctz=Europe%2FWarsaw'>
						</iframe>
					</div>
				</div>
			</div>
			</div>	
		</div>		
	</div>	
	</section>
	<footer id='footer'><?php include 'include/footer.html'; ?></footer>
</div>
<a href='#' class='scrollup' style='display:none;'><i class='fa fa-angle-up active'></i></a>
<script src='js/jquery.js'></script>
<script src='js/jquery.easing.1.3.js'></script>
<script src='js/bootstrap.min.js'></script>
<script src='js/jquery.fancybox.pack.js'></script>
<script src='js/jquery.fancybox-media.js'></script>
<script src='js/jquery.flexslider.min.js'></script>
</body>
</html>
