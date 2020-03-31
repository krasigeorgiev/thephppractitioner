<!DOCTYPE html>

<html>

<head>


	<title>Document</title>

	<style type="text/css">
		
		header {

			background: #e3e3e3;

			padding: 2em;

			text-align: center;
		}


	</style>

</head>

<body>

<nav>
	

	<ul>
		

		<li><a href="/about.php">About</a></li>

		<li><a href="/contact.php">Contact Page</a></li>			


	</ul>


</nav>


<ul>

<h1>My Tasks</h1>

<?php foreach ($tasks as $task) : ?>

	<li>

		<?php if ($task->completed) : ?>

			<strike>

		<?php endif; ?>


		<?= $task->description; ?>

		<?php if ($task->completed) : ?>

			</strike>

		<?php endif; ?>		
			

	</li>

<?php endforeach; ?>


</ul>

</body>

</html>