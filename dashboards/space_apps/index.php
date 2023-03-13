<!DOCTYPE HTML>

<html>

<head>
    <title>AEDES: Advanced Early Detection and Exploration Service</title>
    <link rel="stylesheet" href="resources/css/all.css" />
    <link rel="stylesheet" href="resources/app_css.css" />
    <link rel="stylesheet" href="resources/w3.css" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="canonical" href="https://www.aedesproject.org" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta name="title" content="AEDES: Advanced Early Detection and Exploration Service" />
    <meta name="description" content="AEDES aims to improve public health response against dengue in the Philippines by predicting dengue cases from climate and digital data and pinpointing possible hotspots from satellite data." />
    <meta name="keywords" content="philippines, satellite data, dengue, google searches, climate, fapar, ndwi, dominic ligot, claire tayco, mark toledo, jansen lopez" />
    <meta property="og:url" content="https://www.aedesproject.org" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="AEDES: Advanced Early Detection and Exploration Service" />
    <meta property="og:description" content="AEDES aims to improve public health response against dengue in the Philippines by predicting dengue cases from climate and digital data and pinpointing possible hotspots from satellite data." />
    <meta property="og:image" content="https://aedesproject.org/resources/images/splash.jpg" />
    <meta name="twitter:image" content="https://aedesproject.org/resources/images/splash.jpg" />
    <?include ('resources/panel/google_fb_trackers.php');?>
</head>

<body>
    <nav id="navBar" class="w3-top">
        <div class="w3-bar">
            <div class="w3-bar-item">
                <div class="topbar">
                    <a href="."><img src="resources/images/aedes_logo_white.png" height="36" /></a>
                </div>
            </div>
            <div style="padding-right: 32px;">
			
				<a href="./#contact">
					<div class="w3-bar-item w3-right w3-padding-32 w3-hide-small w3-hide-medium roboto w3-text-white w3-large">Contact Us</div>
				</a>
				<a href="./#media">
                    <div class="w3-bar-item w3-right w3-padding-32 w3-hide-small w3-hide-medium roboto w3-text-white w3-large">Media</div>
                </a>
                <a href="./#recognition">
                    <div class="w3-bar-item w3-right w3-padding-32 w3-hide-small w3-hide-medium roboto w3-text-white w3-large">Recognition</div>
                </a>
                <a href="./#ourWork">
                    <div class="w3-bar-item w3-right w3-padding-32 w3-hide-small w3-hide-medium roboto w3-text-white w3-large">How It Works</div>
                </a>
                <a href="./demo">
                    <div class="w3-bar-item w3-right w3-padding-32 w3-hide-small w3-hide-medium roboto w3-text-white w3-large">Prototype</div>
                </a>
            </div>
            <div class="w3-button w3-right w3-bar-item w3-hide-large">
                <div class="burger w3-text-white" onclick="toggle('sideBar');">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
		
		<div id="sideBar" class="w3-bar-block w3-center w3-black w3-hide">
			<a href="./demo">
				<div class="w3-bar-item roboto w3-text-white w3-xxlarge" onclick="toggle('sideBar');">Prototype</div>
			</a>
			<a href="./#ourWork">
				<div class="w3-bar-item roboto w3-text-white w3-xxlarge" onclick="toggle('sideBar');">How It Works</div>
			</a>
			<a href="./#recognition">
				<div class="w3-bar-item roboto w3-text-white w3-xxlarge" onclick="toggle('sideBar');">Recognition</div>
			</a>
			<a href="./#media">
				<div class="w3-bar-item roboto w3-text-white w3-xxlarge" onclick="toggle('sideBar');">Media</div>
			</a>
			<a href="./#contact">
				<div class="w3-bar-item roboto w3-text-white w3-xxlarge" onclick="toggle('sideBar');">Contact Us</div>
			</a>
		</div>
    </nav>

<?
include_once ('home.php');
include_once ('demo.php');

if (isset($_GET['page'])) {
	$page = $_GET['page'];
	switch (substr($page,0,3)) {
		case 'dem':
			showDemo();
			break;
		default:
			showHome();
			break;
	}
} else {
	showHome();
}
?>

    <footer>
        <div class="ambient w3-row roboto">
            <div id="contactUs" class="w3-half w3-padding w3-mobile">
                <div class="w3-bar w3-mobile w3-xxlarge">
					<h3 class="roboto w3-bar-item">Contact Us:</h3>
					<a href="https://www.linkedin.com/company/aedesproject/" target="_blank">
                        <div class="w3-bar-item"><i class="fab fa-linkedin" target="_blank"></i></div>
                    </a>
                    <a href="https://www.facebook.com/aedesproject.org/" target="_blank">
                        <div class="w3-bar-item"><i class="fab fa-facebook-square"></i></div>
                    </a>
					<a href="./#contact" target="_blank">
                        <div class="w3-bar-item"><i class="fas fa-envelope"></i></div>
                    </a>
                </div>
            </div>

        </div>

        <div class="w3-bar w3-padding roboto ambient">
			<a href="https://cirrolytix.com" target="_blank"><div class="w3-mobile w3-bar-item">&copy; 2019-2021 CirroLytix Research Services</div></a>
            <a href="./privacy#terms"><div class="w3-mobile w3-bar-item">Terms of Use</div></a>
            <a href="./privacy"><div class="w3-mobile w3-bar-item">Privacy Policy</div></a>
		</div>
    </footer>

    <script src="resources/app_js.js"></script>

</body>

</html>