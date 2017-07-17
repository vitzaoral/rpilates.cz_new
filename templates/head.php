<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="keywords" content="fyzio, fyzioterapie, sportovní zranění, masáž, cvičení, rehabilitace, Bohuňovice, rpilates, zdraví, pilates, jóga"
/>
<meta name="description" content="Rpilates - rehabilitační ambulance a sportovní fyzioterapie.">
<title>Rpilates | <?php echo $title ?></title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Template Style.css -->
<link href="css/style.css" rel="stylesheet">
<!-- favicon  -->
<link rel="shortcut icon" href="pictures/favicon.png">
<!-- Template slider css -->
<link href="css/owl.theme.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<!-- icon css -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<!-- Template Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!--load reservanto-->
<?php if(isset($loadReservanto) && $loadReservanto) : ?>
	<script id="reservanto-widget-script" type="text/javascript" src="//booking.reservanto.cz/Script/reservanto-script.js?id=12207"></script>
<?php endif; ?>	

<!-- Google Analytics-->
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-97900652-1', 'auto');
		ga('send', 'pageview');
	</script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->