<?php
/*------------------------------------------------------------------------
# "Hot Boutique" Joomla template, Version 1.0.0 - March, 2010
# Copyright (C) 2010 Hot Joomla Templates. All Rights Reserved.
# License: Copyrighted Commercial Software
# Author: Hot Joomla Templates
# Website:  http://www.hotjoomlatemplates.com
-------------------------------------------------------------------------*/
defined( '_JEXEC' ) or die( 'Restricted access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<meta content="width=320, user-scalable=yes" name="viewport"/>
<jdoc:include type="head" />

<?php	// module states
		
		$showadvert[1] = $this->countModules('advert1');
		$showadvert[2] = $this->countModules('advert2');
		$showadvert[3] = $this->countModules('advert3');
		$showadvert[4] = $this->countModules('advert4');

		$showuser[5] = $this->countModules('user5');
		$showuser[6] = $this->countModules('user6');
		$showuser[7] = $this->countModules('user7');
		$showuser[8] = $this->countModules('user8');
		
		$showbottom[1] = $this->countModules('bottom1');
		$showbottom[2] = $this->countModules('bottom2');
		$showbottom[3] = $this->countModules('bottom3');
		$showbottom[4] = $this->countModules('bottom4');
		
		$showleft = $this->countModules('left');
		$showright = $this->countModules('right');
		$showuser1 = $this->countModules('user1');
		$showuser3 = $this->countModules('user3');
		$showbreadcrumbs = $this->countModules('breadcrumbs');
		$showtoolbar = $this->countModules('toolbar');
		$showinset = $this->countModules('inset');
		
		$uppermodules = 0;
		for ($loop = 1; $loop <= 4; $loop += 1) {
			if($showadvert[$loop]) { $uppermodules++; }
		}
		
		$bottommodules = 0;
		for ($loop = 5; $loop <= 8; $loop += 1) {
			if($showuser[$loop]) { $bottommodules++; }
		}
		
		$footermodules = 0;
		for ($loop = 1; $loop <= 4; $loop += 1) {
			if($showbottom[$loop]) { $footermodules++; }
		}
?>

<?php	// template parameters

		// template layout
   		$templateWidth = $this->params->get("templateWidth", "980");
		if ($showleft || $showleft1 ||$showleft2 || $showleft3) {
			$columnLeftWidth = $this->params->get("columnLeftWidth", "200"); 
			$columnLeftPad = 22;
		}else{
			$columnLeftWidth = 0;
			$columnLeftPad = 0;
		}
		if ($showright || $showright1 ||$showright2 || $showright3) {
			$columnRightWidth = $this->params->get("columnRightWidth", "200");
			$columnRightPad = 22;
		}else{
			$columnRightWidth = 0;
			$columnRightPad = 0;
		}
		$contentWidth = $templateWidth - $columnLeftWidth - $columnLeftPad - $columnRightWidth - $columnRightPad;
		$overallWidth = $templateWidth;
		
		// add-ons
		$imageReflectionLoad = $this->params->get("imageReflectionLoad", "1");
		$fontResizeLoad = $this->params->get("fontResizeLoad", "1");
		$lightboxLoad = $this->params->get("lightboxLoad", "1");
		
		// template style
		
			// check if in parameters
			$templateStyle = $this->params->get("templateStyle", "1");
			
			// check if it cookie
			if(isset($_COOKIE['Style']))
			{
			$templateStyle = $_COOKIE['Style'];
			}
			
			$templateStyleTest = "";
		
			// check if in link
			if (isset($_GET['style'])) {
				$templateStyleTest = $_GET['style'];
			}
			
			if ($templateStyleTest) { 
				$templateStyle = $templateStyleTest;
				$Month = 2592000 + time(); 
				setcookie(Style, $templateStyle, $Month);
			}
		
		if($templateStyle) {
			
		require(YOURBASEPATH."/styles/style".$templateStyle.".php");
			
		}else{
		
		$bodyText = $this->params->get("bodyText", "#000000");
		$linkColor = $this->params->get("linkColor", "#000000");
		$primaryColor= $this->params->get("primaryColor", "#b21154");
		$primaryTextColor= $this->params->get("primaryTextColor", "#FFFFFF");
		$secondaryColor= $this->params->get("secondaryColor", "#fbedf2");
		$secondaryTextColor= $this->params->get("secondaryTextColor", "#B21154");
		$topMenuBg = $this->params->get("topMenuBg", "#000000");
		$menuAnimationEffect = $this->params->get("menuEffect", "fadeIn(700)");	
		$topMenuButton = $this->params->get("topMenuButton", "#000000");
		$topMenuHoverButton = $this->params->get("topMenuHoverButton", "#b21154");
		$topMenuText = $this->params->get("topMenuText", "#FFFFFF");
		$topMenuHoverText = $this->params->get("topMenuHoverText", "#FFFFFF");
		$mainMenuButton = $this->params->get("mainMenuButton", "#FFFFFF");
		$mainMenuText = $this->params->get("mainMenuText", "#B21154");
		$mainMenuHoverText = $this->params->get("mainMenuHoverText", "#000000");
		$mainMenuButtonActive = $this->params->get("mainMenuButtonActive", "#B21154");
		$mainMenuTextActive = $this->params->get("mainMenuTextActive", "#FFFFFF");
		$componentHeadingText = $this->params->get("componentHeadingText", "#8f8f8f");
		$headingText = $this->params->get("headingText", "#8f8f8f");
		$breadcrumbsText = $this->params->get("breadcrumbsText", "#CCCCCC");
		$bottomBg = $this->params->get("bottomBg", "#000000");
		$bottomText = $this->params->get("bottomText", "#FFFFFF");

		
		}
?>


<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/hot_boutique/css/template_css.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/hot_boutique/css/layout.css" type="text/css" />
<style type="text/css">
<!--
<?php require(dirname(__FILE__).DS.'/css/template_css.php'); ?>
-->
</style>

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/hot_boutique/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
     jQuery.noConflict();
</script>

<!-- top menu -->
<script type="text/javascript">
function mainmenu(){
jQuery(" #nav ul ").css({display: "none"}); // Opera Fix
jQuery(" #nav li ").hover(function(){
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).<?php echo $menuAnimationEffect; ?>;
		},function(){jQuery(this).find('ul:first').css({visibility: "hidden"});	});}
