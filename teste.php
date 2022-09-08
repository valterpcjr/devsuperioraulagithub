<?php
    ob_start();
   // session_start();
    require 'includes/config.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title><?= $titleSite ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="robots" content="index, follow"/>
		<meta name="description" content="<?= $description; ?>"/>
        <meta name="base" content="<?= $configBase ?>">

		<meta itemprop="name" content="<?= $titleSite ?>"/>
        <meta itemprop="description" content="<?= $description; ?>"/>
        <meta itemprop="image" content="<?= $configBase ?><?= IMAGE ?>"/>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">

		<link href="<?= $configBase; ?>" rel="base" >
		
        <script src="<?= $configBase; ?>js/jquery.js"></script>
	</head>
<body>
    <div class="container">
        <h1>Página Principal</h1>
        <P>Essa é a primeira página do meu projeto estudando GITHUB</P>
        <P><h1>Teste H1</h1></P>
        <P><h2>Teste H2</h2></P>
        <P><h3>Teste H3</h3></P>
        <P><h4>Teste H4</h4></P>
        <P><h5>Teste H5</h5></P>
        <P><h6>Teste H6</h6></P>
    </div>
    <p>SÓ ALTERAR PRA VER A DIFERENÇA ACONTECENDO</p>

</body>
</html>