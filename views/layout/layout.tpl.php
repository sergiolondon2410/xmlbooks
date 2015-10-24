<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Yuxi Books</title>
	<!-- jQuery	 -->
	<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
	<!-- bootstrap -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

	<link href="<?= DIR_RAIZ ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= DIR_RAIZ ?>/css/1-col-portfolio.css" rel="stylesheet">

</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= DIR_RAIZ ?>/libro/lista">Yuxi Books</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= DIR_RAIZ ?>/libro/lista">Todos</a>
                    </li>
                    <li>
                        <a href="<?= DIR_RAIZ ?>/libro/spanish">Español</a>
                    </li>
                    <li>
                        <a href="<?= DIR_RAIZ ?>/libro/french">Francés</a>
                    </li>
                    <li>
                        <a href="<?= DIR_RAIZ ?>/libro/mayor">Precio + 100</a>
                    </li>
                    <li>
                        <a href="<?= DIR_RAIZ ?>/libro/menor">Precio - 100</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
	<div class="container">
		<?= $tpl_content ?>
	</div>

	<!-- jQuery -->
    <script src="<?= DIR_RAIZ ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= DIR_RAIZ ?>/js/bootstrap.min.js"></script>
</body>
</html>