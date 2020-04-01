<?php 

// 17 - Dry Up Your Views - tamplate engines like Blade

require 'core/bootstrap.php';



require Router::load('routes.php')
	->direct(Request::uri());

