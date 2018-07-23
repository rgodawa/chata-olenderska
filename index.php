<!DOCTYPE html>
<html lang=pl-PL>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<head>
<title>Chata Olenderska – odpocznij w XVIII-wiecznych wnętrzach</title>
<meta property=og:url content='http://chata-olenderska.pl/'/>
<meta property=og:type content='website'/>
<meta property=og:title content='Chata Olenderska – odpocznij w XVIII-wiecznych wnętrzach'/>
<meta property=og:description content='"Chata Olenderska" to pięknie położone, zaciszne gospodarstwo agroturystyczne, którego początki sięgają II połowy XVIII wieku.'/>
<meta property=og:image content='http://chata-olenderska.pl/img/cottage/13.jpg'/>
<meta name=description content='I miejsce w Konkursie na najlepszy obiekt turystyki na obszarach wiejskich w Wielkopolsce w 2013 roku'/>
<?php include 'include/head.html'; ?>
</head>
<body>
<div id=wrapper>
<header id=header><?php include 'include/menu.html'; ?></header>
<section id=content>
<section class=callaction>
<div class=container>
<div class=row>
</div>
</div>
</section>
<section id=featured>
<div class=container>
<div class=row>
<div class=col-md-1></div>
<div class=col-md-10>
<?php include 'include/slider.html'; ?>
</div>
</div>
</div>
</section>
<div class=container>
<div class=row>
<div class=col-lg-12>
<div class=solidline></div>
</div>
</div>
<div class=row style=margin-bottom:5px>
<div class=col-lg-12>
<div class=row>
<section id=projects>
<?php include 'include/works.html'; ?>
</section>
</div>
</div>
</div>
<div class=row>
<div class=col-lg-12>
<div class=solidline></div>
</div>
</div>
</div>
<div class=container>
<div class=row>
<div class=col-md-4>
<?php include 'include/index-boxes/about-place.html'; ?>
</div>
<div class=col-md-4>
<?php include 'include/index-boxes/interesting-places.html'; ?>
</div>
<div class=col-md-4>
<?php include 'include/index-boxes/cycling-routes.html'; ?>
</div>
</div>
</div>
<div class=container>
<div class=row>
<div class=col-md-8></div>
<div class=col-md-4>
<div class=fb-share-button style=float:right data-href=https://chata-olenderska.pl/ data-layout=button></div>
</div>
</div>
</div>
</section>
<footer id=footer><?php include 'include/footer.html'; ?></footer>
</div>
<a href=# class=scrollup style=display:none><i class='fa fa-angle-up active'></i></a>
<script src=js/minified.js.index.php></script>
<?php include 'include/facebook.html'; ?>
<script>jQuery(document).ready(function(a){a(window).scroll(function(){if(a(this).scrollTop()>100){a(".scrollup").fadeIn()}else{a(".scrollup").fadeOut()}});a(".scrollup").click(function(){a("html, body").animate({scrollTop:0},1000);return false})});</script>
</body>
</html>