<!DOCTYPE html>
<html lang=pl-PL>
<?php header('Content-type: text/html; charset=utf-8'); ?>

<head>
    <title>Chata Olenderska - kontakt</title>
    <meta name=description content='Dojazd drogą ekspresową S5 | Powiat Gniezno | Gmina Łubowo | Przyborowo 2, 62-262 Fałkowo | Tel. +48 602 138 941' />
    <?php include 'include/head.html'; ?>
</head>

<body>
    <div id=wrapper>
        <header id=header>
            <?php include 'include/menu.html'; ?>
        </header>
        <section id=content class=margintop20>
            <div class=container>
                <div class=row>
                    <div class=col-md-4>
                        <?php include 'include/contact-boxes/email.html'; ?>
                    </div>
                    <div class=col-md-4>
                        <?php include 'include/contact-boxes/how-to-get.html'; ?>
                    </div>
                    <div class=col-md-4>
                        <?php include 'include/contact-boxes/google-map.html'; ?>
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
    <script src=js/validate.js></script>
</body>

</html>
