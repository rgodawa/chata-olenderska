<!DOCTYPE html>
<html lang=pl-PL>
<?php header('Content-type: text/html; charset=utf-8'); ?>

<head>
    <title>Chata Olenderska - oferta</title>
    <meta name=description content='Rekomendacja Polskiej Federacji Turystyki Wiejskiej' />
    <?php include 'include/head.html'; ?>
</head>

<body>
    <div id=wrapper>
        <header id=header>
            <?php include 'include/menu.html'; ?>
        </header>
        <section class=margintop20 id=content>
            <div class=container>
                <div class=row>
                    <div class=col-md-1></div>
                    <div class=col-md-10>
                        <?php include 'include/offer-boxes/accommodation.html'; ?>
                    </div>
                </div>
                <div class=row>
                    <div class=col-md-1></div>
                    <div class=col-md-10>
                        <?php include 'include/offer-boxes/pricing.html'; ?>
                    </div>
                </div>
                <div class=row>
                    <div class=col-md-1></div>
                    <div class=col-md-10>
                        <?php include 'include/offer-boxes/alimentationt.html'; ?>
                    </div>
                </div>
                <div class=row>
                    <div class=col-md-1></div>
                    <div class=col-md-10>
                        <?php include 'include/offer-boxes/attractions.html'; ?>
                    </div>
                </div>
                <div class=row>
                    <div class=col-md-1></div>
                    <div class=col-md-10>
                        <?php include 'include/offer-boxes/regulations.html'; ?>
                    </div>
                </div>
            </div>
        </section>
        <footer id=footer>
            <?php include 'include/footer.html'; ?>
        </footer>
    </div>
    <a href=# class=scrollup><i class="fa fa-angle-up active"></i></a>
    <script src=js/jquery.fancybox.pack.js></script>
    <script src=js/jquery.fancybox-media.js></script>
    <script src=js/custom.3.js></script>
</body>

</html>
