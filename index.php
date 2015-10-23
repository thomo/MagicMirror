<html>
<head>
	<title>Magic Mirror</title>
	<style type="text/css">
		<?php include('css/main.css') ?>
	</style>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<script type="text/javascript">
		var gitHash = '<?php echo trim(`git rev-parse HEAD`) ?>';
	</script>
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="top left">
		<div class="date small dimmed"></div>
		<div class="time"></div>
<!--		<div class="calendar xxsmall"></div> -->
		<div id="monthcal"></div>
	</div>
	<div class="top right">
		<div class="windsun small dimmed"></div>
		<div class="temp"></div>
		<div class="forecast small dimmed"></div>
	</div>
	<div class="lower-third center-hor">
		<div class="compliment light"></div>
	</div>
	<div class="bottom center-hor">
		<div class="newshead medium"></div>
		<div class="news medium"></div>
	</div>

<script src="js/jquery.js"></script>
<script src="js/jquery.feedToJSON.js"></script>
<script src="js/ical_parser.js"></script>
<script src="js/moment-with-langs.min.js"></script>
<srcipt src="js/secret.js"></script>
<script src="js/config.js"></script>
<script src="js/rrule.js"></script>

<script src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
</body>
</html>
