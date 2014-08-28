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

#theme-ffd-header-subtext {
	position: absolute;
	top: 45px;
	left: 20px;
}

.elgg-menu-site .fa {
	color: white;
	padding-right: 10px;
}

.elgg-menu-site .elgg-state-selected > a > .fa,
.elgg-menu-site li:hover > a > .fa {
	color: #<?php echo COLOR_BLUE_DARK; ?>;
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

.elgg-menu-groups-my-status li a {
	display: block;
	color: white;
	background-color: #<?php echo COLOR_BLUE_MEDIUM; ?>;
	margin: 0 0 3px;
	padding: 6px 4px 6px 8px;
	border-radius: 0;
}

.elgg-menu-groups-my-status li:hover a {
	background-color: #<?php echo COLOR_BLUE_LIGHT; ?>;
	color: #<?php echo COLOR_BLUE_DARK; ?>;
	text-decoration: none;
}

.elgg-menu-widget {
	display: none;
}

.elgg-module-widget:hover .elgg-menu-widget {
	display: block;
}

.ffd-lichtblauw,
.ffd-lichtblauw > .elgg-head,
.ffd-lichtblauw > .elgg-body {
	background: #<?php echo COLOR_BLUE_LIGHT;?>;
}

.ffd-blauw,
.ffd-blauw > .elgg-head,
.ffd-blauw > .elgg-body {
	background: #<?php echo COLOR_BLUE;?>;
}

.ffd-grijs,
.ffd-grijs > .elgg-head,
.ffd-grijs > .elgg-body {
	background: #<?php echo COLOR_GREY_LIGHT;?>;
}

.ffd-lichtgrijs,
.ffd-lichtgrijs > .elgg-head,
.ffd-lichtgrijs > .elgg-body {
	background: #D6D6D6;
}

.elgg-output .fa {
	color: #<?php echo COLOR_GREY_DARK;?>;
}

.theme-ffd-body-header {
	position: absolute;
    right: 0;
    top: 10px;
    z-index: 1;
    width: 100%;
    text-align: right;
    
}

.theme-ffd-body-header-online {
	color: #<?php echo COLOR_GREY_LIGHT; ?>;
	background: #D6D6D6;
	padding: 5px 10px;
	margin-right: 5px;
}

.theme-ffd-body-header-online .elgg-icon {
	color: white;
}

.theme-ffd-body-header .elgg-icon-twitter {
	font-size: 32px;
	color: #00ACEE;
	top: -1px;
	margin-right: 5px;
}

.theme-ffd-body-header .elgg-icon-phone-square {
	font-size: 32px;
	color: #144273;	
	top: -1px;
}

.elgg-search-header {
	top: inherit;
	bottom: inherit;
	position: relative;
	height: auto;
}

.elgg-search-header input[type="text"] {
	border-radius: 0;
	border-color: #<?php echo COLOR_BLUE_MEDIUM; ?>;
	width: 292px;
	color: #CCC;
}

.elgg-search input[type="text"]:focus, 
.elgg-search input[type="text"]:active {
	border-color: #<?php echo COLOR_BLUE_MEDIUM; ?>;
}

.theme-ffd-question-icon {
	width: 40px;
	height: 32px;
	font-size: 24px;
	padding-top: 8px;
	background: #<?php echo COLOR_BLUE_MEDIUM; ?>;
	color: white;
	text-align: center;
}

.theme-ffd-answer-icon {
	width: 40px;
	height: 32px;
	font-size: 24px;
	padding-top: 8px;
	background: #<?php echo COLOR_BLUE_MEDIUM; ?>;
	color: white;
	text-align: center;
}

.elgg-widget-more {
	display: block;
	text-align: right;
}

.theme-ffd-index {
	padding-top: 40px;
}

.theme-ffd-index .elgg-widgets {
	float: left;
	min-height: 0;
}