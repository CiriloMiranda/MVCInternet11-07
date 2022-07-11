<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>DESDE LA VISTA</h1>
	<h1><?php echo $titulo?></h1>
	<ul>
		<?php foreach($lista as $item): ?>
		<li><?= $item ?></li>
		<?php endforeach ?>
	</ul>
</body>
</html>