jQuery(document).ready(function(){ mainmenu();});
</script>

<?php if($imageReflectionLoad) { ?>
<!-- reflection -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/hot_boutique/js/reflection.js"></script>
<?php } ?>

<?php if($fontResizeLoad) { ?>
<!-- font resizer -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/hot_boutique/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/hot_boutique/js/fontResize.js"></script>
<?php } ?>

<?php if($lightboxLoad) { ?><script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/hot_boutique/js/jquery.lightbox-0.5.min.js"></script>
<!-- lightbox -->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/hot_boutique/css/jquery.lightbox-0.5.css" type="text/css" />
<script type="text/javascript">
	jQuery(function() {
		jQuery('#gallery a').lightBox();
	});
</script>
<?php } ?>

<!--[if IE 6]>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/hot_boutique/js/pngfix.js"></script>
<script>
  POS_BrowserPNG.fix('img,.header,.content_wrap,.sectiontableentry2 td,ul.checklist li,ul.arrow li,ul.star li,.slide-button,.carousel-control,div.module-featured div, div.module-featured,div.module-rounded div,div.module-rounded,.big_header_bg,.bottom_module_row');
</script>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/hot_boutique/css/ie7.css" type="text/css" />
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/hot_boutique/css/ie7.css" type="text/css" />
<![endif]-->

