<?php
include 'Routing.php';
$routes = new Routing();


$routes->get('test',function() {

	print <<<HTML
	<h1>Routing Test</h1>
	<p>
		This is using a get route<br />
		<a href="./">Go Back</a>

	</p>


HTML;
	die();
});

$routes->home(function(){
	print <<<HTML
	<h1>Routing Home</h1>
	<p>
		This is the default 'catch all' route.<br />
		There are 3 types of route.<br />
		1) ->get('param',function(){}');<br />
		This uses the GET param for routing<br />
		2) ->get('param',function(){}');<br />
		This uses the POST param, mostly for forms<br />
		3) ->home(function(){}');<br />
		The default route, designed to catch all<br />
		<a href="./?test">View the test route</a>
	</p>

HTML;
	die();
});
