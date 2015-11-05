<?php
header("Content-type: text/css"); 
?>

body {
	color:<?php echo $bodyText; ?>;
}

a:link,a:visited  {
	color:<?php echo $linkColor; ?>;
}

.wrapper {
	width:<?php echo $overallWidth; ?>px;
}

.logo {
    background:<?php echo $primaryColor; ?>;
}


#topmenu,.path,.upper,.bottom,.bottom1,.main_area,.header {
	width:<?php echo $templateWidth; ?>px;
}

.content_wrap {
	width:<?php echo $contentWidth; ?>px;
}

.column_left {
	width:<?php echo $columnLeftWidth; ?>px;
}

.column_right {
	width:<?php echo $columnRightWidth; ?>px;
}

.inputbox {
}

.pathway, a.pathway:link, a.pathway:visited, a.pathway:hover {
	color:<?php echo $breadcrumbsText; ?>;
}

.componentheading, h1 {
	color:<?php echo $componentHeadingText; ?>;
}

.contentheading, h2, h3, h4 {
	color:<?php echo $headingText; ?>;
}

#topmenu {
	background:<?php echo $topMenuBg; ?>;
}

#nav li:hover a, #nav li:hover ul li a {
	background:<?php echo $topMenuHoverButton; ?>;
    color:<?php echo $topMenuHoverText; ?>;
}

#nav li a, #nav li:hover ul li a:hover {
	background:<?php echo $topMenuButton; ?>;
    color:<?php echo $topMenuText; ?>;
}

.column_right ul.menu li, .column_left ul.menu li {
	background:<?php echo $mainMenuButton; ?>;
}

.column_right ul.menu li a:link, .column_right ul.menu li a:visited, .column_left ul.menu li a:link, .column_left ul.menu li a:visited {
	color:<?php echo $mainMenuText; ?>;
}

.column_right ul.menu li a:hover, .column_left ul.menu li a:hover {
	color:<?php echo $mainMenuHoverText; ?>;
}

.column_right li.active a, .column_left li.active a:link, .column_left li.active a:visited {
	color:<?php echo $mainMenuTextActive; ?> !important;
    background:<?php echo $mainMenuButtonActive; ?>;
}

div.module-rounded {
   background-color:<?php echo $secondaryColor; ?>;
   color:<?php echo $secondaryTextColor; ?>;
}

div.module-featured{
   background-color:<?php echo $primaryColor; ?>;
   color:<?php echo $primaryTextColor; ?>;
}

.big_header_bg {
	background:<?php echo $primaryColor; ?> url(<?php echo $this->baseurl ?>/templates/hot_boutique/images/top_bg.png) no-repeat center top;
    height:642px;
}

.bottom_module_row {
	background:<?php echo $bottomBg; ?> url(<?php echo $this->baseurl ?>/templates/hot_boutique/images/girl_bg2.png) bottom center no-repeat;
    color:<?php echo $bottomText; ?>;
}

.bottom_module_row a {
    color:<?php echo $bottomText; ?>;
}

.bottom1 .module h3 {
	background-color:<?php echo $primaryColor; ?>;
	color:<?php echo $primaryTextColor; ?>;
}

.module h3 {
	background-color:<?php echo $secondaryColor; ?>;
	color:<?php echo $secondaryTextColor; ?>;
}

div.module-featured h3 {
	color:<?php echo $primaryTextColor; ?>;
}

div.module-rounded h3 {
	color:<?php echo $secondaryTextColor; ?>;
}