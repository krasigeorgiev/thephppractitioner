<?php 

// 16 - Make me a router - works till minute 4:00

require 'core/bootstrap.php';



require Router::load('routes.php')
	->direct(Request::uri());

