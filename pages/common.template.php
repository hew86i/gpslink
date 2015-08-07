<?php

$CSSList = array(
	'screen.css' => 'screen,projection,tv'
);

function template_header($pageTitle = '') {

	global $CSSList;

	header('Content-Type: text/html; charset=utf-8');
	
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml"
	lang="en"
	xml:lang="en"
><head>

	<meta
		http-equiv="Content-Type"
		content="text/html; charset=utf-8"
	/>

	<meta
		http-equiv="Content-Language"
		content="en"
	/>

	<meta
		name="viewport"
		content="width=device-width; initial-scale=1.0"
	/>';

foreach ($CSSList as $CSSFile => $media) echo '

	<link
		type="text/css"
		rel="stylesheet"
		href="',URL_ROOT,'theme/',$CSSFile,'"
		media="',$media,'"
	/>';

echo '

	<title>
		',(
			empty($pageTitle) ? '' : $pageTitle . ' - '
		),'"User Friendly" URL Demo
	</title>

</head><body>

<div id="pageWrapper">

	<h1>
		"User Friendly" URL Demo
	</h1>';

} // template_header

function template_footer() {

	echo '
	
	<hr />
	
	<div id="footer">
		<ul>
			<li>
				<a href="http://www.cutcodedown.com/tutorials/friendlyURL">
					Live Demo
				</a>
			</li><li>
				<a href="http://www.cutcodedown.com/tutorials/friendlyURL/friendlyURL.rar">
					Download friendlyURL.rar
				</a>
			</li><li>
				<a href="http://www.cutcodedown.com/tutorials/friendlyURL/splainLucy">
					Explanation / Documentation
				</a>
			</li>
		</ul>
		Demo by Jason M. Knight, 2013
	<!-- #footer --></div>
	
<!-- #pageWrapper --></div>

</body></html>';

	die(); 
	// NO legitimate reason to do ANYTHING after footer is output!

} // template_footer

function die404() {

	header('HTTP/1.1 404 Not Found');
	template_header('HTTP/1.1 404 Not Found');
	
	echo '
		<h2>Unable to find requested file</h2>
		<p>
			You attempted to access '.htmlspecialchars($_SERVER['REQUEST_URI']).'
			Which does not exist on this server.
		</p><p>
			Please access the <a href="',URL_ROOT,'">main page of this site</a> instead.
		</p>
	';
	
	template_footer();
	
} // die404

?>