<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Page title -->
    <title>{{ $title }}</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icons -->
    <link rel="shortcut icon" href="minimall/img/favicon.png">
    <link rel="apple-touch-icon" href="minimall/img/apple-touch-icon-32x32.png">
    <link rel="apple-touch-icon" sizes="72x72" href="minimall/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="minimall/img/apple-touch-icon-114x114.png">

    <!-- Styles -->
    <link rel="stylesheet" href="minimall/css/theme.css">

</head>
<body data-spy="scroll" data-target=".navbar">


<!-- PRELOADER -->
<div id="preloader">
    <div class="loader">Loading...</div>
</div>
<!-- PRELOADER -->


<!-- HEADER -->
<header id="home" data-stellar-background-ratio="0.5">

    <div class="header-text">

        <h1>{{ $title }}</h1>

        <!-- Navigation -->
        <nav id="navigation" class="navbar">
            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#navbar"
                    aria-expanded="false"
                    aria-controls="navbar">

                <i class="fa fa-2x fa-list"></i>
            </button>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="underline" href="/">Home</a></li>
                    <li><a class="underline" href="/about">About</a></li>
                    <li><a class="underline" href="/#services">Services</a></li>
                    <li><a class="underline" href="/#org">Organization</a></li>
                </ul>
            </div>
        </nav><!-- /Navigation -->

    </div>

</header>
<!-- END OF HEADER -->


@yield('content')


<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- Social icons -->
            <div class="col-md-6">
                <div class="footer-social">
                    <a href="#" class="btn-colored fa fa-facebook"></a>
                    <a href="#" class="btn-colored fa fa-google-plus"></a>
                    <a href="#" class="btn-colored fa fa-twitter"></a>
                </div>
            </div><!-- /Social icons -->

            <!-- Footer links and copyright -->
            <div class="col-md-6 footer-terms">
                <div>
                    Copyright &copy; 2018 PUCOI <br />
                    Member, International Halal Integrity Alliance (IHIA)<br>
                    SEC. REG. NO. CN200520263<br>
                    Bank Account: 3883-0661-88 Bank of the Philippine Islands, N. Domingo St.,
                    San Juan City, Metro Manila
                </div>
            </div><!-- /Footer links and copyright -->

        </div>
    </div>
</footer>
<!-- END OF FOOTER -->

<!-- SCRIPTS -->
<script src="minimall/js/jquery-2.2.0.min.js"></script>
<script src="minimall/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
    <script src="minimall/js/html5shiv.min.js"></script>
    <script src="minimall/js/respond.min.js"></script>
<![endif]-->
<script src="minimall/js/jquery.stellar.min.js"></script>
<script src="minimall/js/isotope.pkgd.min.js"></script>
<script src="minimall/js/jquery.magnific-popup.min.js"></script>
<script src="minimall/js/owl.carousel.min.js"></script>
<script src="minimall/js/jquery.validate.min.js"></script>
<script src="minimall/js/general.js"></script>
<!-- END OF SCRIPTS -->


</body>
</html>