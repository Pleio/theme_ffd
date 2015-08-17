<?php
?>

span.question-workflow-status {
	color: blue;
}

#elgg-widget-col-7 {
	width: 100%;
}

.elgg-button {
	padding: 5px 6px;
}

.elgg-page-navbar .elgg-menu-site {
	left: 110px;
	z-index: 2;
}

#theme-ffd-header-speech-bubble {
	position: absolute;
	left: -50px;
	z-index: 2;
	top: 25px;
}

#theme-ffd-header-speech-bubble-logged-out {
	left: 20px;
    position: absolute;
    top: 50px;
    z-index: 2;
}

#theme-ffd-header-subtext {
	position: absolute;
	top: 40px;
	left: 45px;
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

.ffd-blauw-middel,
.ffd-blauw-middel > .elgg-head,
.ffd-blauw-middel > .elgg-body {
	background: #<?php echo COLOR_BLUE_MEDIUM;?>;
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

.elgg-icon-hover-menu {
	background: white;
	padding-left: 2px;
	color: #<?php echo COLOR_BLUE; ?>;
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
	font-weight: bold;
	margin-top: 30px;
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
	clear: both;
	display: block;
	text-align: right;
}

.theme-ffd-index {
	padding-top: 80px;
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

.theme-ffd-widget-col-6 {
	width: 980px;
}

.ffd-widget-videos .list {
	width:30%;
	padding-left:1%;
	padding-right:1%;
	float:left;
	height:370px;
	overflow-y:scroll;
}

.ffd-widget-videos .list .elgg-item {
	padding:5px;
}

.ffd-widget-videos .list .selected {
	background-color:#ddeff8;
}

.ffd-widget-videos .video {
	width:68%;
	float:left;
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

.elgg-widget-instance-recent_questions > .elgg-head,
.elgg-widget-instance-recent_questions .elgg-widget-content {
	background: #<?php echo COLOR_BLUE;?>;
	color: white;
}

.elgg-widget-instance-recent_questions .elgg-widget-content .elgg-icon-round-plus,
.elgg-widget-instance-recent_questions .elgg-widget-content a {
	color: white;
}

.elgg-widget-instance-recent_questions .question-title {
	width: 75%;
	float: left;
	white-space: nowrap;
	text-overflow: ellipsis;
	overflow: hidden;
}

.elgg-widget-instance-recent_questions .question-date {
	text-align: right;
	float: right;
	width: 25%;
}

.elgg-widget-instance-recent_cafe > .elgg-head,
.elgg-widget-instance-recent_cafe .elgg-widget-content {
	background: #<?php echo COLOR_BLUE;?>;
	color: white;
}

.elgg-widget-instance-recent_cafe .elgg-widget-content .elgg-icon-round-plus,
.elgg-widget-instance-recent_cafe .elgg-widget-content a {
	color: white;
}

.elgg-widget-instance-recent_cafe .cafe-title {
	width: 75%;
	float: left;
	white-space: nowrap;
	text-overflow: ellipsis;
	overflow: hidden;
}

.elgg-widget-instance-recent_cafe .cafe-date {
	text-align: right;
	float: right;
	width: 25%;
}

.elgg-form-login .elgg-icon-unlock-alt {
	color: white;
}

li.elgg-menu-item-filter-category {
	float: right;
	margin: 0;
}

.elgg-menu-item-filter-category > ul {
	display: none;
	border: 1px solid #CCC;
	position: absolute;
	width: 100%;
	padding: 5px;
	right: 0;
	z-index: 1;
	background: white;
}

.elgg-menu-item-filter-category > ul a {
	color: black;
}

.elgg-menu-item-filter-category > a .elgg-icon-caret-down {
	color: #<?php echo COLOR_BLUE; ?>;
}

.elgg-menu-item-filter-category:hover > ul {
	display: block;
}

#ffd-questions-add {
	position: absolute;
	right: 335px;
	top: 69px;
	font-size: 12px;
	padding-top: 2px;
	padding-bottom: 2px;
	height: 17px;
	z-index: 1;
}

#ffd-questions-add .elgg-icon {
	color: white;
}


.elgg-menu-ffd-questions-alt {
	margin-left: 10px;
}

.elgg-menu-ffd-questions-alt li {
	border: 1px solid #CCC;
	padding: 2px 4px;
	margin-bottom: 2px;
	color: #<?php echo COLOR_GREY_LIGHT;?>;
}

.ffd-question-list-item h3 a {
	color: black;
}

.elgg-menu-ffd-questions-body .elgg-menu-item-answer {
	background: #<?php echo COLOR_BLUE; ?>;
	color: white;
	padding: 2px 4px;
	margin-left: 10px;
}

.elgg-menu-ffd-questions-body .elgg-menu-item-answer:hover {
	background: #<?php echo COLOR_GREY_DARK; ?>;
}

.elgg-menu-ffd-questions-body .elgg-menu-item-like {
	margin-left: 10px;
}

.elgg-menu-ffd-questions-body .elgg-menu-item-answer .elgg-icon,
.elgg-menu-ffd-questions-body .elgg-menu-item-answer a {
	color: white;
	text-decoration: none;
}

.ffd-answers > .elgg-head {
	background: white;
	border-bottom: 1px solid black;
	border-radius: 0;
}

.elgg-output table td,
.elgg-output table {
	border: inherit;
}

.widget_manager_disable_widget_content_style .elgg-output {
	margin: 0;
}

.elgg-form-theme-ffd-cafe .elgg-input-text {
	width: 69%;
}

.elgg-form-theme-ffd-cafe .elgg-input-dropdown {
	width: 25%;
}

.theme-ffd-cafe-profile-owner-block {
	padding-top: 10px;
}

.theme-ffd-cafe-profile-owner-block > .theme-ffd-profile-icon {
	text-align: center;
}

.theme-ffd-cafe-profile-owner-block > ul > li {
	text-align: center;
	background: #8fcae7;
	margin-top: 5px;
	padding: 5px;
}

.theme-ffd-cafe-profile-owner-block > ul > li a {
	color: white;
}

.theme-ffd-cafe-profile-owner-block > .theme-ffd-profile-owner-short-description {
	margin-top: 20px;

}

.theme-ffd-collapsable {
	display: none;
}

.theme-ffd-collapsable > div {
	margin-bottom: 15px;
}

.theme-ffd-top-button {
	text-align: right;
}

.theme-ffd-top-button .elgg-icon {
	color: white;
}

.theme-ffd-buttons {
	padding-top:10px;
}

.theme-ffd-search-users {
	display: inline-block;
	margin-top: 20px;
	width: 100%;
	border: 1px solid black;
	vertical-align: middle;
}

.theme-ffd-search-users img {
	vertical-align: middle;
	height: 50px;
}

.theme-ffd-search-users span {
	display: inline-block;
	vertical-align: middle;
	font-weight: bold;
}

.theme-ffd-top10 {
	border: 1px solid black;
	padding: 5px;
	margin-top: 20px;
}

.theme-ffd-top10 a {
	font-size: 14px;
}

.fivestar-ratings {
	float: right;
}

/** Responsive **/
@media (max-width: 1120px) {
	#theme-ffd-header-speech-bubble {
		left: 0;
		top: 65px;
    	width: 100px;
	}
}