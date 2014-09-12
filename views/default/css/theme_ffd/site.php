<?php
?>

.elgg-page-navbar .elgg-menu-site {
	left: 110px;
	z-index: 2;
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
	min-height: 300px;
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

.ffd-blauw,
.ffd-blauw .elgg-icon,
.ffd-blauw a {
	color: black;
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

.elgg-page-topbar .elgg-search {
	display: none;
}

.elgg-search-header {
	top: inherit;
	bottom: inherit;
	position: relative;
	height: auto;
}

.elgg-search-header input.search-input[type="text"] {
	border-radius: 0;
	border: 1px solid #<?php echo COLOR_BLUE_MEDIUM; ?>;
	width: 292px;
	color: #CCC;
	background-position: 2px -934px;
	height: 16px;
	padding: 2px 4px 2px 26px;
}

form.elgg-search {
	border: none;
}

.elgg-search input.search-input[type="text"]:focus, 
.elgg-search input.search-input[type="text"]:active {
	border: 1px solid #<?php echo COLOR_BLUE_MEDIUM; ?>;
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

.theme-ffd-index .elgg-widgets.ui-sortable {
	min-width: 50px;
	min-height: 50px !important;
}

li.elgg-menu-item-access {
	display: none;
}

#elgg-widget-col-4 .elgg-module-widget {
	margin-right: 0;
}

.elgg-widget-instance-ffd_stats .elgg-widget-content {
	font-size: 14px;
	font-weight: bold;
	line-height: 24px;
}

.elgg-widget-instance-ffd_stats .elgg-icon-users {
	color: white;
	font-size: 18px;
}
.elgg-widget-instance-ffd_stats .elgg-icon-bar-chart-o {
	color: black;
	font-size: 24px;
}

.elgg-widget-instance-recent_questions,
.elgg-widget-instance-recent_questions > .elgg-head,
.elgg-widget-instance-recent_questions > .elgg-body {
	background: #<?php echo COLOR_BLUE;?>;
	color: white;
}

.elgg-widget-instance-recent_questions .elgg-icon-round-plus,
.elgg-widget-instance-recent_questions a {
	color: white;
}

.elgg-widget-instance-search .elgg-input-text {
	width: 90%;
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat 2px -934px !important;
    border: 1px solid #8fcae7;
    color: #ccc;
    height: 16px;
    padding: 2px 4px 2px 26px;
    font-size: 12px;
    font-weight: bold;
}

.elgg-widget-instance-content_by_tag .elgg-list > li {
	padding: 0px;
	border: none;
}

.profile .elgg-inner {
	border: none;
	border-radius: 0px;
}

#profile-owner-block {
	padding: 0;
	background: transparent;
	width: 240px;
}

#profile-owner-block > ul > li {
	background: #<?php echo COLOR_BLUE_MEDIUM; ?>;
	text-align: center;
	margin-top: 5px;
	padding: 5px;
}

#profile-owner-block > ul > li a {
	color: white;
}

.theme-ffd-profile-icon {
	padding: 20px;
	background: #<?php echo COLOR_BLUE_MEDIUM; ?>;
	
}

#profile-details .even,
#profile-details .odd {
	background: none;
}

.theme-ffd-profile-question-stats {
	border: 1px solid #CCC;
	padding: 20px;
	font-weight: bold;
	margin-top: 5px;
}

.theme-ffd-profile-question-stats-count {
	color: #<?php echo COLOR_BLUE_MEDIUM; ?>;
}

.elgg-widget-instance-ask_question .elgg-widget-content a {
	background: #<?php echo COLOR_BLUE_MEDIUM; ?>;
	color: white;
    display: block;
    padding: 10px;
    text-decoration: none;
}

.elgg-widget-instance-ask_question .elgg-widget-content a .fa {
	color: white;
}

.elgg-widget-instance-ask_question .elgg-head,
.elgg-widget-instance-search .elgg-head {
	display: none;
}

.elgg-widget-instance-ask_question.elgg-state-draggable:hover .elgg-head,
.elgg-widget-instance-search.elgg-state-draggable:hover .elgg-head {
	display: block;
}

/** Responsive **/
@media (max-width: 1120px) {
	#theme-ffd-header-speech-bubble {
		left: 0;
		top: 65px;
    	width: 100px;
	}
}