</head>
<body>
<div class="big_header_bg">
    <div style="background:url(<?php echo $this->baseurl ?>/templates/hot_boutique/images/girl_bg.png) no-repeat center bottom">
        <div class="wrapper">
            <div class="header">
                <div class="logo">
                    <a href="index.php"><img src="<?php echo $this->baseurl ?>/templates/hot_boutique/images/logo.png" width="222" height="180" alt="logo" /></a>
                </div>
                <div class="slider">
                    <jdoc:include type="modules" name="user1" style="none" />
                </div>
               
            </div>
            <?php if ($showuser3) { ?>
            <div id="topmenu">
                    <div class="search_wrap">
                    <div class="search_pad">
                        <jdoc:include type="modules" name="user4" style="none" />
                    </div>
                </div>
                <div id="topmenu_pad">
                    <jdoc:include type="modules" name="user3" style="none" />
                </div>
                <div id="font_resize">
                    <a href="#" class="decreaseFont" title="Font Decrease">
                        A-
                    </a>&nbsp;
                    <a href="#" class="resetFont" title="Font Reset">
                        A
                    </a>&nbsp;
                    <a href="#" class="increaseFont" title="Font Increase">
                        A+
                    </a>       
                </div>
            </div>
            <?php } ?>
            <div class="path">
                <?php if (@$_REQUEST['view'] != 'frontpage') { ?><jdoc:include type="modules" name="breadcrumbs" style="none" /><?php } ?>
            </div>
            <?php if ($uppermodules) { ?>
            <div class="upper">
                <?php if($showadvert[1]) { ?>
                <div class="modulerow<?php echo $uppermodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="advert1" style="rounded" />
                    </div>
                </div>
                <?php } if($showadvert[2]) { ?>
                <div class="modulerow<?php echo $uppermodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="advert2" style="rounded" />
                    </div>
                </div>
                <?php } if($showadvert[3]) { ?>
                <div class="modulerow<?php echo $uppermodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="advert3" style="rounded" />
                    </div>
                </div>
                <?php } if($showadvert[4]) { ?>
                <div class="modulerow<?php echo $uppermodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="advert4" style="rounded" />
                    </div>
                </div>
                <?php } ?>
                <div class="clr"></div>
            </div>
            <?php } ?>
            <div class="main_area">
                <div class="main_area_pad<?php if (!$showleft) { echo '_noleft'; } if (!$showright) { echo '_noright'; } ?>">
                    <?php if ($showleft){ ?>
                    <div class="column_left">
                        <jdoc:include type="modules" name="left" style="rounded" />
                    </div>
                    <?php } ?>
                    <div class="content_wrap">
                        <div class="content_wrap_pad">
                            <?php if ($showinset) { ?>
                            <div class="top_content_module_pad">
                                <jdoc:include type="modules" name="inset" style="rounded" />
                                <div class="clr"></div>
                            </div>
                            <?php } ?>
                            <div class="content_pad">
                                <jdoc:include type="message" />
                                <jdoc:include type="component" />
                            </div>
                            <?php if ($showtoolbar) { ?>
                            <div class="bottom_content_module_pad">
                                <jdoc:include type="modules" name="toolbar" style="rounded" />
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if ($showright) {?>
                    <div class="column_right">
                        <jdoc:include type="modules" name="right" style="rounded" />
                    </div>
                    <?php } ?>
                <div class="clr"></div>
                </div>
            </div>
            <?php if ($bottommodules) { ?>
            <div class="bottom">
                <?php if($showuser[5]) { ?>
                <div class="modulerow<?php echo $bottommodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="user5" style="rounded" />
                    </div>
                </div>
                <?php } if($showuser[6]) { ?>
                <div class="modulerow<?php echo $bottommodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="user6" style="rounded" />
                    </div>
                </div>
                <?php } if($showuser[7]) { ?>
                <div class="modulerow<?php echo $bottommodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="user7" style="rounded" />
                    </div>
                </div>
                <?php } if($showuser[8]) { ?>
                <div class="modulerow<?php echo $bottommodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="user8" style="rounded" />
                    </div>
                </div>
                <?php } ?>
                <div class="clr"></div>
            </div>
            <?php } ?>
        </div>
            <?php if ($footermodules) { ?>
        <div class="bottom_module_row">
            <div class="bottom1">
                <?php if($showbottom[1]) { ?>
                <div class="modulerow<?php echo $footermodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="bottom1" style="rounded" />
                    </div>
                </div>
                <?php } if($showbottom[2]) { ?>
                <div class="modulerow<?php echo $footermodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="bottom2" style="rounded" />
                    </div>
                </div>
                <?php } if($showbottom[3]) { ?>
                <div class="modulerow<?php echo $footermodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="bottom3" style="rounded" />
                    </div>
                </div>
                <?php } if($showbottom[4]) { ?>
                <div class="modulerow<?php echo $footermodules; ?>">
                    <div class="modulerow_pad">
                        <jdoc:include type="modules" name="bottom4" style="rounded" />
                    </div>
                </div>
                <?php } ?>
                <div class="clr"></div>
            </div>
            <?php } ?>  
        </div>
    </div><!-- end girl --> 
    <div class="footer_wrap">
        <div class="footer">
             &nbsp;
        </div>
        <div class="footer2">
        	<div class="footer2_pad">
             	<jdoc:include type="modules" name="footer" />
            </div>
        </div><div class="clr"></div>      
    </div>
    
</div><!-- end top bg --> 
<div style="clear:both"></div>
<jdoc:include type="modules" name="debug" style="none" />    
</body>
</html>