<?php
?>

.elgg-page-navbar .elgg-menu-site {
	left: 100px;
}

#theme-ffd-header-pilot {
	position: absolute;
	left: 150px;
}

#theme-ffd-header-speech-bubble {
	position: absolute;
	left: -50px;
	z-index: 2;
}

#theme-ffd-header-speech-bubble-logged-out {
	left: 20px;
    position: absolute;
    top: 50px;
    z-index: 2;
}

.elgg-menu-site .elgg-child-menu a {
	background: #<?php echo COLOR_BLUE_LIGHT; ?>;
}

.elgg-menu-site .elgg-child-menu {
	border: none;
	box-shadow: none;
	border-radius: 0;
}

.elgg-menu-site .elgg-child-menu > li:last-child > a {
	border-radius: 0;
}

.elgg-menu-site .elgg-child-menu a:hover {
	background: #<?php echo COLOR_BLUE_LIGHT; ?>;
	color: #<?php echo COLOR_BLUE_DARK; ?>;
}

.elgg-module-theme-ffd-index-login {
	background: #<?php echo COLOR_BLUE_MEDIUM; ?>;
	border-left: 5px solid white;
	padding: 20px;
	min-height: 280px;
}

.elgg-module-theme-ffd-index-welcome {
	background: #<?php echo COLOR_BLUE_LIGHT; ?>;
	border-right: 5px solid white;
	padding: 120px 20px 20px 20px;
	position: relative;
	min-height: 140px;
}

.elgg-module-theme-ffd-index-welcome img {
	position: absolute;
	top: 20px;
	right: 40px;
}

.elgg-module-theme-ffd-index-welcome h1 {
	padding-bottom: 20px;
}

.elgg-module-theme-ffd-index-login .elgg-module {
	margin: 0;
}

.elgg-module-theme-ffd-index-login .elgg-menu-general {
	padding-top: 70px;
}

.elgg-module-theme-ffd-index-login .elgg-menu-general > li,
.elgg-module-theme-ffd-index-login .elgg-menu-general > li > a {
	color: black;
}