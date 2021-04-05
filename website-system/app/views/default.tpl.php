<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?=$config['description'];?>">
        <meta name="author" content="<?=$config['adm'];?>">

        <title><?=$config['title'];?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?=$config['url'];?>/resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?=$config['url'];?>/resources/css/scrolling-nav.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/site-teste"><?=$config['title'];?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?=$config['url'];?>/about">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?=$config['url'];?>/servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?=$config['url'];?>/contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="bg-primary text-white">
            <div class="container text-center">
                <h1>Bem Vindo ao <?=$config['title'];?></h1>
                <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
            </div>
        </header>

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; <?=$config['title'];?> 2020 - <?=date('Y');?></p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="<?=$config['url'];?>/resources/vendor/jquery/jquery.min.js"></script>
        <script src="<?=$config['url'];?>/resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="<?=$config['url'];?>/resources/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom JavaScript for this theme -->
        <script src="<?=$config['url'];?>/resources/js/scrolling-nav.js"></script>
    </body>
</html>
