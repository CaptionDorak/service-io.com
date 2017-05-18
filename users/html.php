<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="description" content="Service-io - сервис услуг">
    <meta name="keywords" content="Сервис,услуги,">
    <title>Service-io - Сервис различных услуг</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="users/css/style.css">
    <link rel="stylesheet icon" href="include/media/image/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="users/script/script.js"></script>
</head>
<body>
	<div id="wrapper">
		<header>
		<?php include('html_include/header.php'); ?>	
		</header>
		<?php include('html_include/content.php'); ?>	
		<footer>
		<?php include('html_include/footer.php'); ?>
		</footer>
	</div>
	<div id="wrapper_test">
		<div class="wrapper_style">
			<?php include('users/html_include/user-content/user-away.php');?>
		</div>
		<div><button type="button" id="button-user-content-krow" onclick="userThorPushAwayExit()"><span style="width: 15px;height: 15px;">Закрыть</span></button></div>
	</div>
			<script type="text/javascript">
				var map;
				function initMap() {
				  map = new google.maps.Map(document.getElementById('blog-map'), {
				    center: {lat: -34.397, lng: 150.644},
				    zoom: 8
				  });
				}
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4CPox_5XJv7QYUvyXKJxJHJN2_rqOJMY&callback=initMap">
		    </script>
		    <script type="text/javascript" href="script/script.js"></script>
</body>
</html>