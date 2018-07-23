<?php $filter = isset($_GET['fltr']) ? $_GET['fltr'] : '3'; ?>
<!DOCTYPE html>
<html lang=pl-PL>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<head>
<title>Chata Olenderska - galeria</title>
<meta name=description content='Gospodarstwo przynależy do Poznańskiego Towarzystwa Agroturystyki'/>
<?php include 'include/head.html'; ?>
</head>
<body>
<div id=wrapper>
<header id=header><?php include 'include/menu.html'; ?></header>
<section id=content>
<div class=container>
<div class=row>
<div class=col-md-12>
<ul class='portfolio-categ filter'>
<li id=filter-0 class=cottage><a href=# title>Chata</a></li>
<li id=filter-1 class=summer-house><a href=# title>Chlewik</a></li>
<li id=filter-2 class=garden><a href=# title>Ogród</a></li>
<li id=filter-3 class=all><a href=#>Wszystkie zdjęcia</a></li>
</ul>
<div class=clearfix>
</div>
<div class=row>
<section id=projects>
<?php include 'include/gallery.html'; ?>
</section>
</div>
</div>
</div>
</div>
</section>
<footer id=footer><?php include 'include/footer.html'; ?></footer>
</div>
<a href=# class=scrollup style=display:none><i class='fa fa-angle-up active'></i></a>
<script src=js/jquery.fancybox.pack.js></script>
<script src=js/jquery.fancybox-media.js></script>
<script src=js/portfolio/jquery.quicksand.min.js></script>
<script src=js/portfolio/setting.js></script>
<script src=js/custom.3.js></script>
<script>$(document).ready(function(){var a="#filter-<?php echo $filter; ?>";$(a).trigger("click")});</script>
</body>
</html>