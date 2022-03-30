<!DOCTYPE html>
<html>
<head>
	<title>Book Store</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<!--[if IE 6]>
		<script type="text/javascript" src="js/png-fix.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
	<?= $this->include('layout/header') ?>
	<?= $this->renderSection('slider') ?>
	
    <?= $this->renderSection('content') ?>
	
	<?= $this->include('layout/footer') ?>


</body>
</html>