<?php
# HD-GFont          	          	          	              
# Copyright (C) 2011 by Hyde-Design  	   	   	   	   
# Homepage   : www.hyde-design.co.uk		   	   	   
# Author     : Hyde-Design    		   	   	   	   
# Email      : sales@hyde-design.co.uk 	   	   	   
# Version    : 2.9                        	   	    	
# License    : http://www.gnu.org/copyleft/gpl.html GNU/GPL         

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.plugin.plugin');

class plgContentHD_Gfont extends JPlugin
{function plgContentHD_Gfont(&$subject, $config)	{parent::__construct($subject, $config);	
	$this->_plugin = JPluginHelper::getPlugin( 'content', 'HD_Gfont' );
	$this->_params = new JParameter( $this->_plugin->params );}
	
	function onAfterRender()
	{
	global $mainframe;
	$buffer = JResponse::getBody();
	
$goofurl_1 = '';
$goofont1 = '';
$goofont1 = $this->params->get( 'font-face-1' );

if ($goofont1=="Allan") {$goofurl_1="Allan:bold";}
elseif ($goofont1=="Nixie One") {$goofurl_1="Nixie+One";}
elseif ($goofont1=="Redressed") {$goofurl_1="Redressed";}
elseif ($goofont1=="Lobster Two") {$goofurl_1="Lobster+Two";$goofont1="Lobster Two";}
elseif ($goofont1=="Lobster Two Italic") {$goofurl_1="Lobster+Two:400italic";$goofont1="Lobster Two";}
elseif ($goofont1=="Lobster Two Bold") {$goofurl_1="Lobster+Two:700";$goofont1="Lobster Two";}
elseif ($goofont1=="Lobster Two Bold Italic") {$goofurl_1="Lobster+Two:700italic";$goofont1="Lobster Two";}
elseif ($goofont1=="Caudex") {$goofurl_1="Caudex";}
elseif ($goofont1=="Jura") {$goofurl_1="Jura";}
elseif ($goofont1=="Ruslan Display") {$goofurl_1="Ruslan+Display";}
elseif ($goofont1=="Brawler") {$goofurl_1="Brawler";}
elseif ($goofont1=="Nunito") {$goofurl_1="Nunito";}
elseif ($goofont1=="Wire One") {$goofurl_1="Wire+One";}
elseif ($goofont1=="Podkova") {$goofurl_1="Podkova";}
elseif ($goofont1=="Muli") {$goofurl_1="Muli";}
elseif ($goofont1=="Maven Pro") {$goofurl_1="Maven+Pro";}
elseif ($goofont1=="Tenor Sans") {$goofurl_1="Tenor+Sans";}
elseif ($goofont1=="Limelight") {$goofurl_1="Limelight";}
elseif ($goofont1=="Playfair Display") {$goofurl_1="Playfair+Display";}
elseif ($goofont1=="Artifika") {$goofurl_1="Artifika";}
elseif ($goofont1=="Lora") {$goofurl_1="Lora";}
elseif ($goofont1=="Kameron") {$goofurl_1="Kameron";}
elseif ($goofont1=="Cedarville Cursive") {$goofurl_1="Cedarville+Cursive";}
elseif ($goofont1=="Zeyada") {$goofurl_1="Zeyada";}
elseif ($goofont1=="La Belle Aurore") {$goofurl_1="La+Belle+Aurore";}
elseif ($goofont1=="Shadows into Light") {$goofurl_1="Shadows+Into+Light";}
elseif ($goofont1=="Shanti") {$goofurl_1="Shanti";}
elseif ($goofont1=="Mako") {$goofurl_1="Mako";}
elseif ($goofont1=="Metrophobic") {$goofurl_1="Metrophobic";}
elseif ($goofont1=="Ultra") {$goofurl_1="Ultra";}
elseif ($goofont1=="Play") {$goofurl_1="Play";}
elseif ($goofont1=="Didact Gothic") {$goofurl_1="Didact+Gothic";}
elseif ($goofont1=="Judson") {$goofurl_1="Judson";}
elseif ($goofont1=="Megrim") {$goofurl_1="Megrim";}
elseif ($goofont1=="Rokkitt") {$goofurl_1="Rokkitt";}
elseif ($goofont1=="Monofett") {$goofurl_1="Monofett";}
elseif ($goofont1=="Paytone One") {$goofurl_1="Paytone+One";}
elseif ($goofont1=="Holtwood One SC") {$goofurl_1="Holtwood+One+SC";}
elseif ($goofont1=="Carter One") {$goofurl_1="Carter+One";}
elseif ($goofont1=="Francois One") {$goofurl_1="Francois+One";}
elseif ($goofont1=="Bigshot One") {$goofurl_1="Bigshot+One";}
elseif ($goofont1=="Sigmar One") {$goofurl_1="Sigmar+One";}
elseif ($goofont1=="Swanky and Moo Moo") {$goofurl_1="Swanky+and+Moo+Moo";}
elseif ($goofont1=="Over the Rainbow") {$goofurl_1="Over+the+Rainbow";}
elseif ($goofont1=="Wallpoet") {$goofurl_1="Wallpoet";}
elseif ($goofont1=="Damion") {$goofurl_1="Damion";}
elseif ($goofont1=="News Cycle") {$goofurl_1="News+Cycle";}
elseif ($goofont1=="Aclonica") {$goofurl_1="Aclonica";}
elseif ($goofont1=="Special Elite") {$goofurl_1="Special+Elite";}
elseif ($goofont1=="Smythe") {$goofurl_1="Smythe";}
elseif ($goofont1=="Quattrocento Sans") {$goofurl_1="Quattrocento+Sans";}
elseif ($goofont1=="The Girl Next Door") {$goofurl_1="The+Girl+Next+Door";}
elseif ($goofont1=="Sue Ellen Francisco") {$goofurl_1="Sue+Ellen+Francisco";}
elseif ($goofont1=="Dawning of a New Day") {$goofurl_1="Dawning+of+a+New+Day";}
elseif ($goofont1=="Waiting for the Sunrise") {$goofurl_1="Waiting+for+the+Sunrise";}
elseif ($goofont1=="Annie Use Your Telescope") {$goofurl_1="Annie+Use+Your+Telescope";}
elseif ($goofont1=="Maiden Orange") {$goofurl_1="Maiden+Orange";}
elseif ($goofont1=="Luckiest Guy") {$goofurl_1="Luckiest+Guy";}
elseif ($goofont1=="Bangers") {$goofurl_1="Bangers";}
elseif ($goofont1=="Miltonian") {$goofurl_1="Miltonian";}
elseif ($goofont1=="Miltonian Tattoo") {$goofurl_1="Miltonian+Tattoo";}
elseif ($goofont1=="Allerta") {$goofurl_1="Allerta";}
elseif ($goofont1=="Allerta Stencil") {$goofurl_1="Allerta+Stencil";}
elseif ($goofont1=="Amaranth") {$goofurl_1="Amaranth";}
elseif ($goofont1=="Anonymous Pro") {$goofurl_1="Anonymous+Pro";}
elseif ($goofont1=="Anonymous Pro Italic") {$goofurl_1="Anonymous+Pro:italic";$goofont1="Anonymous Pro";}
elseif ($goofont1=="Anonymous Pro Bold") {$goofurl_1="Anonymous+Pro:bold";$goofont1="Anonymous Pro";}
elseif ($goofont1=="Anonymous Pro Bold Italic") {$goofurl_1="Anonymous+Pro:bolditalic";$goofont1="Anonymous Pro";}
elseif ($goofont1=="Anton") {$goofurl_1="Anton";}
elseif ($goofont1=="Architects Daughter") {$goofurl_1="Architects+Daughter";}
elseif ($goofont1=="Arimo") {$goofurl_1="Arimo";}
elseif ($goofont1=="Arimo Italic") {$goofurl_1="Arimo:italic";$goofont1="Arimo";}
elseif ($goofont1=="Arimo Bold") {$goofurl_1="Arimo:bold";$goofont1="Arimo";}
elseif ($goofont1=="Arimo Bold Italic") {$goofurl_1="Arimo:bolditalic";$goofont1="Arimo";}
elseif ($goofont1=="Arvo") {$goofurl_1="Arvo"; $goofont1="Arvo";}
elseif ($goofont1=="Arvo Italic") {$goofurl_1="Arvo:italic"; $goofont1="Arvo";}
elseif ($goofont1=="Arvo Bold") {$goofurl_1="Arvo:bold"; $goofont1="Arvo";}
elseif ($goofont1=="Arvo Bold Italic") {$goofurl_1="Arvo:bolditalic"; $goofont1="Arvo";}
elseif ($goofont1=="Astloch") {$goofurl_1="Astloch";}
elseif ($goofont1=="Astloch Bold") {$goofurl_1="Astloch:bold"; $goofont1="Astloch";}
elseif ($goofont1=="Bentham") {$goofurl_1="Bentham";}
elseif ($goofont1=="Bevan") {$goofurl_1="Bevan";}
elseif ($goofont1=="Buda") {$goofurl_1="Buda:light";}
elseif ($goofont1=="Cabin") {$goofurl_1="Cabin:regular";}
elseif ($goofont1=="Cabin Italic") {$goofurl_1="Cabin:regularitalic";$goofont1="Cabin";}
elseif ($goofont1=="Cabin Bold") {$goofurl_1="Cabin:bold";$goofont1="Cabin";}
elseif ($goofont1=="Cabin Bold Italic") {$goofurl_1="Cabin:bolditalic";$goofont1="Cabin";}
elseif ($goofont1=="Cabin Sketch") {$goofurl_1="Cabin+Sketch:bold";}
elseif ($goofont1=="Calligraffitti") {$goofurl_1="Calligraffitti";}
elseif ($goofont1=="Candal") {$goofurl_1="Candal";}
elseif ($goofont1=="Cantarell") {$goofurl_1="Cantarell";}
elseif ($goofont1=="Cantarell Italic") {$goofurl_1="Cantarell:italic";$goofont1="Cantarell";}
elseif ($goofont1=="Cantarell Bold") {$goofurl_1="Cantarell:bold";$goofont1="Cantarell";}
elseif ($goofont1=="Cantarell Bold Italic") {$goofurl_1="Cantarell:bolditalic";$goofont1="Cantarell";}
elseif ($goofont1=="Cardo") {$goofurl_1="Cardo";}
elseif ($goofont1=="Cherry Cream Soda") {$goofurl_1="Cherry+Cream+Soda";}
elseif ($goofont1=="Chewy") {$goofurl_1="Chewy";}
elseif ($goofont1=="Coda") {$goofurl_1="Coda:800";}
elseif ($goofont1=="Coda Caption") {$goofurl_1="Coda+Caption:800";}
elseif ($goofont1=="Coming Soon") {$goofurl_1="Coming+Soon";}
elseif ($goofont1=="Copse") {$goofurl_1="Copse";}
elseif ($goofont1=="Corben") {$goofurl_1="Corben:bold";}
elseif ($goofont1=="Cousine") {$goofurl_1="Cousine";}
elseif ($goofont1=="Cousine Italic") {$goofurl_1="Cousine:italic";$goofont1="Cousine";}
elseif ($goofont1=="Cousine Bold") {$goofurl_1="Cousine:bold";$goofont1="Cousine";}
elseif ($goofont1=="Cousine Bold Italic") {$goofurl_1="Cousine:bolditalic";$goofont1="Cousine";}
elseif ($goofont1=="Covered By Your Grace") {$goofurl_1="Covered+By+Your+Grace";}
elseif ($goofont1=="Crafty Girls") {$goofurl_1="Crafty+Girls";}
elseif ($goofont1=="Crimson Text") {$goofurl_1="Crimson+Text";}
elseif ($goofont1=="Crimson Text Italic") {$goofurl_1="Crimson+Text:italic";$goofont1="Crimson Text";}
elseif ($goofont1=="Crimson Text Bold") {$goofurl_1="Crimson+Text:bold";$goofont1="Crimson Text";}
elseif ($goofont1=="Crimson Text Bold Italic") {$goofurl_1="Crimson+Text:bolditalic";$goofont1="Crimson Text";}
elseif ($goofont1=="Crushed") {$goofurl_1="Crushed";}
elseif ($goofont1=="Cuprum") {$goofurl_1="Cuprum";}
elseif ($goofont1=="Droid Sans") {$goofurl_1="Droid+Sans";}
elseif ($goofont1=="Droid Sans Bold") {$goofurl_1="Droid+Sans:bold"; $goofont1="Droid Sans";}
elseif ($goofont1=="Droid Sans Mono") {$goofurl_1="Droid+Sans+Mono";}
elseif ($goofont1=="Droid Serif") {$goofurl_1="Droid+Serif";}
elseif ($goofont1=="Droid Serif Italic") {$goofurl_1="Droid+Serif:italic";$goofont1="Droid Serif";}
elseif ($goofont1=="Droid Serif Bold") {$goofurl_1="Droid+Serif:bold";$goofont1="Droid Serif";}
elseif ($goofont1=="Droid Serif Bold Italic") {$goofurl_1="Droid+Serif:bolditalic";$goofont1="Droid Serif";}
elseif ($goofont1=="EB Garamond") {$goofurl_1="EB+Garamond";}
elseif ($goofont1=="Expletus Sans") {$goofurl_1="Expletus+Sans";}
elseif ($goofont1=="Expletus Sans Bold") {$goofurl_1="Expletus+Sans:bold";$goofont1="Expletus Sans";}
elseif ($goofont1=="Fontdiner Swanky") {$goofurl_1="Fontdiner+Swanky";}
elseif ($goofont1=="Geo") {$goofurl_1="Geo";}
elseif ($goofont1=="Goudy Bookletter 1911") {$goofurl_1="Goudy+Bookletter+1911";}
elseif ($goofont1=="Gruppo") {$goofurl_1="Gruppo";}
elseif ($goofont1=="Homemade Apple") {$goofurl_1="Homemade+Apple";}
elseif ($goofont1=="IM Fell Double Pica") {$goofurl_1="IM+Fell+Double+Pica";$goofont1="IM Fell Double Pica";}
elseif ($goofont1=="IM Fell Double Pica Italic") {$goofurl_1="IM+Fell+Double+Pica:italic";$goofont1="IM Fell Double Pica";}
elseif ($goofont1=="IM Fell Double Pica SC") {$goofurl_1="IM+Fell+Double+Pica+SC";}
elseif ($goofont1=="IM Fell DW Pica") {$goofurl_1="IM+Fell+DW+Pica";$goofont1="IM Fell DW Pica";}
elseif ($goofont1=="IM Fell DW Pica Italic") {$goofurl_1="IM+Fell+DW+Pica:italic";$goofont1="IM Fell DW Pica";}
elseif ($goofont1=="IM Fell DW Pica SC") {$goofurl_1="IM+Fell+DW+Pica+SC";}
elseif ($goofont1=="IM Fell English") {$goofurl_1="IM+Fell+English";$goofont1="IM Fell English";}
elseif ($goofont1=="IM Fell English Italic") {$goofurl_1="IM+Fell+English:italic";$goofont1="IM Fell English";}
elseif ($goofont1=="IM Fell English SC") {$goofurl_1="IM+Fell+English+SC";}
elseif ($goofont1=="IM Fell French Canon") {$goofurl_1="IM+Fell+French+Canon";$goofont1="IM Fell French Canon";}
elseif ($goofont1=="IM Fell French Canon Italic") {$goofurl_1="IM+Fell+French+Canon:italic";$goofont1="IM Fell French Canon";}
elseif ($goofont1=="IM Fell French Canon SC") {$goofurl_1="IM+Fell+French+Canon+SC";}
elseif ($goofont1=="IM Fell Great Primer") {$goofurl_1="IM+Fell+Great+Primer";$goofont1="IM Fell Great Primer";}
elseif ($goofont1=="IM Fell Great Primer Italic") {$goofurl_1="IM+Fell+Great+Primer:italic";$goofont1="IM Fell Great Primer";}
elseif ($goofont1=="IM Fell Great Primer SC") {$goofurl_1="IM+Fell+Great+Primera+SC";}
elseif ($goofont1=="Inconsolata") {$goofurl_1="Inconsolata";}
elseif ($goofont1=="Indie Flower") {$goofurl_1="Indie+Flower";}
elseif ($goofont1=="Irish Grover") {$goofurl_1="Irish+Grover";}
elseif ($goofont1=="Josefin Sans") {$goofurl_1="Josefin+Sans";}
elseif ($goofont1=="Josefin Sans Italic") {$goofurl_1="Josefin+Sans:regularitalic"; $goofont1="Josefin Sans";}
elseif ($goofont1=="Josefin Sans Bold") {$goofurl_1="Josefin+Sans:bold"; $goofont1="Josefin Sans";}
elseif ($goofont1=="Josefin Sans Bold Italic") {$goofurl_1="Josefin+Sans:bolditalic"; $goofont1="Josefin Sans";}
elseif ($goofont1=="Josefin Slab") {$goofurl_1="Josefin+Slab";}
elseif ($goofont1=="Just Another Hand") {$goofurl_1="Just+Another+Hand";}
elseif ($goofont1=="Just Me Again Down Here") {$goofurl_1="Just+Me+Again+Down+Here";}
elseif ($goofont1=="Kenia") {$goofurl_1="Kenia";}
elseif ($goofont1=="Kranky") {$goofurl_1="Kranky";}
elseif ($goofont1=="Kreon") {$goofurl_1="Kreon";}
elseif ($goofont1=="Kreon Bold") {$goofurl_1="Kreon:bold"; $goofont1="Kreon";}
elseif ($goofont1=="Kristi") {$goofurl_1="Kristi";}
elseif ($goofont1=="Lato") {$goofurl_1="Lato";}
elseif ($goofont1=="Lato Italic") {$goofurl_1="Lato:regularitalic";$goofont1="Lato";}
elseif ($goofont1=="Lato Bold") {$goofurl_1="Lato:bold";$goofont1="Lato";}
elseif ($goofont1=="Lato Bold Italic") {$goofurl_1="Lato:bolditalic";$goofont1="Lato";}
elseif ($goofont1=="League Script") {$goofurl_1="League+Script";}
elseif ($goofont1=="Lekton") {$goofurl_1="Lekton";}
elseif ($goofont1=="Lekton Italic") {$goofurl_1="Lekton:italic"; $goofont1="Lekton";}
elseif ($goofont1=="Lekton Bold") {$goofurl_1="Lekton:bold"; $goofont1="Lekton";}
elseif ($goofont1=="Lobster") {$goofurl_1="Lobster";}
elseif ($goofont1=="MedievalSharp") {$goofurl_1="MedievalSharp";}
elseif ($goofont1=="Merriweather") {$goofurl_1="Merriweather";}
elseif ($goofont1=="Michroma") {$goofurl_1="Michroma";}
elseif ($goofont1=="Molengo") {$goofurl_1="Molengo";}
elseif ($goofont1=="Mountains of Christmas") {$goofurl_1="Mountains+of+Christmas";}
elseif ($goofont1=="Neucha") {$goofurl_1="Neucha";}
elseif ($goofont1=="Neuton") {$goofurl_1="Neuton";}
elseif ($goofont1=="Neuton Italic") {$goofurl_1="Neuton:italic"; $goofont1="Neuton";}
elseif ($goofont1=="Nobile") {$goofurl_1="Nobile";}
elseif ($goofont1=="Nobile Italic") {$goofurl_1="Nobile:italic"; $goofont1="Nobile";}
elseif ($goofont1=="Nobile Bold") {$goofurl_1="Nobile:bold"; $goofont1="Nobile";}
elseif ($goofont1=="Nobile Bold Italic") {$goofurl_1="Nobile:bolditalic"; $goofont1="Nobile";}
elseif ($goofont1=="Nova Round") {$goofurl_1="Nova+Round";}
elseif ($goofont1=="Nova Script") {$goofurl_1="Nova+Script";}
elseif ($goofont1=="Nova Slim") {$goofurl_1="Nova+Slim";}
elseif ($goofont1=="Nova Cut") {$goofurl_1="Nova+Cut";}
elseif ($goofont1=="Nova Oval") {$goofurl_1="Nova+Oval";}
elseif ($goofont1=="Nova Mono") {$goofurl_1="Nova+Mono";}
elseif ($goofont1=="Nova Flat") {$goofurl_1="Nova+Flat";}
elseif ($goofont1=="OFL Sorts Mill Goudy TT") {$goofurl_1="OFL+Sorts+Mill+Goudy+TT";}
elseif ($goofont1=="OFL Sorts Mill Goudy TT Italic") {$goofurl_1="OFL+Sorts+Mill+Goudy+TT:italic";$goofont1="OFL Sorts Mill Goudy TT";}
elseif ($goofont1=="Old Standard TT") {$goofurl_1="Old+Standard+TT";}
elseif ($goofont1=="Old Standard TT Italic") {$goofurl_1="Old+Standard+TT:italic";$goofont1="Old Standard TT";}
elseif ($goofont1=="Old Standard TT Bold") {$goofurl_1="Old+Standard+TT:bold";$goofont1="Old Standard TT";}
elseif ($goofont1=="Orbitron") {$goofurl_1="Orbitron";}
elseif ($goofont1=="Orbitron Italic") {$goofurl_1="Orbitron:italic";$goofont1="Orbitron";}
elseif ($goofont1=="Orbitron Bold") {$goofurl_1="Orbitron:bold";$goofont1="Orbitron";}
elseif ($goofont1=="Orbitron Bold Italic") {$goofurl_1="Orbitron:bolditalic";$goofont1="Orbitron";}
elseif ($goofont1=="Oswald") {$goofurl_1="Oswald";}
elseif ($goofont1=="Pacifico") {$goofurl_1="Pacifico";}
elseif ($goofont1=="Permanent Marker") {$goofurl_1="Permanent+Marker";}
elseif ($goofont1=="PT Sans") {$goofurl_1="PT+Sans";}
elseif ($goofont1=="PT Sans Italic") {$goofurl_1="PT+Sans:italic";}
elseif ($goofont1=="PT Sans Bold") {$goofurl_1="PT+Sans:bold";}
elseif ($goofont1=="PT Sans Bold Italic") {$goofurl_1="PT+Sans:bolditalic";}
elseif ($goofont1=="PT Sans Caption") {$goofurl_1="PT+Sans+Caption";}
elseif ($goofont1=="PT Sans Caption Bold") {$goofurl_1="PT+Sans+Caption:bold"; $goofont1="PT Sans Caption";}
elseif ($goofont1=="PT Sans Narrow") {$goofurl_1="PT+Sans+Narrow";}
elseif ($goofont1=="PT Sans Narrow Bold") {$goofurl_1="PT+Sans+Narrow:bold"; $goofont1="PT Sans Narrow";}
elseif ($goofont1=="PT Serif") {$goofurl_1="PT+Serif";}
elseif ($goofont1=="PT Serif Italic") {$goofurl_1="PT+Serif:italic";$goofont1="PT Serif";}
elseif ($goofont1=="PT Serif Bold") {$goofurl_1="PT+Serif:bold";$goofont1="PT Serif";}
elseif ($goofont1=="PT Serif Bold Italic") {$goofurl_1="PT+Serif:bolditalic";$goofont1="PT Serif";}
elseif ($goofont1=="PT Serif Caption") {$goofurl_1="PT+Serif+Caption";}
elseif ($goofont1=="PT Serif Caption Bold") {$goofurl_1="PT+Serif+Caption+Bold"; $goofont1="PT Serif Caption";}
elseif ($goofont1=="Philosopher") {$goofurl_1="Philosopher";}
elseif ($goofont1=="Puritan") {$goofurl_1="Puritan";}
elseif ($goofont1=="Puritan Italic") {$goofurl_1="Puritan:italic";$goofont1="Puritan";}
elseif ($goofont1=="Puritan Bold") {$goofurl_1="Puritan:bold";$goofont1="Puritan";}
elseif ($goofont1=="Puritan Bold Italic") {$goofurl_1="Puritan:bolditalic";$goofont1="Puritan";}
elseif ($goofont1=="Quattrocento") {$goofurl_1="Quattrocento";}
elseif ($goofont1=="Raleway") {$goofurl_1="Raleway:100";}
elseif ($goofont1=="Reenie Beanie") {$goofurl_1="Reenie+Beanie";}
elseif ($goofont1=="Rock Salt") {$goofurl_1="Rock+Salt";}
elseif ($goofont1=="Schoolbell") {$goofurl_1="Schoolbell";}
elseif ($goofont1=="Slackey") {$goofurl_1="Slackey";}
elseif ($goofont1=="Sniglet") {$goofurl_1="Sniglet:800";}
elseif ($goofont1=="Sunshiney") {$goofurl_1="Sunshiney";}
elseif ($goofont1=="Syncopate") {$goofurl_1="Syncopate";}
elseif ($goofont1=="Tangerine") {$goofurl_1="Tangerine";}
elseif ($goofont1=="Terminal Dosis Light") {$goofurl_1="Terminal Dosis Light";}
elseif ($goofont1=="Tinos") {$goofurl_1="Tinos";}
elseif ($goofont1=="Tinos Italic") {$goofurl_1="Tinos:italic";$goofont1="Tinos";}
elseif ($goofont1=="Tinos Bold") {$goofurl_1="Tinos:bold";$goofont1="Tinos";}
elseif ($goofont1=="Tinos Bold Italic") {$goofurl_1="Tinos:bolditalic";$goofont1="Tinos";}
elseif ($goofont1=="Ubuntu") {$goofurl_1="Ubuntu";}
elseif ($goofont1=="Ubuntu Italic") {$goofurl_1="Ubuntu:italic";$goofont1="Ubuntu";}
elseif ($goofont1=="Ubuntu Bold") {$goofurl_1="Ubuntu:bold";$goofont1="Ubuntu";}
elseif ($goofont1=="Ubuntu Bold Italic") {$goofurl_1="Ubuntu:bolditalic";$goofont1="Ubuntu";}
elseif ($goofont1=="UnifrakturCook") {$goofurl_1="UnifrakturCook:bold";}
elseif ($goofont1=="UnifrakturMaguntia") {$goofurl_1="UnifrakturMaguntia";}
elseif ($goofont1=="Unkempt") {$goofurl_1="Unkempt";}
elseif ($goofont1=="VT323") {$goofurl_1="VT323";}
elseif ($goofont1=="Vibur") {$goofurl_1="Vibur";}
elseif ($goofont1=="Vollkorn") {$goofurl_1="Vollkorn";}
elseif ($goofont1=="Vollkorn Italic") {$goofurl_1="Vollkorn:italic";$goofont1="Vollkorn";}
elseif ($goofont1=="Vollkorn Bold") {$goofurl_1="Vollkorn:bold";$goofont1="Vollkorn";}
elseif ($goofont1=="Vollkorn Bold Italic") {$goofurl_1="Vollkorn:bolditalic";$goofont1="Vollkorn";}
elseif ($goofont1=="Walter Turncoat") {$goofurl_1="Walter+Turncoat";}
elseif ($goofont1=="Yanone Kaffeesatz") {$goofurl_1="Yanone+Kaffeesatz";}
elseif ($goofont1=="Yanone Kaffeesatz Light") {$goofurl_1="Yanone+Kaffeesatz:light";$goofont1="Yanone Kaffeesatz";}
elseif ($goofont1=="Yanone Kaffeesatz Bold") {$goofurl_1="Yanone+Kaffeesatz:bold";$goofont1="Yanone Kaffeesatz";}
else ;


$goofurl_2 = '';
$goofont2 = '';
$goofont2 = $this->params->get( 'font-face-2' );

if ($goofont2=="Allan") {$goofurl_2="Allan:bold";}
elseif ($goofont2=="Nixie One") {$goofurl_2="Nixie+One";}
elseif ($goofont2=="Redressed") {$goofurl_2="Redressed";}
elseif ($goofont2=="Lobster Two") {$goofurl_2="Lobster+Two";$goofont2="Lobster Two";}
elseif ($goofont2=="Lobster Two Italic") {$goofurl_2="Lobster+Two:400italic";$goofont2="Lobster Two";}
elseif ($goofont2=="Lobster Two Bold") {$goofurl_2="Lobster+Two:700";$goofont2="Lobster Two";}
elseif ($goofont2=="Lobster Two Bold Italic") {$goofurl_2="Lobster+Two:700italic";$goofont2="Lobster Two";}
elseif ($goofont2=="Caudex") {$goofurl_2="Caudex";}
elseif ($goofont2=="Jura") {$goofurl_2="Jura";}
elseif ($goofont2=="Ruslan Display") {$goofurl_2="Ruslan+Display";}
elseif ($goofont2=="Brawler") {$goofurl_2="Brawler";}
elseif ($goofont2=="Nunito") {$goofurl_2="Nunito";}
elseif ($goofont2=="Wire One") {$goofurl_2="Wire+One";}
elseif ($goofont2=="Podkova") {$goofurl_2="Podkova";}
elseif ($goofont2=="Muli") {$goofurl_2="Muli";}
elseif ($goofont2=="Maven Pro") {$goofurl_2="Maven+Pro";}
elseif ($goofont2=="Tenor Sans") {$goofurl_2="Tenor+Sans";}
elseif ($goofont2=="Limelight") {$goofurl_2="Limelight";}
elseif ($goofont2=="Playfair Display") {$goofurl_2="Playfair+Display";}
elseif ($goofont2=="Artifika") {$goofurl_2="Artifika";}
elseif ($goofont2=="Lora") {$goofurl_2="Lora";}
elseif ($goofont2=="Kameron") {$goofurl_2="Kameron";}
elseif ($goofont2=="Cedarville Cursive") {$goofurl_2="Cedarville+Cursive";}
elseif ($goofont2=="Zeyada") {$goofurl_2="Zeyada";}
elseif ($goofont2=="La Belle Aurore") {$goofurl_2="La+Belle+Aurore";}
elseif ($goofont2=="Shadows into Light") {$goofurl_2="Shadows+Into+Light";}
elseif ($goofont2=="Shanti") {$goofurl_2="Shanti";}
elseif ($goofont2=="Mako") {$goofurl_2="Mako";}
elseif ($goofont2=="Metrophobic") {$goofurl_2="Metrophobic";}
elseif ($goofont2=="Ultra") {$goofurl_2="Ultra";}
elseif ($goofont2=="Play") {$goofurl_2="Play";}
elseif ($goofont2=="Didact Gothic") {$goofurl_2="Didact+Gothic";}
elseif ($goofont2=="Judson") {$goofurl_2="Judson";}
elseif ($goofont2=="Megrim") {$goofurl_2="Megrim";}
elseif ($goofont2=="Rokkitt") {$goofurl_2="Rokkitt";}
elseif ($goofont2=="Monofett") {$goofurl_2="Monofett";}
elseif ($goofont2=="Paytone One") {$goofurl_2="Paytone+One";}
elseif ($goofont2=="Holtwood One SC") {$goofurl_2="Holtwood+One+SC";}
elseif ($goofont2=="Carter One") {$goofurl_2="Carter+One";}
elseif ($goofont2=="Francois One") {$goofurl_2="Francois+One";}
elseif ($goofont2=="Bigshot One") {$goofurl_2="Bigshot+One";}
elseif ($goofont2=="Sigmar One") {$goofurl_2="Sigmar+One";}
elseif ($goofont2=="Swanky and Moo Moo") {$goofurl_2="Swanky+and+Moo+Moo";}
elseif ($goofont2=="Over the Rainbow") {$goofurl_2="Over+the+Rainbow";}
elseif ($goofont2=="Wallpoet") {$goofurl_2="Wallpoet";}
elseif ($goofont2=="Damion") {$goofurl_2="Damion";}
elseif ($goofont2=="News Cycle") {$goofurl_2="News+Cycle";}
elseif ($goofont2=="Aclonica") {$goofurl_2="Aclonica";}
elseif ($goofont2=="Special Elite") {$goofurl_2="Special+Elite";}
elseif ($goofont2=="Smythe") {$goofurl_2="Smythe";}
elseif ($goofont2=="Quattrocento Sans") {$goofurl_2="Quattrocento+Sans";}
elseif ($goofont2=="The Girl Next Door") {$goofurl_2="The+Girl+Next+Door";}
elseif ($goofont2=="Sue Ellen Francisco") {$goofurl_2="Sue+Ellen+Francisco";}
elseif ($goofont2=="Dawning of a New Day") {$goofurl_2="Dawning+of+a+New+Day";}
elseif ($goofont2=="Waiting for the Sunrise") {$goofurl_2="Waiting+for+the+Sunrise";}
elseif ($goofont2=="Annie Use Your Telescope") {$goofurl_2="Annie+Use+Your+Telescope";}
elseif ($goofont2=="Maiden Orange") {$goofurl_2="Maiden+Orange";}
elseif ($goofont2=="Luckiest Guy") {$goofurl_2="Luckiest+Guy";}
elseif ($goofont2=="Bangers") {$goofurl_2="Bangers";}
elseif ($goofont2=="Miltonian") {$goofurl_2="Miltonian";}
elseif ($goofont2=="Miltonian Tattoo") {$goofurl_2="Miltonian+Tattoo";}
elseif ($goofont2=="Allerta") {$goofurl_2="Allerta";}
elseif ($goofont2=="Allerta Stencil") {$goofurl_2="Allerta+Stencil";}
elseif ($goofont2=="Amaranth") {$goofurl_2="Amaranth";}
elseif ($goofont2=="Anonymous Pro") {$goofurl_2="Anonymous+Pro";}
elseif ($goofont2=="Anonymous Pro Italic") {$goofurl_2="Anonymous+Pro:italic";$goofont2="Anonymous Pro";}
elseif ($goofont2=="Anonymous Pro Bold") {$goofurl_2="Anonymous+Pro:bold";$goofont2="Anonymous Pro";}
elseif ($goofont2=="Anonymous Pro Bold Italic") {$goofurl_2="Anonymous+Pro:bolditalic";$goofont2="Anonymous Pro";}
elseif ($goofont2=="Anton") {$goofurl_2="Anton";}
elseif ($goofont2=="Architects Daughter") {$goofurl_2="Architects+Daughter";}
elseif ($goofont2=="Arimo") {$goofurl_2="Arimo";}
elseif ($goofont2=="Arimo Italic") {$goofurl_2="Arimo:italic";$goofont2="Arimo";}
elseif ($goofont2=="Arimo Bold") {$goofurl_2="Arimo:bold";$goofont2="Arimo";}
elseif ($goofont2=="Arimo Bold Italic") {$goofurl_2="Arimo:bolditalic";$goofont2="Arimo";}
elseif ($goofont2=="Arvo") {$goofurl_2="Arvo"; $goofont2="Arvo";}
elseif ($goofont2=="Arvo Italic") {$goofurl_2="Arvo:italic"; $goofont2="Arvo";}
elseif ($goofont2=="Arvo Bold") {$goofurl_2="Arvo:bold"; $goofont2="Arvo";}
elseif ($goofont2=="Arvo Bold Italic") {$goofurl_2="Arvo:bolditalic"; $goofont2="Arvo";}
elseif ($goofont2=="Astloch") {$goofurl_2="Astloch";}
elseif ($goofont2=="Astloch Bold") {$goofurl_2="Astloch:bold"; $goofont2="Astloch";}
elseif ($goofont2=="Bentham") {$goofurl_2="Bentham";}
elseif ($goofont2=="Bevan") {$goofurl_2="Bevan";}
elseif ($goofont2=="Buda") {$goofurl_2="Buda:light";}
elseif ($goofont2=="Cabin") {$goofurl_2="Cabin:regular";}
elseif ($goofont2=="Cabin Italic") {$goofurl_2="Cabin:regularitalic";$goofont2="Cabin";}
elseif ($goofont2=="Cabin Bold") {$goofurl_2="Cabin:bold";$goofont2="Cabin";}
elseif ($goofont2=="Cabin Bold Italic") {$goofurl_2="Cabin:bolditalic";$goofont2="Cabin";}
elseif ($goofont2=="Cabin Sketch") {$goofurl_2="Cabin+Sketch:bold";}
elseif ($goofont2=="Calligraffitti") {$goofurl_2="Calligraffitti";}
elseif ($goofont2=="Candal") {$goofurl_2="Candal";}
elseif ($goofont2=="Cantarell") {$goofurl_2="Cantarell";}
elseif ($goofont2=="Cantarell Italic") {$goofurl_2="Cantarell:italic";$goofont2="Cantarell";}
elseif ($goofont2=="Cantarell Bold") {$goofurl_2="Cantarell:bold";$goofont2="Cantarell";}
elseif ($goofont2=="Cantarell Bold Italic") {$goofurl_2="Cantarell:bolditalic";$goofont2="Cantarell";}
elseif ($goofont2=="Cardo") {$goofurl_2="Cardo";}
elseif ($goofont2=="Cherry Cream Soda") {$goofurl_2="Cherry+Cream+Soda";}
elseif ($goofont2=="Chewy") {$goofurl_2="Chewy";}
elseif ($goofont2=="Coda") {$goofurl_2="Coda:800";}
elseif ($goofont2=="Coda Caption") {$goofurl_2="Coda+Caption:800";}
elseif ($goofont2=="Coming Soon") {$goofurl_2="Coming+Soon";}
elseif ($goofont2=="Copse") {$goofurl_2="Copse";}
elseif ($goofont2=="Corben") {$goofurl_2="Corben:bold";}
elseif ($goofont2=="Cousine") {$goofurl_2="Cousine";}
elseif ($goofont2=="Cousine Italic") {$goofurl_2="Cousine:italic";$goofont2="Cousine";}
elseif ($goofont2=="Cousine Bold") {$goofurl_2="Cousine:bold";$goofont2="Cousine";}
elseif ($goofont2=="Cousine Bold Italic") {$goofurl_2="Cousine:bolditalic";$goofont2="Cousine";}
elseif ($goofont2=="Covered By Your Grace") {$goofurl_2="Covered+By+Your+Grace";}
elseif ($goofont2=="Crafty Girls") {$goofurl_2="Crafty+Girls";}
elseif ($goofont2=="Crimson Text") {$goofurl_2="Crimson+Text";}
elseif ($goofont2=="Crimson Text Italic") {$goofurl_2="Crimson+Text:italic";$goofont2="Crimson Text";}
elseif ($goofont2=="Crimson Text Bold") {$goofurl_2="Crimson+Text:bold";$goofont2="Crimson Text";}
elseif ($goofont2=="Crimson Text Bold Italic") {$goofurl_2="Crimson+Text:bolditalic";$goofont2="Crimson Text";}
elseif ($goofont2=="Crushed") {$goofurl_2="Crushed";}
elseif ($goofont2=="Cuprum") {$goofurl_2="Cuprum";}
elseif ($goofont2=="Droid Sans") {$goofurl_2="Droid+Sans";}
elseif ($goofont2=="Droid Sans Bold") {$goofurl_2="Droid+Sans:bold"; $goofont2="Droid Sans";}
elseif ($goofont2=="Droid Sans Mono") {$goofurl_2="Droid+Sans+Mono";}
elseif ($goofont2=="Droid Serif") {$goofurl_2="Droid+Serif";}
elseif ($goofont2=="Droid Serif Italic") {$goofurl_2="Droid+Serif:italic";$goofont2="Droid Serif";}
elseif ($goofont2=="Droid Serif Bold") {$goofurl_2="Droid+Serif:bold";$goofont2="Droid Serif";}
elseif ($goofont2=="Droid Serif Bold Italic") {$goofurl_2="Droid+Serif:bolditalic";$goofont2="Droid Serif";}
elseif ($goofont2=="EB Garamond") {$goofurl_2="EB+Garamond";}
elseif ($goofont2=="Expletus Sans") {$goofurl_2="Expletus+Sans";}
elseif ($goofont2=="Expletus Sans Bold") {$goofurl_2="Expletus+Sans:bold";$goofont2="Expletus Sans";}
elseif ($goofont2=="Fontdiner Swanky") {$goofurl_2="Fontdiner+Swanky";}
elseif ($goofont2=="Geo") {$goofurl_2="Geo";}
elseif ($goofont2=="Goudy Bookletter 1911") {$goofurl_2="Goudy+Bookletter+1911";}
elseif ($goofont2=="Gruppo") {$goofurl_2="Gruppo";}
elseif ($goofont2=="Homemade Apple") {$goofurl_2="Homemade+Apple";}
elseif ($goofont2=="IM Fell Double Pica") {$goofurl_2="IM+Fell+Double+Pica";$goofont2="IM Fell Double Pica";}
elseif ($goofont2=="IM Fell Double Pica Italic") {$goofurl_2="IM+Fell+Double+Pica:italic";$goofont2="IM Fell Double Pica";}
elseif ($goofont2=="IM Fell Double Pica SC") {$goofurl_2="IM+Fell+Double+Pica+SC";}
elseif ($goofont2=="IM Fell DW Pica") {$goofurl_2="IM+Fell+DW+Pica";$goofont2="IM Fell DW Pica";}
elseif ($goofont2=="IM Fell DW Pica Italic") {$goofurl_2="IM+Fell+DW+Pica:italic";$goofont2="IM Fell DW Pica";}
elseif ($goofont2=="IM Fell DW Pica SC") {$goofurl_2="IM+Fell+DW+Pica+SC";}
elseif ($goofont2=="IM Fell English") {$goofurl_2="IM+Fell+English";$goofont2="IM Fell English";}
elseif ($goofont2=="IM Fell English Italic") {$goofurl_2="IM+Fell+English:italic";$goofont2="IM Fell English";}
elseif ($goofont2=="IM Fell English SC") {$goofurl_2="IM+Fell+English+SC";}
elseif ($goofont2=="IM Fell French Canon") {$goofurl_2="IM+Fell+French+Canon";$goofont2="IM Fell French Canon";}
elseif ($goofont2=="IM Fell French Canon Italic") {$goofurl_2="IM+Fell+French+Canon:italic";$goofont2="IM Fell French Canon";}
elseif ($goofont2=="IM Fell French Canon SC") {$goofurl_2="IM+Fell+French+Canon+SC";}
elseif ($goofont2=="IM Fell Great Primer") {$goofurl_2="IM+Fell+Great+Primer";$goofont2="IM Fell Great Primer";}
elseif ($goofont2=="IM Fell Great Primer Italic") {$goofurl_2="IM+Fell+Great+Primer:italic";$goofont2="IM Fell Great Primer";}
elseif ($goofont2=="IM Fell Great Primer SC") {$goofurl_2="IM+Fell+Great+Primera+SC";}
elseif ($goofont2=="Inconsolata") {$goofurl_2="Inconsolata";}
elseif ($goofont2=="Indie Flower") {$goofurl_2="Indie+Flower";}
elseif ($goofont2=="Irish Grover") {$goofurl_2="Irish+Grover";}
elseif ($goofont2=="Josefin Sans") {$goofurl_2="Josefin+Sans";}
elseif ($goofont2=="Josefin Sans Italic") {$goofurl_2="Josefin+Sans:regularitalic"; $goofont2="Josefin Sans";}
elseif ($goofont2=="Josefin Sans Bold") {$goofurl_2="Josefin+Sans:bold"; $goofont2="Josefin Sans";}
elseif ($goofont2=="Josefin Sans Bold Italic") {$goofurl_2="Josefin+Sans:bolditalic"; $goofont2="Josefin Sans";}
elseif ($goofont2=="Josefin Slab") {$goofurl_2="Josefin+Slab";}
elseif ($goofont2=="Just Another Hand") {$goofurl_2="Just+Another+Hand";}
elseif ($goofont2=="Just Me Again Down Here") {$goofurl_2="Just+Me+Again+Down+Here";}
elseif ($goofont2=="Kenia") {$goofurl_2="Kenia";}
elseif ($goofont2=="Kranky") {$goofurl_2="Kranky";}
elseif ($goofont2=="Kreon") {$goofurl_2="Kreon";}
elseif ($goofont2=="Kreon Bold") {$goofurl_2="Kreon:bold"; $goofont2="Kreon";}
elseif ($goofont2=="Kristi") {$goofurl_2="Kristi";}
elseif ($goofont2=="Lato") {$goofurl_2="Lato";}
elseif ($goofont2=="Lato Italic") {$goofurl_2="Lato:regularitalic";$goofont2="Lato";}
elseif ($goofont2=="Lato Bold") {$goofurl_2="Lato:bold";$goofont2="Lato";}
elseif ($goofont2=="Lato Bold Italic") {$goofurl_2="Lato:bolditalic";$goofont2="Lato";}
elseif ($goofont2=="League Script") {$goofurl_2="League+Script";}
elseif ($goofont2=="Lekton") {$goofurl_2="Lekton";}
elseif ($goofont2=="Lekton Italic") {$goofurl_2="Lekton:italic"; $goofont2="Lekton";}
elseif ($goofont2=="Lekton Bold") {$goofurl_2="Lekton:bold"; $goofont2="Lekton";}
elseif ($goofont2=="Lobster") {$goofurl_2="Lobster";}
elseif ($goofont2=="MedievalSharp") {$goofurl_2="MedievalSharp";}
elseif ($goofont2=="Merriweather") {$goofurl_2="Merriweather";}
elseif ($goofont2=="Michroma") {$goofurl_2="Michroma";}
elseif ($goofont2=="Molengo") {$goofurl_2="Molengo";}
elseif ($goofont2=="Mountains of Christmas") {$goofurl_2="Mountains+of+Christmas";}
elseif ($goofont2=="Neucha") {$goofurl_2="Neucha";}
elseif ($goofont2=="Neuton") {$goofurl_2="Neuton";}
elseif ($goofont2=="Neuton Italic") {$goofurl_2="Neuton:italic"; $goofont2="Neuton";}
elseif ($goofont2=="Nobile") {$goofurl_2="Nobile";}
elseif ($goofont2=="Nobile Italic") {$goofurl_2="Nobile:italic"; $goofont2="Nobile";}
elseif ($goofont2=="Nobile Bold") {$goofurl_2="Nobile:bold"; $goofont2="Nobile";}
elseif ($goofont2=="Nobile Bold Italic") {$goofurl_2="Nobile:bolditalic"; $goofont2="Nobile";}
elseif ($goofont2=="Nova Round") {$goofurl_2="Nova+Round";}
elseif ($goofont2=="Nova Script") {$goofurl_2="Nova+Script";}
elseif ($goofont2=="Nova Slim") {$goofurl_2="Nova+Slim";}
elseif ($goofont2=="Nova Cut") {$goofurl_2="Nova+Cut";}
elseif ($goofont2=="Nova Oval") {$goofurl_2="Nova+Oval";}
elseif ($goofont2=="Nova Mono") {$goofurl_2="Nova+Mono";}
elseif ($goofont2=="Nova Flat") {$goofurl_2="Nova+Flat";}
elseif ($goofont2=="OFL Sorts Mill Goudy TT") {$goofurl_2="OFL+Sorts+Mill+Goudy+TT";}
elseif ($goofont2=="OFL Sorts Mill Goudy TT Italic") {$goofurl_2="OFL+Sorts+Mill+Goudy+TT:italic";$goofont2="OFL Sorts Mill Goudy TT";}
elseif ($goofont2=="Old Standard TT") {$goofurl_2="Old+Standard+TT";}
elseif ($goofont2=="Old Standard TT Italic") {$goofurl_2="Old+Standard+TT:italic";$goofont2="Old Standard TT";}
elseif ($goofont2=="Old Standard TT Bold") {$goofurl_2="Old+Standard+TT:bold";$goofont2="Old Standard TT";}
elseif ($goofont2=="Orbitron") {$goofurl_2="Orbitron";}
elseif ($goofont2=="Orbitron Italic") {$goofurl_2="Orbitron:italic";$goofont2="Orbitron";}
elseif ($goofont2=="Orbitron Bold") {$goofurl_2="Orbitron:bold";$goofont2="Orbitron";}
elseif ($goofont2=="Orbitron Bold Italic") {$goofurl_2="Orbitron:bolditalic";$goofont2="Orbitron";}
elseif ($goofont2=="Oswald") {$goofurl_2="Oswald";}
elseif ($goofont2=="Pacifico") {$goofurl_2="Pacifico";}
elseif ($goofont2=="Permanent Marker") {$goofurl_2="Permanent+Marker";}
elseif ($goofont2=="PT Sans") {$goofurl_2="PT+Sans";}
elseif ($goofont2=="PT Sans Italic") {$goofurl_2="PT+Sans:italic";}
elseif ($goofont2=="PT Sans Bold") {$goofurl_2="PT+Sans:bold";}
elseif ($goofont2=="PT Sans Bold Italic") {$goofurl_2="PT+Sans:bolditalic";}
elseif ($goofont2=="PT Sans Caption") {$goofurl_2="PT+Sans+Caption";}
elseif ($goofont2=="PT Sans Caption Bold") {$goofurl_2="PT+Sans+Caption:bold"; $goofont2="PT Sans Caption";}
elseif ($goofont2=="PT Sans Narrow") {$goofurl_2="PT+Sans+Narrow";}
elseif ($goofont2=="PT Sans Narrow Bold") {$goofurl_2="PT+Sans+Narrow:bold"; $goofont2="PT Sans Narrow";}
elseif ($goofont2=="PT Serif") {$goofurl_2="PT+Serif";}
elseif ($goofont2=="PT Serif Italic") {$goofurl_2="PT+Serif:italic";$goofont2="PT Serif";}
elseif ($goofont2=="PT Serif Bold") {$goofurl_2="PT+Serif:bold";$goofont2="PT Serif";}
elseif ($goofont2=="PT Serif Bold Italic") {$goofurl_2="PT+Serif:bolditalic";$goofont2="PT Serif";}
elseif ($goofont2=="PT Serif Caption") {$goofurl_2="PT+Serif+Caption";}
elseif ($goofont2=="PT Serif Caption Bold") {$goofurl_2="PT+Serif+Caption+Bold"; $goofont2="PT Serif Caption";}
elseif ($goofont2=="Philosopher") {$goofurl_2="Philosopher";}
elseif ($goofont2=="Puritan") {$goofurl_2="Puritan";}
elseif ($goofont2=="Puritan Italic") {$goofurl_2="Puritan:italic";$goofont2="Puritan";}
elseif ($goofont2=="Puritan Bold") {$goofurl_2="Puritan:bold";$goofont2="Puritan";}
elseif ($goofont2=="Puritan Bold Italic") {$goofurl_2="Puritan:bolditalic";$goofont2="Puritan";}
elseif ($goofont2=="Quattrocento") {$goofurl_2="Quattrocento";}
elseif ($goofont2=="Raleway") {$goofurl_2="Raleway:100";}
elseif ($goofont2=="Reenie Beanie") {$goofurl_2="Reenie+Beanie";}
elseif ($goofont2=="Rock Salt") {$goofurl_2="Rock+Salt";}
elseif ($goofont2=="Schoolbell") {$goofurl_2="Schoolbell";}
elseif ($goofont2=="Slackey") {$goofurl_2="Slackey";}
elseif ($goofont2=="Sniglet") {$goofurl_2="Sniglet:800";}
elseif ($goofont2=="Sunshiney") {$goofurl_2="Sunshiney";}
elseif ($goofont2=="Syncopate") {$goofurl_2="Syncopate";}
elseif ($goofont2=="Tangerine") {$goofurl_2="Tangerine";}
elseif ($goofont2=="Terminal Dosis Light") {$goofurl_2="Terminal Dosis Light";}
elseif ($goofont2=="Tinos") {$goofurl_2="Tinos";}
elseif ($goofont2=="Tinos Italic") {$goofurl_2="Tinos:italic";$goofont2="Tinos";}
elseif ($goofont2=="Tinos Bold") {$goofurl_2="Tinos:bold";$goofont2="Tinos";}
elseif ($goofont2=="Tinos Bold Italic") {$goofurl_2="Tinos:bolditalic";$goofont2="Tinos";}
elseif ($goofont2=="Ubuntu") {$goofurl_2="Ubuntu";}
elseif ($goofont2=="Ubuntu Italic") {$goofurl_2="Ubuntu:italic";$goofont2="Ubuntu";}
elseif ($goofont2=="Ubuntu Bold") {$goofurl_2="Ubuntu:bold";$goofont2="Ubuntu";}
elseif ($goofont2=="Ubuntu Bold Italic") {$goofurl_2="Ubuntu:bolditalic";$goofont2="Ubuntu";}
elseif ($goofont2=="UnifrakturCook") {$goofurl_2="UnifrakturCook:bold";}
elseif ($goofont2=="UnifrakturMaguntia") {$goofurl_2="UnifrakturMaguntia";}
elseif ($goofont2=="Unkempt") {$goofurl_2="Unkempt";}
elseif ($goofont2=="VT323") {$goofurl_2="VT323";}
elseif ($goofont2=="Vibur") {$goofurl_2="Vibur";}
elseif ($goofont2=="Vollkorn") {$goofurl_2="Vollkorn";}
elseif ($goofont2=="Vollkorn Italic") {$goofurl_2="Vollkorn:italic";$goofont2="Vollkorn";}
elseif ($goofont2=="Vollkorn Bold") {$goofurl_2="Vollkorn:bold";$goofont2="Vollkorn";}
elseif ($goofont2=="Vollkorn Bold Italic") {$goofurl_2="Vollkorn:bolditalic";$goofont2="Vollkorn";}
elseif ($goofont2=="Walter Turncoat") {$goofurl_2="Walter+Turncoat";}
elseif ($goofont2=="Yanone Kaffeesatz") {$goofurl_2="Yanone+Kaffeesatz";}
elseif ($goofont2=="Yanone Kaffeesatz Light") {$goofurl_2="Yanone+Kaffeesatz:light";$goofont2="Yanone Kaffeesatz";}
elseif ($goofont2=="Yanone Kaffeesatz Bold") {$goofurl_2="Yanone+Kaffeesatz:bold";$goofont2="Yanone Kaffeesatz";}
else ;

$goofurl_3 = '';
$goofont3 = '';
$goofont3 = $this->params->get( 'font-face-3' );
if ($goofont3=="Allan") {$goofurl_3="Allan:bold";}
elseif ($goofont3=="Nixie One") {$goofurl_3="Nixie+One";}
elseif ($goofont3=="Redressed") {$goofurl_3="Redressed";}
elseif ($goofont3=="Lobster Two") {$goofurl_3="Lobster+Two";$goofont3="Lobster Two";}
elseif ($goofont3=="Lobster Two Italic") {$goofurl_3="Lobster+Two:400italic";$goofont3="Lobster Two";}
elseif ($goofont3=="Lobster Two Bold") {$goofurl_3="Lobster+Two:700";$goofont3="Lobster Two";}
elseif ($goofont3=="Lobster Two Bold Italic") {$goofurl_3="Lobster+Two:700italic";$goofont3="Lobster Two";}
elseif ($goofont3=="Caudex") {$goofurl_3="Caudex";}
elseif ($goofont3=="Jura") {$goofurl_3="Jura";}
elseif ($goofont3=="Ruslan Display") {$goofurl_3="Ruslan+Display";}
elseif ($goofont3=="Brawler") {$goofurl_3="Brawler";}
elseif ($goofont3=="Nunito") {$goofurl_3="Nunito";}
elseif ($goofont3=="Wire One") {$goofurl_3="Wire+One";}
elseif ($goofont3=="Podkova") {$goofurl_3="Podkova";}
elseif ($goofont3=="Muli") {$goofurl_3="Muli";}
elseif ($goofont3=="Maven Pro") {$goofurl_3="Maven+Pro";}
elseif ($goofont3=="Tenor Sans") {$goofurl_3="Tenor+Sans";}
elseif ($goofont3=="Limelight") {$goofurl_3="Limelight";}
elseif ($goofont3=="Playfair Display") {$goofurl_3="Playfair+Display";}
elseif ($goofont3=="Artifika") {$goofurl_3="Artifika";}
elseif ($goofont3=="Lora") {$goofurl_3="Lora";}
elseif ($goofont3=="Kameron") {$goofurl_3="Kameron";}
elseif ($goofont3=="Cedarville Cursive") {$goofurl_3="Cedarville+Cursive";}
elseif ($goofont3=="Zeyada") {$goofurl_3="Zeyada";}
elseif ($goofont3=="La Belle Aurore") {$goofurl_3="La+Belle+Aurore";}
elseif ($goofont3=="Shadows into Light") {$goofurl_3="Shadows+Into+Light";}
elseif ($goofont3=="Shanti") {$goofurl_3="Shanti";}
elseif ($goofont3=="Mako") {$goofurl_3="Mako";}
elseif ($goofont3=="Metrophobic") {$goofurl_3="Metrophobic";}
elseif ($goofont3=="Ultra") {$goofurl_3="Ultra";}
elseif ($goofont3=="Play") {$goofurl_3="Play";}
elseif ($goofont3=="Didact Gothic") {$goofurl_3="Didact+Gothic";}
elseif ($goofont3=="Judson") {$goofurl_3="Judson";}
elseif ($goofont3=="Megrim") {$goofurl_3="Megrim";}
elseif ($goofont3=="Rokkitt") {$goofurl_3="Rokkitt";}
elseif ($goofont3=="Monofett") {$goofurl_3="Monofett";}
elseif ($goofont3=="Paytone One") {$goofurl_3="Paytone+One";}
elseif ($goofont3=="Holtwood One SC") {$goofurl_3="Holtwood+One+SC";}
elseif ($goofont3=="Carter One") {$goofurl_3="Carter+One";}
elseif ($goofont3=="Francois One") {$goofurl_3="Francois+One";}
elseif ($goofont3=="Bigshot One") {$goofurl_3="Bigshot+One";}
elseif ($goofont3=="Sigmar One") {$goofurl_3="Sigmar+One";}
elseif ($goofont3=="Swanky and Moo Moo") {$goofurl_3="Swanky+and+Moo+Moo";}
elseif ($goofont3=="Over the Rainbow") {$goofurl_3="Over+the+Rainbow";}
elseif ($goofont3=="Wallpoet") {$goofurl_3="Wallpoet";}
elseif ($goofont3=="Damion") {$goofurl_3="Damion";}
elseif ($goofont3=="News Cycle") {$goofurl_3="News+Cycle";}
elseif ($goofont3=="Aclonica") {$goofurl_3="Aclonica";}
elseif ($goofont3=="Special Elite") {$goofurl_3="Special+Elite";}
elseif ($goofont3=="Smythe") {$goofurl_1="Smythe";}
elseif ($goofont3=="Quattrocento Sans") {$goofurl_3="Quattrocento+Sans";}
elseif ($goofont3=="The Girl Next Door") {$goofurl_3="The+Girl+Next+Door";}
elseif ($goofont3=="Sue Ellen Francisco") {$goofurl_3="Sue+Ellen+Francisco";}
elseif ($goofont3=="Dawning of a New Day") {$goofurl_3="Dawning+of+a+New+Day";}
elseif ($goofont3=="Waiting for the Sunrise") {$goofurl_3="Waiting+for+the+Sunrise";}
elseif ($goofont3=="Annie Use Your Telescope") {$goofurl_3="Annie+Use+Your+Telescope";}
elseif ($goofont3=="Maiden Orange") {$goofurl_3="Maiden+Orange";}
elseif ($goofont3=="Luckiest Guy") {$goofurl_3="Luckiest+Guy";}
elseif ($goofont3=="Bangers") {$goofurl_3="Bangers";}
elseif ($goofont3=="Miltonian") {$goofurl_3="Miltonian";}
elseif ($goofont3=="Miltonian Tattoo") {$goofurl_3="Miltonian+Tattoo";}
elseif ($goofont3=="Allerta") {$goofurl_3="Allerta";}
elseif ($goofont3=="Allerta Stencil") {$goofurl_3="Allerta+Stencil";}
elseif ($goofont3=="Amaranth") {$goofurl_3="Amaranth";}
elseif ($goofont3=="Anonymous Pro") {$goofurl_3="Anonymous+Pro";}
elseif ($goofont3=="Anonymous Pro Italic") {$goofurl_3="Anonymous+Pro:italic";$goofont3="Anonymous Pro";}
elseif ($goofont3=="Anonymous Pro Bold") {$goofurl_3="Anonymous+Pro:bold";$goofont3="Anonymous Pro";}
elseif ($goofont3=="Anonymous Pro Bold Italic") {$goofurl_3="Anonymous+Pro:bolditalic";$goofont3="Anonymous Pro";}
elseif ($goofont3=="Anton") {$goofurl_3="Anton";}
elseif ($goofont3=="Architects Daughter") {$goofurl_3="Architects+Daughter";}
elseif ($goofont3=="Arimo") {$goofurl_3="Arimo";}
elseif ($goofont3=="Arimo Italic") {$goofurl_3="Arimo:italic";$goofont3="Arimo";}
elseif ($goofont3=="Arimo Bold") {$goofurl_3="Arimo:bold";$goofont3="Arimo";}
elseif ($goofont3=="Arimo Bold Italic") {$goofurl_3="Arimo:bolditalic";$goofont3="Arimo";}
elseif ($goofont3=="Arvo") {$goofurl_3="Arvo"; $goofont3="Arvo";}
elseif ($goofont3=="Arvo Italic") {$goofurl_3="Arvo:italic"; $goofont3="Arvo";}
elseif ($goofont3=="Arvo Bold") {$goofurl_3="Arvo:bold"; $goofont3="Arvo";}
elseif ($goofont3=="Arvo Bold Italic") {$goofurl_3="Arvo:bolditalic"; $goofont3="Arvo";}
elseif ($goofont3=="Astloch") {$goofurl_3="Astloch";}
elseif ($goofont3=="Astloch Bold") {$goofurl_3="Astloch:bold"; $goofont3="Astloch";}
elseif ($goofont3=="Bentham") {$goofurl_3="Bentham";}
elseif ($goofont3=="Bevan") {$goofurl_3="Bevan";}
elseif ($goofont3=="Buda") {$goofurl_3="Buda:light";}
elseif ($goofont3=="Cabin") {$goofurl_3="Cabin:regular";}
elseif ($goofont3=="Cabin Italic") {$goofurl_3="Cabin:regularitalic";$goofont3="Cabin";}
elseif ($goofont3=="Cabin Bold") {$goofurl_3="Cabin:bold";$goofont3="Cabin";}
elseif ($goofont3=="Cabin Bold Italic") {$goofurl_3="Cabin:bolditalic";$goofont3="Cabin";}
elseif ($goofont3=="Cabin Sketch") {$goofurl_3="Cabin+Sketch:bold";}
elseif ($goofont3=="Calligraffitti") {$goofurl_3="Calligraffitti";}
elseif ($goofont3=="Candal") {$goofurl_3="Candal";}
elseif ($goofont3=="Cantarell") {$goofurl_3="Cantarell";}
elseif ($goofont3=="Cantarell Italic") {$goofurl_3="Cantarell:italic";$goofont3="Cantarell";}
elseif ($goofont3=="Cantarell Bold") {$goofurl_3="Cantarell:bold";$goofont3="Cantarell";}
elseif ($goofont3=="Cantarell Bold Italic") {$goofurl_3="Cantarell:bolditalic";$goofont3="Cantarell";}
elseif ($goofont3=="Cardo") {$goofurl_3="Cardo";}
elseif ($goofont3=="Cherry Cream Soda") {$goofurl_3="Cherry+Cream+Soda";}
elseif ($goofont3=="Chewy") {$goofurl_3="Chewy";}
elseif ($goofont3=="Coda") {$goofurl_3="Coda:800";}
elseif ($goofont3=="Coda Caption") {$goofurl_3="Coda+Caption:800";}
elseif ($goofont3=="Coming Soon") {$goofurl_3="Coming+Soon";}
elseif ($goofont3=="Copse") {$goofurl_3="Copse";}
elseif ($goofont3=="Corben") {$goofurl_3="Corben:bold";}
elseif ($goofont3=="Cousine") {$goofurl_3="Cousine";}
elseif ($goofont3=="Cousine Italic") {$goofurl_3="Cousine:italic";$goofont3="Cousine";}
elseif ($goofont3=="Cousine Bold") {$goofurl_3="Cousine:bold";$goofont3="Cousine";}
elseif ($goofont3=="Cousine Bold Italic") {$goofurl_3="Cousine:bolditalic";$goofont3="Cousine";}
elseif ($goofont3=="Covered By Your Grace") {$goofurl_3="Covered+By+Your+Grace";}
elseif ($goofont3=="Crafty Girls") {$goofurl_3="Crafty+Girls";}
elseif ($goofont3=="Crimson Text") {$goofurl_3="Crimson+Text";}
elseif ($goofont3=="Crimson Text Italic") {$goofurl_3="Crimson+Text:italic";$goofont3="Crimson Text";}
elseif ($goofont3=="Crimson Text Bold") {$goofurl_3="Crimson+Text:bold";$goofont3="Crimson Text";}
elseif ($goofont3=="Crimson Text Bold Italic") {$goofurl_3="Crimson+Text:bolditalic";$goofont3="Crimson Text";}
elseif ($goofont3=="Crushed") {$goofurl_3="Crushed";}
elseif ($goofont3=="Cuprum") {$goofurl_3="Cuprum";}
elseif ($goofont3=="Droid Sans") {$goofurl_3="Droid+Sans";}
elseif ($goofont3=="Droid Sans Bold") {$goofurl_3="Droid+Sans:bold"; $goofont3="Droid Sans";}
elseif ($goofont3=="Droid Sans Mono") {$goofurl_3="Droid+Sans+Mono";}
elseif ($goofont3=="Droid Serif") {$goofurl_3="Droid+Serif";}
elseif ($goofont3=="Droid Serif Italic") {$goofurl_3="Droid+Serif:italic";$goofont3="Droid Serif";}
elseif ($goofont3=="Droid Serif Bold") {$goofurl_3="Droid+Serif:bold";$goofont3="Droid Serif";}
elseif ($goofont3=="Droid Serif Bold Italic") {$goofurl_3="Droid+Serif:bolditalic";$goofont3="Droid Serif";}
elseif ($goofont3=="EB Garamond") {$goofurl_3="EB+Garamond";}
elseif ($goofont3=="Expletus Sans") {$goofurl_3="Expletus+Sans";}
elseif ($goofont3=="Expletus Sans Bold") {$goofurl_3="Expletus+Sans:bold";$goofont3="Expletus Sans";}
elseif ($goofont3=="Fontdiner Swanky") {$goofurl_3="Fontdiner+Swanky";}
elseif ($goofont3=="Geo") {$goofurl_3="Geo";}
elseif ($goofont3=="Goudy Bookletter 1911") {$goofurl_3="Goudy+Bookletter+1911";}
elseif ($goofont3=="Gruppo") {$goofurl_3="Gruppo";}
elseif ($goofont3=="Homemade Apple") {$goofurl_3="Homemade+Apple";}
elseif ($goofont3=="IM Fell Double Pica") {$goofurl_3="IM+Fell+Double+Pica";$goofont3="IM Fell Double Pica";}
elseif ($goofont3=="IM Fell Double Pica Italic") {$goofurl_3="IM+Fell+Double+Pica:italic";$goofont3="IM Fell Double Pica";}
elseif ($goofont3=="IM Fell Double Pica SC") {$goofurl_3="IM+Fell+Double+Pica+SC";}
elseif ($goofont3=="IM Fell DW Pica") {$goofurl_3="IM+Fell+DW+Pica";$goofont3="IM Fell DW Pica";}
elseif ($goofont3=="IM Fell DW Pica Italic") {$goofurl_3="IM+Fell+DW+Pica:italic";$goofont3="IM Fell DW Pica";}
elseif ($goofont3=="IM Fell DW Pica SC") {$goofurl_3="IM+Fell+DW+Pica+SC";}
elseif ($goofont3=="IM Fell English") {$goofurl_3="IM+Fell+English";$goofont3="IM Fell English";}
elseif ($goofont3=="IM Fell English Italic") {$goofurl_3="IM+Fell+English:italic";$goofont3="IM Fell English";}
elseif ($goofont3=="IM Fell English SC") {$goofurl_3="IM+Fell+English+SC";}
elseif ($goofont3=="IM Fell French Canon") {$goofurl_3="IM+Fell+French+Canon";$goofont3="IM Fell French Canon";}
elseif ($goofont3=="IM Fell French Canon Italic") {$goofurl_3="IM+Fell+French+Canon:italic";$goofont3="IM Fell French Canon";}
elseif ($goofont3=="IM Fell French Canon SC") {$goofurl_3="IM+Fell+French+Canon+SC";}
elseif ($goofont3=="IM Fell Great Primer") {$goofurl_3="IM+Fell+Great+Primer";$goofont3="IM Fell Great Primer";}
elseif ($goofont3=="IM Fell Great Primer Italic") {$goofurl_3="IM+Fell+Great+Primer:italic";$goofont3="IM Fell Great Primer";}
elseif ($goofont3=="IM Fell Great Primer SC") {$goofurl_3="IM+Fell+Great+Primera+SC";}
elseif ($goofont3=="Inconsolata") {$goofurl_3="Inconsolata";}
elseif ($goofont3=="Indie Flower") {$goofurl_3="Indie+Flower";}
elseif ($goofont3=="Irish Grover") {$goofurl_3="Irish+Grover";}
elseif ($goofont3=="Josefin Sans") {$goofurl_3="Josefin+Sans";}
elseif ($goofont3=="Josefin Sans Italic") {$goofurl_3="Josefin+Sans:regularitalic"; $goofont3="Josefin Sans";}
elseif ($goofont3=="Josefin Sans Bold") {$goofurl_3="Josefin+Sans:bold"; $goofont3="Josefin Sans";}
elseif ($goofont3=="Josefin Sans Bold Italic") {$goofurl_3="Josefin+Sans:bolditalic"; $goofont3="Josefin Sans";}
elseif ($goofont3=="Josefin Slab") {$goofurl_3="Josefin+Slab";}
elseif ($goofont3=="Just Another Hand") {$goofurl_3="Just+Another+Hand";}
elseif ($goofont3=="Just Me Again Down Here") {$goofurl_3="Just+Me+Again+Down+Here";}
elseif ($goofont3=="Kenia") {$goofurl_3="Kenia";}
elseif ($goofont3=="Kranky") {$goofurl_3="Kranky";}
elseif ($goofont3=="Kreon") {$goofurl_3="Kreon";}
elseif ($goofont3=="Kreon Bold") {$goofurl_3="Kreon:bold"; $goofont3="Kreon";}
elseif ($goofont3=="Kristi") {$goofurl_3="Kristi";}
elseif ($goofont3=="Lato") {$goofurl_3="Lato";}
elseif ($goofont3=="Lato Italic") {$goofurl_3="Lato:regularitalic";$goofont3="Lato";}
elseif ($goofont3=="Lato Bold") {$goofurl_3="Lato:bold";$goofont3="Lato";}
elseif ($goofont3=="Lato Bold Italic") {$goofurl_3="Lato:bolditalic";$goofont3="Lato";}
elseif ($goofont3=="League Script") {$goofurl_3="League+Script";}
elseif ($goofont3=="Lekton") {$goofurl_3="Lekton";}
elseif ($goofont3=="Lekton Italic") {$goofurl_3="Lekton:italic"; $goofont3="Lekton";}
elseif ($goofont3=="Lekton Bold") {$goofurl_3="Lekton:bold"; $goofont3="Lekton";}
elseif ($goofont3=="Lobster") {$goofurl_3="Lobster";}
elseif ($goofont3=="MedievalSharp") {$goofurl_3="MedievalSharp";}
elseif ($goofont3=="Merriweather") {$goofurl_3="Merriweather";}
elseif ($goofont3=="Michroma") {$goofurl_3="Michroma";}
elseif ($goofont3=="Molengo") {$goofurl_3="Molengo";}
elseif ($goofont3=="Mountains of Christmas") {$goofurl_3="Mountains+of+Christmas";}
elseif ($goofont3=="Neucha") {$goofurl_3="Neucha";}
elseif ($goofont3=="Neuton") {$goofurl_3="Neuton";}
elseif ($goofont3=="Neuton Italic") {$goofurl_3="Neuton:italic"; $goofont3="Neuton";}
elseif ($goofont3=="Nobile") {$goofurl_3="Nobile";}
elseif ($goofont3=="Nobile Italic") {$goofurl_3="Nobile:italic"; $goofont3="Nobile";}
elseif ($goofont3=="Nobile Bold") {$goofurl_3="Nobile:bold"; $goofont3="Nobile";}
elseif ($goofont3=="Nobile Bold Italic") {$goofurl_3="Nobile:bolditalic"; $goofont3="Nobile";}
elseif ($goofont3=="Nova Round") {$goofurl_3="Nova+Round";}
elseif ($goofont3=="Nova Script") {$goofurl_3="Nova+Script";}
elseif ($goofont3=="Nova Slim") {$goofurl_3="Nova+Slim";}
elseif ($goofont3=="Nova Cut") {$goofurl_3="Nova+Cut";}
elseif ($goofont3=="Nova Oval") {$goofurl_3="Nova+Oval";}
elseif ($goofont3=="Nova Mono") {$goofurl_3="Nova+Mono";}
elseif ($goofont3=="Nova Flat") {$goofurl_3="Nova+Flat";}
elseif ($goofont3=="OFL Sorts Mill Goudy TT") {$goofurl_3="OFL+Sorts+Mill+Goudy+TT";}
elseif ($goofont3=="OFL Sorts Mill Goudy TT Italic") {$goofurl_3="OFL+Sorts+Mill+Goudy+TT:italic";$goofont3="OFL Sorts Mill Goudy TT";}
elseif ($goofont3=="Old Standard TT") {$goofurl_3="Old+Standard+TT";}
elseif ($goofont3=="Old Standard TT Italic") {$goofurl_3="Old+Standard+TT:italic";$goofont3="Old Standard TT";}
elseif ($goofont3=="Old Standard TT Bold") {$goofurl_3="Old+Standard+TT:bold";$goofont3="Old Standard TT";}
elseif ($goofont3=="Orbitron") {$goofurl_3="Orbitron";}
elseif ($goofont3=="Orbitron Italic") {$goofurl_3="Orbitron:italic";$goofont3="Orbitron";}
elseif ($goofont3=="Orbitron Bold") {$goofurl_3="Orbitron:bold";$goofont3="Orbitron";}
elseif ($goofont3=="Orbitron Bold Italic") {$goofurl_3="Orbitron:bolditalic";$goofont3="Orbitron";}
elseif ($goofont3=="Oswald") {$goofurl_3="Oswald";}
elseif ($goofont3=="Pacifico") {$goofurl_3="Pacifico";}
elseif ($goofont3=="Permanent Marker") {$goofurl_3="Permanent+Marker";}
elseif ($goofont3=="PT Sans") {$goofurl_3="PT+Sans";}
elseif ($goofont3=="PT Sans Italic") {$goofurl_3="PT+Sans:italic";}
elseif ($goofont3=="PT Sans Bold") {$goofurl_3="PT+Sans:bold";}
elseif ($goofont3=="PT Sans Bold Italic") {$goofurl_3="PT+Sans:bolditalic";}
elseif ($goofont3=="PT Sans Caption") {$goofurl_3="PT+Sans+Caption";}
elseif ($goofont3=="PT Sans Caption Bold") {$goofurl_3="PT+Sans+Caption:bold"; $goofont3="PT Sans Caption";}
elseif ($goofont3=="PT Sans Narrow") {$goofurl_3="PT+Sans+Narrow";}
elseif ($goofont3=="PT Sans Narrow Bold") {$goofurl_3="PT+Sans+Narrow:bold"; $goofont3="PT Sans Narrow";}
elseif ($goofont3=="PT Serif") {$goofurl_3="PT+Serif";}
elseif ($goofont3=="PT Serif Italic") {$goofurl_3="PT+Serif:italic";$goofont3="PT Serif";}
elseif ($goofont3=="PT Serif Bold") {$goofurl_3="PT+Serif:bold";$goofont3="PT Serif";}
elseif ($goofont3=="PT Serif Bold Italic") {$goofurl_3="PT+Serif:bolditalic";$goofont3="PT Serif";}
elseif ($goofont3=="PT Serif Caption") {$goofurl_3="PT+Serif+Caption";}
elseif ($goofont3=="PT Serif Caption Bold") {$goofurl_3="PT+Serif+Caption+Bold"; $goofont3="PT Serif Caption";}
elseif ($goofont3=="Philosopher") {$goofurl_3="Philosopher";}
elseif ($goofont3=="Puritan") {$goofurl_3="Puritan";}
elseif ($goofont3=="Puritan Italic") {$goofurl_3="Puritan:italic";$goofont3="Puritan";}
elseif ($goofont3=="Puritan Bold") {$goofurl_3="Puritan:bold";$goofont3="Puritan";}
elseif ($goofont3=="Puritan Bold Italic") {$goofurl_3="Puritan:bolditalic";$goofont3="Puritan";}
elseif ($goofont3=="Quattrocento") {$goofurl_3="Quattrocento";}
elseif ($goofont3=="Raleway") {$goofurl_3="Raleway:100";}
elseif ($goofont3=="Reenie Beanie") {$goofurl_3="Reenie+Beanie";}
elseif ($goofont3=="Rock Salt") {$goofurl_3="Rock+Salt";}
elseif ($goofont3=="Schoolbell") {$goofurl_3="Schoolbell";}
elseif ($goofont3=="Slackey") {$goofurl_3="Slackey";}
elseif ($goofont3=="Sniglet") {$goofurl_3="Sniglet:800";}
elseif ($goofont3=="Sunshiney") {$goofurl_3="Sunshiney";}
elseif ($goofont3=="Syncopate") {$goofurl_3="Syncopate";}
elseif ($goofont3=="Tangerine") {$goofurl_3="Tangerine";}
elseif ($goofont3=="Terminal Dosis Light") {$goofurl_3="Terminal Dosis Light";}
elseif ($goofont3=="Tinos") {$goofurl_3="Tinos";}
elseif ($goofont3=="Tinos Italic") {$goofurl_3="Tinos:italic";$goofont3="Tinos";}
elseif ($goofont3=="Tinos Bold") {$goofurl_3="Tinos:bold";$goofont3="Tinos";}
elseif ($goofont3=="Tinos Bold Italic") {$goofurl_3="Tinos:bolditalic";$goofont3="Tinos";}
elseif ($goofont3=="Ubuntu") {$goofurl_3="Ubuntu";}
elseif ($goofont3=="Ubuntu Italic") {$goofurl_3="Ubuntu:italic";$goofont3="Ubuntu";}
elseif ($goofont3=="Ubuntu Bold") {$goofurl_3="Ubuntu:bold";$goofont3="Ubuntu";}
elseif ($goofont3=="Ubuntu Bold Italic") {$goofurl_3="Ubuntu:bolditalic";$goofont3="Ubuntu";}
elseif ($goofont3=="UnifrakturCook") {$goofurl_3="UnifrakturCook:bold";}
elseif ($goofont3=="UnifrakturMaguntia") {$goofurl_3="UnifrakturMaguntia";}
elseif ($goofont3=="Unkempt") {$goofurl_3="Unkempt";}
elseif ($goofont3=="VT323") {$goofurl_3="VT323";}
elseif ($goofont3=="Vibur") {$goofurl_3="Vibur";}
elseif ($goofont3=="Vollkorn") {$goofurl_3="Vollkorn";}
elseif ($goofont3=="Vollkorn Italic") {$goofurl_3="Vollkorn:italic";$goofont3="Vollkorn";}
elseif ($goofont3=="Vollkorn Bold") {$goofurl_3="Vollkorn:bold";$goofont3="Vollkorn";}
elseif ($goofont3=="Vollkorn Bold Italic") {$goofurl_3="Vollkorn:bolditalic";$goofont3="Vollkorn";}
elseif ($goofont3=="Walter Turncoat") {$goofurl_3="Walter+Turncoat";}
elseif ($goofont3=="Yanone Kaffeesatz") {$goofurl_3="Yanone+Kaffeesatz";}
elseif ($goofont3=="Yanone Kaffeesatz Light") {$goofurl_3="Yanone+Kaffeesatz:light";$goofont3="Yanone Kaffeesatz";}
elseif ($goofont3=="Yanone Kaffeesatz Bold") {$goofurl_3="Yanone+Kaffeesatz:bold";$goofont3="Yanone Kaffeesatz";}
else ;

$goofurl_4 = '';
$goofont4 = '';
$goofont4 = $this->params->get( 'font-face-4' );

if ($goofont4=="Allan") {$goofurl_4="Allan:bold";}
elseif ($goofont4=="Nixie One") {$goofurl_4="Nixie+One";}
elseif ($goofont4=="Redressed") {$goofurl_4="Redressed";}
elseif ($goofont4=="Lobster Two") {$goofurl_4="Lobster+Two";$goofont4="Lobster Two";}
elseif ($goofont4=="Lobster Two Italic") {$goofurl_4="Lobster+Two:400italic";$goofont4="Lobster Two";}
elseif ($goofont4=="Lobster Two Bold") {$goofurl_4="Lobster+Two:700";$goofont4="Lobster Two";}
elseif ($goofont4=="Lobster Two Bold Italic") {$goofurl_4="Lobster+Two:700italic";$goofont4="Lobster Two";}
elseif ($goofont4=="Caudex") {$goofurl_4="Caudex";}
elseif ($goofont4=="Jura") {$goofurl_4="Jura";}
elseif ($goofont4=="Ruslan Display") {$goofurl_4="Ruslan+Display";}
elseif ($goofont4=="Brawler") {$goofurl_4="Brawler";}
elseif ($goofont4=="Nunito") {$goofurl_4="Nunito";}
elseif ($goofont4=="Wire One") {$goofurl_4="Wire+One";}
elseif ($goofont4=="Podkova") {$goofurl_4="Podkova";}
elseif ($goofont4=="Muli") {$goofurl_4="Muli";}
elseif ($goofont4=="Maven Pro") {$goofurl_4="Maven+Pro";}
elseif ($goofont4=="Tenor Sans") {$goofurl_4="Tenor+Sans";}
elseif ($goofont4=="Limelight") {$goofurl_4="Limelight";}
elseif ($goofont4=="Playfair Display") {$goofurl_4="Playfair+Display";}
elseif ($goofont4=="Artifika") {$goofurl_4="Artifika";}
elseif ($goofont4=="Lora") {$goofurl_4="Lora";}
elseif ($goofont4=="Kameron") {$goofurl_4="Kameron";}
elseif ($goofont4=="Cedarville Cursive") {$goofurl_4="Cedarville+Cursive";}
elseif ($goofont4=="Zeyada") {$goofurl_4="Zeyada";}
elseif ($goofont4=="La Belle Aurore") {$goofurl_4="La+Belle+Aurore";}
elseif ($goofont4=="Shadows into Light") {$goofurl_4="Shadows+Into+Light";}
elseif ($goofont4=="Shanti") {$goofurl_4="Shanti";}
elseif ($goofont4=="Mako") {$goofurl_4="Mako";}
elseif ($goofont4=="Metrophobic") {$goofurl_4="Metrophobic";}
elseif ($goofont4=="Ultra") {$goofurl_4="Ultra";}
elseif ($goofont4=="Play") {$goofurl_4="Play";}
elseif ($goofont4=="Didact Gothic") {$goofurl_4="Didact+Gothic";}
elseif ($goofont4=="Judson") {$goofurl_4="Judson";}
elseif ($goofont4=="Megrim") {$goofurl_4="Megrim";}
elseif ($goofont4=="Rokkitt") {$goofurl_4="Rokkitt";}
elseif ($goofont4=="Monofett") {$goofurl_4="Monofett";}
elseif ($goofont4=="Paytone One") {$goofurl_4="Paytone+One";}
elseif ($goofont4=="Holtwood One SC") {$goofurl_4="Holtwood+One+SC";}
elseif ($goofont4=="Carter One") {$goofurl_4="Carter+One";}
elseif ($goofont4=="Francois One") {$goofurl_4="Francois+One";}
elseif ($goofont4=="Bigshot One") {$goofurl_4="Bigshot+One";}
elseif ($goofont4=="Sigmar One") {$goofurl_4="Sigmar+One";}
elseif ($goofont4=="Swanky and Moo Moo") {$goofurl_4="Swanky+and+Moo+Moo";}
elseif ($goofont4=="Over the Rainbow") {$goofurl_4="Over+the+Rainbow";}
elseif ($goofont4=="Wallpoet") {$goofurl_4="Wallpoet";}
elseif ($goofont4=="Damion") {$goofurl_4="Damion";}
elseif ($goofont4=="News Cycle") {$goofurl_4="News+Cycle";}
elseif ($goofont4=="Aclonica") {$goofurl_4="Aclonica";}
elseif ($goofont4=="Special Elite") {$goofurl_4="Special+Elite";}
elseif ($goofont4=="Smythe") {$goofurl_4="Smythe";}
elseif ($goofont4=="Quattrocento Sans") {$goofurl_4="Quattrocento+Sans";}
elseif ($goofont4=="The Girl Next Door") {$goofurl_4="The+Girl+Next+Door";}
elseif ($goofont4=="Sue Ellen Francisco") {$goofurl_4="Sue+Ellen+Francisco";}
elseif ($goofont4=="Dawning of a New Day") {$goofurl_4="Dawning+of+a+New+Day";}
elseif ($goofont4=="Waiting for the Sunrise") {$goofurl_4="Waiting+for+the+Sunrise";}
elseif ($goofont4=="Annie Use Your Telescope") {$goofurl_4="Annie+Use+Your+Telescope";}
elseif ($goofont4=="Maiden Orange") {$goofurl_4="Maiden+Orange";}
elseif ($goofont4=="Luckiest Guy") {$goofurl_4="Luckiest+Guy";}
elseif ($goofont4=="Bangers") {$goofurl_4="Bangers";}
elseif ($goofont4=="Miltonian") {$goofurl_4="Miltonian";}
elseif ($goofont4=="Miltonian Tattoo") {$goofurl_4="Miltonian+Tattoo";}
elseif ($goofont4=="Allerta") {$goofurl_4="Allerta";}
elseif ($goofont4=="Allerta Stencil") {$goofurl_4="Allerta+Stencil";}
elseif ($goofont4=="Amaranth") {$goofurl_4="Amaranth";}
elseif ($goofont4=="Anonymous Pro") {$goofurl_4="Anonymous+Pro";}
elseif ($goofont4=="Anonymous Pro Italic") {$goofurl_4="Anonymous+Pro:italic";$goofont4="Anonymous Pro";}
elseif ($goofont4=="Anonymous Pro Bold") {$goofurl_4="Anonymous+Pro:bold";$goofont4="Anonymous Pro";}
elseif ($goofont4=="Anonymous Pro Bold Italic") {$goofurl_4="Anonymous+Pro:bolditalic";$goofont4="Anonymous Pro";}
elseif ($goofont4=="Anton") {$goofurl_4="Anton";}
elseif ($goofont4=="Architects Daughter") {$goofurl_4="Architects+Daughter";}
elseif ($goofont4=="Arimo") {$goofurl_4="Arimo";}
elseif ($goofont4=="Arimo Italic") {$goofurl_4="Arimo:italic";$goofont4="Arimo";}
elseif ($goofont4=="Arimo Bold") {$goofurl_4="Arimo:bold";$goofont4="Arimo";}
elseif ($goofont4=="Arimo Bold Italic") {$goofurl_4="Arimo:bolditalic";$goofont4="Arimo";}
elseif ($goofont4=="Arvo") {$goofurl_4="Arvo"; $goofont4="Arvo";}
elseif ($goofont4=="Arvo Italic") {$goofurl_4="Arvo:italic"; $goofont4="Arvo";}
elseif ($goofont4=="Arvo Bold") {$goofurl_4="Arvo:bold"; $goofont4="Arvo";}
elseif ($goofont4=="Arvo Bold Italic") {$goofurl_4="Arvo:bolditalic"; $goofont4="Arvo";}
elseif ($goofont4=="Astloch") {$goofurl_4="Astloch";}
elseif ($goofont4=="Astloch Bold") {$goofurl_4="Astloch:bold"; $goofont4="Astloch";}
elseif ($goofont4=="Bentham") {$goofurl_4="Bentham";}
elseif ($goofont4=="Bevan") {$goofurl_4="Bevan";}
elseif ($goofont4=="Buda") {$goofurl_4="Buda:light";}
elseif ($goofont4=="Cabin") {$goofurl_4="Cabin:regular";}
elseif ($goofont4=="Cabin Italic") {$goofurl_4="Cabin:regularitalic";$goofont4="Cabin";}
elseif ($goofont4=="Cabin Bold") {$goofurl_4="Cabin:bold";$goofont4="Cabin";}
elseif ($goofont4=="Cabin Bold Italic") {$goofurl_4="Cabin:bolditalic";$goofont4="Cabin";}
elseif ($goofont4=="Cabin Sketch") {$goofurl_4="Cabin+Sketch:bold";}
elseif ($goofont4=="Calligraffitti") {$goofurl_4="Calligraffitti";}
elseif ($goofont4=="Candal") {$goofurl_4="Candal";}
elseif ($goofont4=="Cantarell") {$goofurl_4="Cantarell";}
elseif ($goofont4=="Cantarell Italic") {$goofurl_4="Cantarell:italic";$goofont4="Cantarell";}
elseif ($goofont4=="Cantarell Bold") {$goofurl_4="Cantarell:bold";$goofont4="Cantarell";}
elseif ($goofont4=="Cantarell Bold Italic") {$goofurl_4="Cantarell:bolditalic";$goofont4="Cantarell";}
elseif ($goofont4=="Cardo") {$goofurl_4="Cardo";}
elseif ($goofont4=="Cherry Cream Soda") {$goofurl_4="Cherry+Cream+Soda";}
elseif ($goofont4=="Chewy") {$goofurl_4="Chewy";}
elseif ($goofont4=="Coda") {$goofurl_4="Coda:800";}
elseif ($goofont4=="Coda Caption") {$goofurl_4="Coda+Caption:800";}
elseif ($goofont4=="Coming Soon") {$goofurl_4="Coming+Soon";}
elseif ($goofont4=="Copse") {$goofurl_4="Copse";}
elseif ($goofont4=="Corben") {$goofurl_4="Corben:bold";}
elseif ($goofont4=="Cousine") {$goofurl_4="Cousine";}
elseif ($goofont4=="Cousine Italic") {$goofurl_4="Cousine:italic";$goofont4="Cousine";}
elseif ($goofont4=="Cousine Bold") {$goofurl_4="Cousine:bold";$goofont4="Cousine";}
elseif ($goofont4=="Cousine Bold Italic") {$goofurl_4="Cousine:bolditalic";$goofont4="Cousine";}
elseif ($goofont4=="Covered By Your Grace") {$goofurl_4="Covered+By+Your+Grace";}
elseif ($goofont4=="Crafty Girls") {$goofurl_4="Crafty+Girls";}
elseif ($goofont4=="Crimson Text") {$goofurl_4="Crimson+Text";}
elseif ($goofont4=="Crimson Text Italic") {$goofurl_4="Crimson+Text:italic";$goofont4="Crimson Text";}
elseif ($goofont4=="Crimson Text Bold") {$goofurl_4="Crimson+Text:bold";$goofont4="Crimson Text";}
elseif ($goofont4=="Crimson Text Bold Italic") {$goofurl_4="Crimson+Text:bolditalic";$goofont4="Crimson Text";}
elseif ($goofont4=="Crushed") {$goofurl_4="Crushed";}
elseif ($goofont4=="Cuprum") {$goofurl_4="Cuprum";}
elseif ($goofont4=="Droid Sans") {$goofurl_4="Droid+Sans";}
elseif ($goofont4=="Droid Sans Bold") {$goofurl_4="Droid+Sans:bold"; $goofont4="Droid Sans";}
elseif ($goofont4=="Droid Sans Mono") {$goofurl_4="Droid+Sans+Mono";}
elseif ($goofont4=="Droid Serif") {$goofurl_4="Droid+Serif";}
elseif ($goofont4=="Droid Serif Italic") {$goofurl_4="Droid+Serif:italic";$goofont4="Droid Serif";}
elseif ($goofont4=="Droid Serif Bold") {$goofurl_4="Droid+Serif:bold";$goofont4="Droid Serif";}
elseif ($goofont4=="Droid Serif Bold Italic") {$goofurl_4="Droid+Serif:bolditalic";$goofont4="Droid Serif";}
elseif ($goofont4=="EB Garamond") {$goofurl_4="EB+Garamond";}
elseif ($goofont4=="Expletus Sans") {$goofurl_4="Expletus+Sans";}
elseif ($goofont4=="Expletus Sans Bold") {$goofurl_4="Expletus+Sans:bold";$goofont4="Expletus Sans";}
elseif ($goofont4=="Fontdiner Swanky") {$goofurl_4="Fontdiner+Swanky";}
elseif ($goofont4=="Geo") {$goofurl_4="Geo";}
elseif ($goofont4=="Goudy Bookletter 1911") {$goofurl_4="Goudy+Bookletter+1911";}
elseif ($goofont4=="Gruppo") {$goofurl_4="Gruppo";}
elseif ($goofont4=="Homemade Apple") {$goofurl_4="Homemade+Apple";}
elseif ($goofont4=="IM Fell Double Pica") {$goofurl_4="IM+Fell+Double+Pica";$goofont4="IM Fell Double Pica";}
elseif ($goofont4=="IM Fell Double Pica Italic") {$goofurl_4="IM+Fell+Double+Pica:italic";$goofont4="IM Fell Double Pica";}
elseif ($goofont4=="IM Fell Double Pica SC") {$goofurl_4="IM+Fell+Double+Pica+SC";}
elseif ($goofont4=="IM Fell DW Pica") {$goofurl_4="IM+Fell+DW+Pica";$goofont4="IM Fell DW Pica";}
elseif ($goofont4=="IM Fell DW Pica Italic") {$goofurl_4="IM+Fell+DW+Pica:italic";$goofont4="IM Fell DW Pica";}
elseif ($goofont4=="IM Fell DW Pica SC") {$goofurl_4="IM+Fell+DW+Pica+SC";}
elseif ($goofont4=="IM Fell English") {$goofurl_4="IM+Fell+English";$goofont4="IM Fell English";}
elseif ($goofont4=="IM Fell English Italic") {$goofurl_4="IM+Fell+English:italic";$goofont4="IM Fell English";}
elseif ($goofont4=="IM Fell English SC") {$goofurl_4="IM+Fell+English+SC";}
elseif ($goofont4=="IM Fell French Canon") {$goofurl_4="IM+Fell+French+Canon";$goofont4="IM Fell French Canon";}
elseif ($goofont4=="IM Fell French Canon Italic") {$goofurl_4="IM+Fell+French+Canon:italic";$goofont4="IM Fell French Canon";}
elseif ($goofont4=="IM Fell French Canon SC") {$goofurl_4="IM+Fell+French+Canon+SC";}
elseif ($goofont4=="IM Fell Great Primer") {$goofurl_4="IM+Fell+Great+Primer";$goofont4="IM Fell Great Primer";}
elseif ($goofont4=="IM Fell Great Primer Italic") {$goofurl_4="IM+Fell+Great+Primer:italic";$goofont4="IM Fell Great Primer";}
elseif ($goofont4=="IM Fell Great Primer SC") {$goofurl_4="IM+Fell+Great+Primera+SC";}
elseif ($goofont4=="Inconsolata") {$goofurl_4="Inconsolata";}
elseif ($goofont4=="Indie Flower") {$goofurl_4="Indie+Flower";}
elseif ($goofont4=="Irish Grover") {$goofurl_4="Irish+Grover";}
elseif ($goofont4=="Josefin Sans") {$goofurl_4="Josefin+Sans";}
elseif ($goofont4=="Josefin Sans Italic") {$goofurl_4="Josefin+Sans:regularitalic"; $goofont4="Josefin Sans";}
elseif ($goofont4=="Josefin Sans Bold") {$goofurl_4="Josefin+Sans:bold"; $goofont4="Josefin Sans";}
elseif ($goofont4=="Josefin Sans Bold Italic") {$goofurl_4="Josefin+Sans:bolditalic"; $goofont4="Josefin Sans";}
elseif ($goofont4=="Josefin Slab") {$goofurl_4="Josefin+Slab";}
elseif ($goofont4=="Just Another Hand") {$goofurl_4="Just+Another+Hand";}
elseif ($goofont4=="Just Me Again Down Here") {$goofurl_4="Just+Me+Again+Down+Here";}
elseif ($goofont4=="Kenia") {$goofurl_4="Kenia";}
elseif ($goofont4=="Kranky") {$goofurl_4="Kranky";}
elseif ($goofont4=="Kreon") {$goofurl_4="Kreon";}
elseif ($goofont4=="Kreon Bold") {$goofurl_4="Kreon:bold"; $goofont4="Kreon";}
elseif ($goofont4=="Kristi") {$goofurl_4="Kristi";}
elseif ($goofont4=="Lato") {$goofurl_4="Lato";}
elseif ($goofont4=="Lato Italic") {$goofurl_4="Lato:regularitalic";$goofont4="Lato";}
elseif ($goofont4=="Lato Bold") {$goofurl_4="Lato:bold";$goofont4="Lato";}
elseif ($goofont4=="Lato Bold Italic") {$goofurl_4="Lato:bolditalic";$goofont4="Lato";}
elseif ($goofont4=="League Script") {$goofurl_4="League+Script";}
elseif ($goofont4=="Lekton") {$goofurl_4="Lekton";}
elseif ($goofont4=="Lekton Italic") {$goofurl_4="Lekton:italic"; $goofont4="Lekton";}
elseif ($goofont4=="Lekton Bold") {$goofurl_4="Lekton:bold"; $goofont4="Lekton";}
elseif ($goofont4=="Lobster") {$goofurl_4="Lobster";}
elseif ($goofont4=="MedievalSharp") {$goofurl_4="MedievalSharp";}
elseif ($goofont4=="Merriweather") {$goofurl_4="Merriweather";}
elseif ($goofont4=="Michroma") {$goofurl_4="Michroma";}
elseif ($goofont4=="Molengo") {$goofurl_4="Molengo";}
elseif ($goofont4=="Mountains of Christmas") {$goofurl_4="Mountains+of+Christmas";}
elseif ($goofont4=="Neucha") {$goofurl_4="Neucha";}
elseif ($goofont4=="Neuton") {$goofurl_4="Neuton";}
elseif ($goofont4=="Neuton Italic") {$goofurl_4="Neuton:italic"; $goofont4="Neuton";}
elseif ($goofont4=="Nobile") {$goofurl_4="Nobile";}
elseif ($goofont4=="Nobile Italic") {$goofurl_4="Nobile:italic"; $goofont4="Nobile";}
elseif ($goofont4=="Nobile Bold") {$goofurl_4="Nobile:bold"; $goofont4="Nobile";}
elseif ($goofont4=="Nobile Bold Italic") {$goofurl_4="Nobile:bolditalic"; $goofont4="Nobile";}
elseif ($goofont4=="Nova Round") {$goofurl_4="Nova+Round";}
elseif ($goofont4=="Nova Script") {$goofurl_4="Nova+Script";}
elseif ($goofont4=="Nova Slim") {$goofurl_4="Nova+Slim";}
elseif ($goofont4=="Nova Cut") {$goofurl_4="Nova+Cut";}
elseif ($goofont4=="Nova Oval") {$goofurl_4="Nova+Oval";}
elseif ($goofont4=="Nova Mono") {$goofurl_4="Nova+Mono";}
elseif ($goofont4=="Nova Flat") {$goofurl_4="Nova+Flat";}
elseif ($goofont4=="OFL Sorts Mill Goudy TT") {$goofurl_4="OFL+Sorts+Mill+Goudy+TT";}
elseif ($goofont4=="OFL Sorts Mill Goudy TT Italic") {$goofurl_4="OFL+Sorts+Mill+Goudy+TT:italic";$goofont4="OFL Sorts Mill Goudy TT";}
elseif ($goofont4=="Old Standard TT") {$goofurl_4="Old+Standard+TT";}
elseif ($goofont4=="Old Standard TT Italic") {$goofurl_4="Old+Standard+TT:italic";$goofont4="Old Standard TT";}
elseif ($goofont4=="Old Standard TT Bold") {$goofurl_4="Old+Standard+TT:bold";$goofont4="Old Standard TT";}
elseif ($goofont4=="Orbitron") {$goofurl_4="Orbitron";}
elseif ($goofont4=="Orbitron Italic") {$goofurl_4="Orbitron:italic";$goofont4="Orbitron";}
elseif ($goofont4=="Orbitron Bold") {$goofurl_4="Orbitron:bold";$goofont4="Orbitron";}
elseif ($goofont4=="Orbitron Bold Italic") {$goofurl_4="Orbitron:bolditalic";$goofont4="Orbitron";}
elseif ($goofont4=="Oswald") {$goofurl_4="Oswald";}
elseif ($goofont4=="Pacifico") {$goofurl_4="Pacifico";}
elseif ($goofont4=="Permanent Marker") {$goofurl_4="Permanent+Marker";}
elseif ($goofont4=="PT Sans") {$goofurl_4="PT+Sans";}
elseif ($goofont4=="PT Sans Italic") {$goofurl_4="PT+Sans:italic";}
elseif ($goofont4=="PT Sans Bold") {$goofurl_4="PT+Sans:bold";}
elseif ($goofont4=="PT Sans Bold Italic") {$goofurl_4="PT+Sans:bolditalic";}
elseif ($goofont4=="PT Sans Caption") {$goofurl_4="PT+Sans+Caption";}
elseif ($goofont4=="PT Sans Caption Bold") {$goofurl_4="PT+Sans+Caption:bold"; $goofont4="PT Sans Caption";}
elseif ($goofont4=="PT Sans Narrow") {$goofurl_4="PT+Sans+Narrow";}
elseif ($goofont4=="PT Sans Narrow Bold") {$goofurl_4="PT+Sans+Narrow:bold"; $goofont4="PT Sans Narrow";}
elseif ($goofont4=="PT Serif") {$goofurl_4="PT+Serif";}
elseif ($goofont4=="PT Serif Italic") {$goofurl_4="PT+Serif:italic";$goofont4="PT Serif";}
elseif ($goofont4=="PT Serif Bold") {$goofurl_4="PT+Serif:bold";$goofont4="PT Serif";}
elseif ($goofont4=="PT Serif Bold Italic") {$goofurl_4="PT+Serif:bolditalic";$goofont4="PT Serif";}
elseif ($goofont4=="PT Serif Caption") {$goofurl_4="PT+Serif+Caption";}
elseif ($goofont4=="PT Serif Caption Bold") {$goofurl_4="PT+Serif+Caption+Bold"; $goofont4="PT Serif Caption";}
elseif ($goofont4=="Philosopher") {$goofurl_4="Philosopher";}
elseif ($goofont4=="Puritan") {$goofurl_4="Puritan";}
elseif ($goofont4=="Puritan Italic") {$goofurl_4="Puritan:italic";$goofont4="Puritan";}
elseif ($goofont4=="Puritan Bold") {$goofurl_4="Puritan:bold";$goofont4="Puritan";}
elseif ($goofont4=="Puritan Bold Italic") {$goofurl_4="Puritan:bolditalic";$goofont4="Puritan";}
elseif ($goofont4=="Quattrocento") {$goofurl_4="Quattrocento";}
elseif ($goofont4=="Raleway") {$goofurl_4="Raleway:100";}
elseif ($goofont4=="Reenie Beanie") {$goofurl_4="Reenie+Beanie";}
elseif ($goofont4=="Rock Salt") {$goofurl_4="Rock+Salt";}
elseif ($goofont4=="Schoolbell") {$goofurl_4="Schoolbell";}
elseif ($goofont4=="Slackey") {$goofurl_4="Slackey";}
elseif ($goofont4=="Sniglet") {$goofurl_4="Sniglet:800";}
elseif ($goofont4=="Sunshiney") {$goofurl_4="Sunshiney";}
elseif ($goofont4=="Syncopate") {$goofurl_4="Syncopate";}
elseif ($goofont4=="Tangerine") {$goofurl_4="Tangerine";}
elseif ($goofont4=="Terminal Dosis Light") {$goofurl_4="Terminal Dosis Light";}
elseif ($goofont4=="Tinos") {$goofurl_4="Tinos";}
elseif ($goofont4=="Tinos Italic") {$goofurl_4="Tinos:italic";$goofont4="Tinos";}
elseif ($goofont4=="Tinos Bold") {$goofurl_4="Tinos:bold";$goofont4="Tinos";}
elseif ($goofont4=="Tinos Bold Italic") {$goofurl_4="Tinos:bolditalic";$goofont4="Tinos";}
elseif ($goofont4=="Ubuntu") {$goofurl_4="Ubuntu";}
elseif ($goofont4=="Ubuntu Italic") {$goofurl_4="Ubuntu:italic";$goofont4="Ubuntu";}
elseif ($goofont4=="Ubuntu Bold") {$goofurl_4="Ubuntu:bold";$goofont4="Ubuntu";}
elseif ($goofont4=="Ubuntu Bold Italic") {$goofurl_4="Ubuntu:bolditalic";$goofont4="Ubuntu";}
elseif ($goofont4=="UnifrakturCook") {$goofurl_4="UnifrakturCook:bold";}
elseif ($goofont4=="UnifrakturMaguntia") {$goofurl_4="UnifrakturMaguntia";}
elseif ($goofont4=="Unkempt") {$goofurl_4="Unkempt";}
elseif ($goofont4=="VT323") {$goofurl_4="VT323";}
elseif ($goofont4=="Vibur") {$goofurl_4="Vibur";}
elseif ($goofont4=="Vollkorn") {$goofurl_4="Vollkorn";}
elseif ($goofont4=="Vollkorn Italic") {$goofurl_4="Vollkorn:italic";$goofont4="Vollkorn";}
elseif ($goofont4=="Vollkorn Bold") {$goofurl_4="Vollkorn:bold";$goofont4="Vollkorn";}
elseif ($goofont4=="Vollkorn Bold Italic") {$goofurl_4="Vollkorn:bolditalic";$goofont4="Vollkorn";}
elseif ($goofont4=="Walter Turncoat") {$goofurl_4="Walter+Turncoat";}
elseif ($goofont4=="Yanone Kaffeesatz") {$goofurl_4="Yanone+Kaffeesatz";}
elseif ($goofont4=="Yanone Kaffeesatz Light") {$goofurl_4="Yanone+Kaffeesatz:light";$goofont4="Yanone Kaffeesatz";}
elseif ($goofont4=="Yanone Kaffeesatz Bold") {$goofurl_4="Yanone+Kaffeesatz:bold";$goofont4="Yanone Kaffeesatz";}
else ;

$goofurl_5 = '';
$goofont5 = '';
$goofont5 = $this->params->get( 'font-face-5' );

if ($goofont5=="Allan") {$goofurl_5="Allan:bold";}
elseif ($goofont5=="Nixie One") {$goofurl_5="Nixie+One";}
elseif ($goofont5=="Redressed") {$goofurl_5="Redressed";}
elseif ($goofont5=="Lobster Two") {$goofurl_5="Lobster+Two";$goofont5="Lobster Two";}
elseif ($goofont5=="Lobster Two Italic") {$goofurl_5="Lobster+Two:400italic";$goofont5="Lobster Two";}
elseif ($goofont5=="Lobster Two Bold") {$goofurl_5="Lobster+Two:700";$goofont5="Lobster Two";}
elseif ($goofont5=="Lobster Two Bold Italic") {$goofurl_5="Lobster+Two:700italic";$goofont5="Lobster Two";}
elseif ($goofont5=="Caudex") {$goofurl_5="Caudex";}
elseif ($goofont5=="Jura") {$goofurl_5="Jura";}
elseif ($goofont5=="Ruslan Display") {$goofurl_5="Ruslan+Display";}
elseif ($goofont5=="Brawler") {$goofurl_5="Brawler";}
elseif ($goofont5=="Nunito") {$goofurl_5="Nunito";}
elseif ($goofont5=="Wire One") {$goofurl_5="Wire+One";}
elseif ($goofont5=="Podkova") {$goofurl_5="Podkova";}
elseif ($goofont5=="Muli") {$goofurl_5="Muli";}
elseif ($goofont5=="Maven Pro") {$goofurl_5="Maven+Pro";}
elseif ($goofont5=="Tenor Sans") {$goofurl_5="Tenor+Sans";}
elseif ($goofont5=="Limelight") {$goofurl_5="Limelight";}
elseif ($goofont5=="Playfair Display") {$goofurl_5="Playfair+Display";}
elseif ($goofont5=="Artifika") {$goofurl_5="Artifika";}
elseif ($goofont5=="Lora") {$goofurl_5="Lora";}
elseif ($goofont5=="Kameron") {$goofurl_5="Kameron";}
elseif ($goofont5=="Cedarville Cursive") {$goofurl_5="Cedarville+Cursive";}
elseif ($goofont5=="Zeyada") {$goofurl_5="Zeyada";}
elseif ($goofont5=="La Belle Aurore") {$goofurl_5="La+Belle+Aurore";}
elseif ($goofont5=="Shadows into Light") {$goofurl_5="Shadows+Into+Light";}
elseif ($goofont5=="Shanti") {$goofurl_5="Shanti";}
elseif ($goofont5=="Mako") {$goofurl_5="Mako";}
elseif ($goofont5=="Metrophobic") {$goofurl_5="Metrophobic";}
elseif ($goofont5=="Ultra") {$goofurl_5="Ultra";}
elseif ($goofont5=="Play") {$goofurl_5="Play";}
elseif ($goofont5=="Didact Gothic") {$goofurl_5="Didact+Gothic";}
elseif ($goofont5=="Judson") {$goofurl_5="Judson";}
elseif ($goofont5=="Megrim") {$goofurl_5="Megrim";}
elseif ($goofont5=="Rokkitt") {$goofurl_5="Rokkitt";}
elseif ($goofont5=="Monofett") {$goofurl_5="Monofett";}
elseif ($goofont5=="Paytone One") {$goofurl_5="Paytone+One";}
elseif ($goofont5=="Holtwood One SC") {$goofurl_5="Holtwood+One+SC";}
elseif ($goofont5=="Carter One") {$goofurl_5="Carter+One";}
elseif ($goofont5=="Francois One") {$goofurl_5="Francois+One";}
elseif ($goofont5=="Bigshot One") {$goofurl_5="Bigshot+One";}
elseif ($goofont5=="Sigmar One") {$goofurl_5="Sigmar+One";}
elseif ($goofont5=="Swanky and Moo Moo") {$goofurl_5="Swanky+and+Moo+Moo";}
elseif ($goofont5=="Over the Rainbow") {$goofurl_5="Over+the+Rainbow";}
elseif ($goofont5=="Wallpoet") {$goofurl_5="Wallpoet";}
elseif ($goofont5=="Damion") {$goofurl_5="Damion";}
elseif ($goofont5=="News Cycle") {$goofurl_5="News+Cycle";}
elseif ($goofont5=="Aclonica") {$goofurl_5="Aclonica";}
elseif ($goofont5=="Special Elite") {$goofurl_5="Special+Elite";}
elseif ($goofont5=="Smythe") {$goofurl_5="Smythe";}
elseif ($goofont5=="Quattrocento Sans") {$goofurl_5="Quattrocento+Sans";}
elseif ($goofont5=="The Girl Next Door") {$goofurl_5="The+Girl+Next+Door";}
elseif ($goofont5=="Sue Ellen Francisco") {$goofurl_5="Sue+Ellen+Francisco";}
elseif ($goofont5=="Dawning of a New Day") {$goofurl_5="Dawning+of+a+New+Day";}
elseif ($goofont5=="Waiting for the Sunrise") {$goofurl_5="Waiting+for+the+Sunrise";}
elseif ($goofont5=="Annie Use Your Telescope") {$goofurl_5="Annie+Use+Your+Telescope";}
elseif ($goofont5=="Maiden Orange") {$goofurl_5="Maiden+Orange";}
elseif ($goofont5=="Luckiest Guy") {$goofurl_5="Luckiest+Guy";}
elseif ($goofont5=="Bangers") {$goofurl_5="Bangers";}
elseif ($goofont5=="Miltonian") {$goofurl_5="Miltonian";}
elseif ($goofont5=="Miltonian Tattoo") {$goofurl_5="Miltonian+Tattoo";}
elseif ($goofont5=="Allerta") {$goofurl_5="Allerta";}
elseif ($goofont5=="Allerta Stencil") {$goofurl_5="Allerta+Stencil";}
elseif ($goofont5=="Amaranth") {$goofurl_5="Amaranth";}
elseif ($goofont5=="Anonymous Pro") {$goofurl_5="Anonymous+Pro";}
elseif ($goofont5=="Anonymous Pro Italic") {$goofurl_5="Anonymous+Pro:italic";$goofont5="Anonymous Pro";}
elseif ($goofont5=="Anonymous Pro Bold") {$goofurl_5="Anonymous+Pro:bold";$goofont5="Anonymous Pro";}
elseif ($goofont5=="Anonymous Pro Bold Italic") {$goofurl_5="Anonymous+Pro:bolditalic";$goofont5="Anonymous Pro";}
elseif ($goofont5=="Anton") {$goofurl_5="Anton";}
elseif ($goofont5=="Architects Daughter") {$goofurl_5="Architects+Daughter";}
elseif ($goofont5=="Arimo") {$goofurl_5="Arimo";}
elseif ($goofont5=="Arimo Italic") {$goofurl_5="Arimo:italic";$goofont5="Arimo";}
elseif ($goofont5=="Arimo Bold") {$goofurl_5="Arimo:bold";$goofont5="Arimo";}
elseif ($goofont5=="Arimo Bold Italic") {$goofurl_5="Arimo:bolditalic";$goofont5="Arimo";}
elseif ($goofont5=="Arvo") {$goofurl_5="Arvo"; $goofont5="Arvo";}
elseif ($goofont5=="Arvo Italic") {$goofurl_5="Arvo:italic"; $goofont5="Arvo";}
elseif ($goofont5=="Arvo Bold") {$goofurl_5="Arvo:bold"; $goofont5="Arvo";}
elseif ($goofont5=="Arvo Bold Italic") {$goofurl_5="Arvo:bolditalic"; $goofont5="Arvo";}
elseif ($goofont5=="Astloch") {$goofurl_5="Astloch";}
elseif ($goofont5=="Astloch Bold") {$goofurl_5="Astloch:bold"; $goofont5="Astloch";}
elseif ($goofont5=="Bentham") {$goofurl_5="Bentham";}
elseif ($goofont5=="Bevan") {$goofurl_5="Bevan";}
elseif ($goofont5=="Buda") {$goofurl_5="Buda:light";}
elseif ($goofont5=="Cabin") {$goofurl_5="Cabin:regular";}
elseif ($goofont5=="Cabin Italic") {$goofurl_5="Cabin:regularitalic";$goofont5="Cabin";}
elseif ($goofont5=="Cabin Bold") {$goofurl_5="Cabin:bold";$goofont5="Cabin";}
elseif ($goofont5=="Cabin Bold Italic") {$goofurl_5="Cabin:bolditalic";$goofont5="Cabin";}
elseif ($goofont5=="Cabin Sketch") {$goofurl_5="Cabin+Sketch:bold";}
elseif ($goofont5=="Calligraffitti") {$goofurl_5="Calligraffitti";}
elseif ($goofont5=="Candal") {$goofurl_5="Candal";}
elseif ($goofont5=="Cantarell") {$goofurl_5="Cantarell";}
elseif ($goofont5=="Cantarell Italic") {$goofurl_5="Cantarell:italic";$goofont5="Cantarell";}
elseif ($goofont5=="Cantarell Bold") {$goofurl_5="Cantarell:bold";$goofont5="Cantarell";}
elseif ($goofont5=="Cantarell Bold Italic") {$goofurl_5="Cantarell:bolditalic";$goofont5="Cantarell";}
elseif ($goofont5=="Cardo") {$goofurl_5="Cardo";}
elseif ($goofont5=="Cherry Cream Soda") {$goofurl_5="Cherry+Cream+Soda";}
elseif ($goofont5=="Chewy") {$goofurl_5="Chewy";}
elseif ($goofont5=="Coda") {$goofurl_5="Coda:800";}
elseif ($goofont5=="Coda Caption") {$goofurl_5="Coda+Caption:800";}
elseif ($goofont5=="Coming Soon") {$goofurl_5="Coming+Soon";}
elseif ($goofont5=="Copse") {$goofurl_5="Copse";}
elseif ($goofont5=="Corben") {$goofurl_5="Corben:bold";}
elseif ($goofont5=="Cousine") {$goofurl_5="Cousine";}
elseif ($goofont5=="Cousine Italic") {$goofurl_5="Cousine:italic";$goofont5="Cousine";}
elseif ($goofont5=="Cousine Bold") {$goofurl_5="Cousine:bold";$goofont5="Cousine";}
elseif ($goofont5=="Cousine Bold Italic") {$goofurl_5="Cousine:bolditalic";$goofont5="Cousine";}
elseif ($goofont5=="Covered By Your Grace") {$goofurl_5="Covered+By+Your+Grace";}
elseif ($goofont5=="Crafty Girls") {$goofurl_5="Crafty+Girls";}
elseif ($goofont5=="Crimson Text") {$goofurl_5="Crimson+Text";}
elseif ($goofont5=="Crimson Text Italic") {$goofurl_5="Crimson+Text:italic";$goofont5="Crimson Text";}
elseif ($goofont5=="Crimson Text Bold") {$goofurl_5="Crimson+Text:bold";$goofont5="Crimson Text";}
elseif ($goofont5=="Crimson Text Bold Italic") {$goofurl_5="Crimson+Text:bolditalic";$goofont5="Crimson Text";}
elseif ($goofont5=="Crushed") {$goofurl_5="Crushed";}
elseif ($goofont5=="Cuprum") {$goofurl_5="Cuprum";}
elseif ($goofont5=="Droid Sans") {$goofurl_5="Droid+Sans";}
elseif ($goofont5=="Droid Sans Bold") {$goofurl_5="Droid+Sans:bold"; $goofont5="Droid Sans";}
elseif ($goofont5=="Droid Sans Mono") {$goofurl_5="Droid+Sans+Mono";}
elseif ($goofont5=="Droid Serif") {$goofurl_5="Droid+Serif";}
elseif ($goofont5=="Droid Serif Italic") {$goofurl_5="Droid+Serif:italic";$goofont5="Droid Serif";}
elseif ($goofont5=="Droid Serif Bold") {$goofurl_5="Droid+Serif:bold";$goofont5="Droid Serif";}
elseif ($goofont5=="Droid Serif Bold Italic") {$goofurl_5="Droid+Serif:bolditalic";$goofont5="Droid Serif";}
elseif ($goofont5=="EB Garamond") {$goofurl_5="EB+Garamond";}
elseif ($goofont5=="Expletus Sans") {$goofurl_5="Expletus+Sans";}
elseif ($goofont5=="Expletus Sans Bold") {$goofurl_5="Expletus+Sans:bold";$goofont5="Expletus Sans";}
elseif ($goofont5=="Fontdiner Swanky") {$goofurl_5="Fontdiner+Swanky";}
elseif ($goofont5=="Geo") {$goofurl_5="Geo";}
elseif ($goofont5=="Goudy Bookletter 1911") {$goofurl_5="Goudy+Bookletter+1911";}
elseif ($goofont5=="Gruppo") {$goofurl_5="Gruppo";}
elseif ($goofont5=="Homemade Apple") {$goofurl_5="Homemade+Apple";}
elseif ($goofont5=="IM Fell Double Pica") {$goofurl_5="IM+Fell+Double+Pica";$goofont5="IM Fell Double Pica";}
elseif ($goofont5=="IM Fell Double Pica Italic") {$goofurl_5="IM+Fell+Double+Pica:italic";$goofont5="IM Fell Double Pica";}
elseif ($goofont5=="IM Fell Double Pica SC") {$goofurl_5="IM+Fell+Double+Pica+SC";}
elseif ($goofont5=="IM Fell DW Pica") {$goofurl_5="IM+Fell+DW+Pica";$goofont5="IM Fell DW Pica";}
elseif ($goofont5=="IM Fell DW Pica Italic") {$goofurl_5="IM+Fell+DW+Pica:italic";$goofont5="IM Fell DW Pica";}
elseif ($goofont5=="IM Fell DW Pica SC") {$goofurl_5="IM+Fell+DW+Pica+SC";}
elseif ($goofont5=="IM Fell English") {$goofurl_5="IM+Fell+English";$goofont5="IM Fell English";}
elseif ($goofont5=="IM Fell English Italic") {$goofurl_5="IM+Fell+English:italic";$goofont5="IM Fell English";}
elseif ($goofont5=="IM Fell English SC") {$goofurl_5="IM+Fell+English+SC";}
elseif ($goofont5=="IM Fell French Canon") {$goofurl_5="IM+Fell+French+Canon";$goofont5="IM Fell French Canon";}
elseif ($goofont5=="IM Fell French Canon Italic") {$goofurl_5="IM+Fell+French+Canon:italic";$goofont5="IM Fell French Canon";}
elseif ($goofont5=="IM Fell French Canon SC") {$goofurl_5="IM+Fell+French+Canon+SC";}
elseif ($goofont5=="IM Fell Great Primer") {$goofurl_5="IM+Fell+Great+Primer";$goofont5="IM Fell Great Primer";}
elseif ($goofont5=="IM Fell Great Primer Italic") {$goofurl_5="IM+Fell+Great+Primer:italic";$goofont5="IM Fell Great Primer";}
elseif ($goofont5=="IM Fell Great Primer SC") {$goofurl_5="IM+Fell+Great+Primera+SC";}
elseif ($goofont5=="Inconsolata") {$goofurl_5="Inconsolata";}
elseif ($goofont5=="Indie Flower") {$goofurl_5="Indie+Flower";}
elseif ($goofont5=="Irish Grover") {$goofurl_5="Irish+Grover";}
elseif ($goofont5=="Josefin Sans") {$goofurl_5="Josefin+Sans";}
elseif ($goofont5=="Josefin Sans Italic") {$goofurl_5="Josefin+Sans:regularitalic"; $goofont5="Josefin Sans";}
elseif ($goofont5=="Josefin Sans Bold") {$goofurl_5="Josefin+Sans:bold"; $goofont5="Josefin Sans";}
elseif ($goofont5=="Josefin Sans Bold Italic") {$goofurl_5="Josefin+Sans:bolditalic"; $goofont5="Josefin Sans";}
elseif ($goofont5=="Josefin Slab") {$goofurl_5="Josefin+Slab";}
elseif ($goofont5=="Just Another Hand") {$goofurl_5="Just+Another+Hand";}
elseif ($goofont5=="Just Me Again Down Here") {$goofurl_5="Just+Me+Again+Down+Here";}
elseif ($goofont5=="Kenia") {$goofurl_5="Kenia";}
elseif ($goofont5=="Kranky") {$goofurl_5="Kranky";}
elseif ($goofont5=="Kreon") {$goofurl_5="Kreon";}
elseif ($goofont5=="Kreon Bold") {$goofurl_5="Kreon:bold"; $goofont5="Kreon";}
elseif ($goofont5=="Kristi") {$goofurl_5="Kristi";}
elseif ($goofont5=="Lato") {$goofurl_5="Lato";}
elseif ($goofont5=="Lato Italic") {$goofurl_5="Lato:regularitalic";$goofont5="Lato";}
elseif ($goofont5=="Lato Bold") {$goofurl_5="Lato:bold";$goofont5="Lato";}
elseif ($goofont5=="Lato Bold Italic") {$goofurl_5="Lato:bolditalic";$goofont5="Lato";}
elseif ($goofont5=="League Script") {$goofurl_5="League+Script";}
elseif ($goofont5=="Lekton") {$goofurl_5="Lekton";}
elseif ($goofont5=="Lekton Italic") {$goofurl_5="Lekton:italic"; $goofont5="Lekton";}
elseif ($goofont5=="Lekton Bold") {$goofurl_5="Lekton:bold"; $goofont5="Lekton";}
elseif ($goofont5=="Lobster") {$goofurl_5="Lobster";}
elseif ($goofont5=="MedievalSharp") {$goofurl_5="MedievalSharp";}
elseif ($goofont5=="Merriweather") {$goofurl_5="Merriweather";}
elseif ($goofont5=="Michroma") {$goofurl_5="Michroma";}
elseif ($goofont5=="Molengo") {$goofurl_5="Molengo";}
elseif ($goofont5=="Mountains of Christmas") {$goofurl_5="Mountains+of+Christmas";}
elseif ($goofont5=="Neucha") {$goofurl_5="Neucha";}
elseif ($goofont5=="Neuton") {$goofurl_5="Neuton";}
elseif ($goofont5=="Neuton Italic") {$goofurl_5="Neuton:italic"; $goofont5="Neuton";}
elseif ($goofont5=="Nobile") {$goofurl_5="Nobile";}
elseif ($goofont5=="Nobile Italic") {$goofurl_5="Nobile:italic"; $goofont5="Nobile";}
elseif ($goofont5=="Nobile Bold") {$goofurl_5="Nobile:bold"; $goofont5="Nobile";}
elseif ($goofont5=="Nobile Bold Italic") {$goofurl_5="Nobile:bolditalic"; $goofont5="Nobile";}
elseif ($goofont5=="Nova Round") {$goofurl_5="Nova+Round";}
elseif ($goofont5=="Nova Script") {$goofurl_5="Nova+Script";}
elseif ($goofont5=="Nova Slim") {$goofurl_5="Nova+Slim";}
elseif ($goofont5=="Nova Cut") {$goofurl_5="Nova+Cut";}
elseif ($goofont5=="Nova Oval") {$goofurl_5="Nova+Oval";}
elseif ($goofont5=="Nova Mono") {$goofurl_5="Nova+Mono";}
elseif ($goofont5=="Nova Flat") {$goofurl_5="Nova+Flat";}
elseif ($goofont5=="OFL Sorts Mill Goudy TT") {$goofurl_5="OFL+Sorts+Mill+Goudy+TT";}
elseif ($goofont5=="OFL Sorts Mill Goudy TT Italic") {$goofurl_5="OFL+Sorts+Mill+Goudy+TT:italic";$goofont5="OFL Sorts Mill Goudy TT";}
elseif ($goofont5=="Old Standard TT") {$goofurl_5="Old+Standard+TT";}
elseif ($goofont5=="Old Standard TT Italic") {$goofurl_5="Old+Standard+TT:italic";$goofont5="Old Standard TT";}
elseif ($goofont5=="Old Standard TT Bold") {$goofurl_5="Old+Standard+TT:bold";$goofont5="Old Standard TT";}
elseif ($goofont5=="Orbitron") {$goofurl_5="Orbitron";}
elseif ($goofont5=="Orbitron Italic") {$goofurl_5="Orbitron:italic";$goofont5="Orbitron";}
elseif ($goofont5=="Orbitron Bold") {$goofurl_5="Orbitron:bold";$goofont5="Orbitron";}
elseif ($goofont5=="Orbitron Bold Italic") {$goofurl_5="Orbitron:bolditalic";$goofont5="Orbitron";}
elseif ($goofont5=="Oswald") {$goofurl_5="Oswald";}
elseif ($goofont5=="Pacifico") {$goofurl_5="Pacifico";}
elseif ($goofont5=="Permanent Marker") {$goofurl_5="Permanent+Marker";}
elseif ($goofont5=="PT Sans") {$goofurl_5="PT+Sans";}
elseif ($goofont5=="PT Sans Italic") {$goofurl_5="PT+Sans:italic";}
elseif ($goofont5=="PT Sans Bold") {$goofurl_5="PT+Sans:bold";}
elseif ($goofont5=="PT Sans Bold Italic") {$goofurl_5="PT+Sans:bolditalic";}
elseif ($goofont5=="PT Sans Caption") {$goofurl_5="PT+Sans+Caption";}
elseif ($goofont5=="PT Sans Caption Bold") {$goofurl_5="PT+Sans+Caption:bold"; $goofont5="PT Sans Caption";}
elseif ($goofont5=="PT Sans Narrow") {$goofurl_5="PT+Sans+Narrow";}
elseif ($goofont5=="PT Sans Narrow Bold") {$goofurl_5="PT+Sans+Narrow:bold"; $goofont5="PT Sans Narrow";}
elseif ($goofont5=="PT Serif") {$goofurl_5="PT+Serif";}
elseif ($goofont5=="PT Serif Italic") {$goofurl_5="PT+Serif:italic";$goofont5="PT Serif";}
elseif ($goofont5=="PT Serif Bold") {$goofurl_5="PT+Serif:bold";$goofont5="PT Serif";}
elseif ($goofont5=="PT Serif Bold Italic") {$goofurl_5="PT+Serif:bolditalic";$goofont5="PT Serif";}
elseif ($goofont5=="PT Serif Caption") {$goofurl_5="PT+Serif+Caption";}
elseif ($goofont5=="PT Serif Caption Bold") {$goofurl_5="PT+Serif+Caption+Bold"; $goofont5="PT Serif Caption";}
elseif ($goofont5=="Philosopher") {$goofurl_5="Philosopher";}
elseif ($goofont5=="Puritan") {$goofurl_5="Puritan";}
elseif ($goofont5=="Puritan Italic") {$goofurl_5="Puritan:italic";$goofont5="Puritan";}
elseif ($goofont5=="Puritan Bold") {$goofurl_5="Puritan:bold";$goofont5="Puritan";}
elseif ($goofont5=="Puritan Bold Italic") {$goofurl_5="Puritan:bolditalic";$goofont5="Puritan";}
elseif ($goofont5=="Quattrocento") {$goofurl_5="Quattrocento";}
elseif ($goofont5=="Raleway") {$goofurl_5="Raleway:100";}
elseif ($goofont5=="Reenie Beanie") {$goofurl_5="Reenie+Beanie";}
elseif ($goofont5=="Rock Salt") {$goofurl_5="Rock+Salt";}
elseif ($goofont5=="Schoolbell") {$goofurl_5="Schoolbell";}
elseif ($goofont5=="Slackey") {$goofurl_5="Slackey";}
elseif ($goofont5=="Sniglet") {$goofurl_5="Sniglet:800";}
elseif ($goofont5=="Sunshiney") {$goofurl_5="Sunshiney";}
elseif ($goofont5=="Syncopate") {$goofurl_5="Syncopate";}
elseif ($goofont5=="Tangerine") {$goofurl_5="Tangerine";}
elseif ($goofont5=="Terminal Dosis Light") {$goofurl_5="Terminal Dosis Light";}
elseif ($goofont5=="Tinos") {$goofurl_5="Tinos";}
elseif ($goofont5=="Tinos Italic") {$goofurl_5="Tinos:italic";$goofont5="Tinos";}
elseif ($goofont5=="Tinos Bold") {$goofurl_5="Tinos:bold";$goofont5="Tinos";}
elseif ($goofont5=="Tinos Bold Italic") {$goofurl_5="Tinos:bolditalic";$goofont5="Tinos";}
elseif ($goofont5=="Ubuntu") {$goofurl_5="Ubuntu";}
elseif ($goofont5=="Ubuntu Italic") {$goofurl_5="Ubuntu:italic";$goofont5="Ubuntu";}
elseif ($goofont5=="Ubuntu Bold") {$goofurl_5="Ubuntu:bold";$goofont5="Ubuntu";}
elseif ($goofont5=="Ubuntu Bold Italic") {$goofurl_5="Ubuntu:bolditalic";$goofont5="Ubuntu";}
elseif ($goofont5=="UnifrakturCook") {$goofurl_5="UnifrakturCook:bold";}
elseif ($goofont5=="UnifrakturMaguntia") {$goofurl_5="UnifrakturMaguntia";}
elseif ($goofont5=="Unkempt") {$goofurl_5="Unkempt";}
elseif ($goofont5=="VT323") {$goofurl_5="VT323";}
elseif ($goofont5=="Vibur") {$goofurl_5="Vibur";}
elseif ($goofont5=="Vollkorn") {$goofurl_5="Vollkorn";}
elseif ($goofont5=="Vollkorn Italic") {$goofurl_5="Vollkorn:italic";$goofont5="Vollkorn";}
elseif ($goofont5=="Vollkorn Bold") {$goofurl_5="Vollkorn:bold";$goofont5="Vollkorn";}
elseif ($goofont5=="Vollkorn Bold Italic") {$goofurl_5="Vollkorn:bolditalic";$goofont5="Vollkorn";}
elseif ($goofont5=="Walter Turncoat") {$goofurl_5="Walter+Turncoat";}
elseif ($goofont5=="Yanone Kaffeesatz") {$goofurl_5="Yanone+Kaffeesatz";}
elseif ($goofont5=="Yanone Kaffeesatz Light") {$goofurl_5="Yanone+Kaffeesatz:light";$goofont5="Yanone Kaffeesatz";}
elseif ($goofont5=="Yanone Kaffeesatz Bold") {$goofurl_5="Yanone+Kaffeesatz:bold";$goofont5="Yanone Kaffeesatz";}
else ;

$activate_second = '';
$activate_second = $this->params->get( 'use_second' );

$activate_third = '';
$activate_third = $this->params->get( 'use_third' );

$activate_fourth = '';
$activate_fourth = $this->params->get( 'use_fourth' );

$activate_fifth = '';
$activate_fifth = $this->params->get( 'use_fifth' );

$hd_gfont1 = '<link href="http://fonts.googleapis.com/css?family='. $goofurl_1.'" rel="stylesheet" type="text/css">
<style type="text/css">'. $this->params->get( 'font-class-1' ).' {font-family: \''. $goofont1.'\', arial, serif; '. $this->params->get( 'font-css-1' ).'}</style>'
;

if ($activate_second=="1") {$hd_gfont2 = '<link href="http://fonts.googleapis.com/css?family='. $goofurl_2.'" rel="stylesheet" type="text/css">
<style type="text/css">'. $this->params->get( 'font-class-2' ).' {font-family: \''. $goofont2.'\', arial, serif; '. $this->params->get( 'font-css-2' ).'}</style>'
;}
else {$hd_gfont2 = ' ';}

if ($activate_third=="1") {$hd_gfont3 = '<link href="http://fonts.googleapis.com/css?family='. $goofurl_3.'" rel="stylesheet" type="text/css">
<style type="text/css">'. $this->params->get( 'font-class-3' ).' {font-family: \''. $goofont3.'\', arial, serif; '. $this->params->get( 'font-css-3' ).'}</style>'
;}
else {$hd_gfont3 = ' ';}

if ($activate_fourth=="1") {$hd_gfont4 = '<link href="http://fonts.googleapis.com/css?family='. $goofurl_4.'" rel="stylesheet" type="text/css">
<style type="text/css">'. $this->params->get( 'font-class-4' ).' {font-family: \''. $goofont4.'\', arial, serif; '. $this->params->get( 'font-css-4' ).'}</style>'
;}
else {$hd_gfont4 = ' ';}

if ($activate_fifth=="1") {$hd_gfont5 = '<link href="http://fonts.googleapis.com/css?family='. $goofurl_5.'" rel="stylesheet" type="text/css">
<style type="text/css">'. $this->params->get( 'font-class-5' ).' {font-family: \''. $goofont5.'\', arial, serif; '. $this->params->get( 'font-css-5' ).'}</style>'
;}
else {$hd_gfont5 = ' ';}

$google_fontage=$hd_gfont1.$hd_gfont2.$hd_gfont3.$hd_gfont4.$hd_gfont5;
		
		$buffer = str_replace ("</head>", $google_fontage."</head>", $buffer);
		JResponse::setBody($buffer);
		
		return true;
	}
}
?>