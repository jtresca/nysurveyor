<?php
/**
 * Language Include File (English)
 * Can overrule set variables used in different elements
 *
 * @package     Articles Anywhere
 * @version     1.11.7
 *
 * @author      Peter van Westen <peter@nonumber.nl>
 * @link        http://www.nonumber.nl
 * @copyright   Copyright © 2011 NoNumber! All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @translation Peter van Westen <peter@nonumber.nl> NoNumber!
 */

// No direct access
defined( '_JEXEC' ) or die();

/**
 * Variables that can be overruled:
 * $image
 * $title
 * $description
 * $help
 */

$description = '
	<p>Easily place articles anywhere in your site.</p>
	<p>You can place articles using the syntax:<br />
	Using the title of the article: <span class="nn_code">{article Some article}...{/article}</span><br />
	Using the alias of the article: <span class="nn_code">{article some-article}...{/article}</span><br />
	Using the id of the module: <span class="nn_code">{article 123}...{/article}</span></p>
	<p>Within those tags you can place different tags to place different article data/details:<br />
	<span class="nn_code">{text}</span> (the entire text: introtext+fulltext)<br />
	<span class="nn_code">{readmore}</span> (a read more link)<br />
	<span class="nn_code">{url}</span> (the url to the article)<br />
	<span class="nn_code">{introtext}</span><br />
	<span class="nn_code">{fulltext}</span><br />
	<span class="nn_code">{title}</span><br />
	<span class="nn_code">{id}</span><br />
	Or any other data available (must match the column name in the database)</p>
	<p>When showing text (all text, introtext or fulltext), you can also make the tag only show a certain amount of characters:<br />
	<span class="nn_code">{text:100}</span> (shows the first 100 characters of the entire text)</p>
	<p>When showing read more link, you can also overrule the standar "Read more..." text:<br />
	<span class="nn_code">{readmore:Please read on!}</span></p>
	<p><em>The colors used in the examples are for readability. Do not use colors in the actual tags, because that will stop them from working.</em></p>
';