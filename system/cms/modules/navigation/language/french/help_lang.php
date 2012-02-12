<?php defined('BASEPATH') OR exit('No direct script access allowed');

//TODO : translate help file

// inline help html. Only 'help_body' is used.
$lang['help_body'] = "
<h4>Overview</h4>
<p>The Navigation module controls your main navigation area as well as other link groups.</p>

<h4>Navigation Groups</h4>
<p>Navigation links are displayed according to the group that they are in. In most themes the Header group is the main navigation. 
Check your theme's documentation to find out which navigation groups are supported in the theme files. 
If you want to display a group within site content just use this tag: {{ navigation:links group=\"your-group-name\" }}</p>

<h4>Adding Links</h4>
<p>Choose a title for your link, then select the group that you wish for it to display in.
Link types are as follows:
<ul>
<li>URL: an external link - http://google.com</li>
<li>Site Link: a link within your site - galleries/portfolio-pictures</li>
<li>Module: takes a visitor to the index page of a module</li>
<li>Page: link to a page</li>
</ul>
Target specifies if this link should open in a new browser window or tab. 
(Tip: use New Window sparingly to avoid annoying your site visitors.)
The Class field allows you to add a css class to a single link.</p>
<p></p>

<h4>Ordering Navigation Links</h4>
<p>The order of your links in the admin panel are reflected on the website front-end. 
To change the order that they appear simply drag and drop them until they are in the order that you like.</p>";