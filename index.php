<?php

	/*
		simpson
	*/

	require_once __DIR__ . '/inc/functions/pages.php';
	require_once __DIR__ . '/inc/functions/templates.php';


	getCurrentPage();

?><!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>simpson</title>
	</head>
	<body>

		<?php

			renderCurrentPage();

		?>

	</body>
</html>