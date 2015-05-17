<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tiendapp</title>
	<script src="/res/components/webcomponentsjs/webcomponents.js"></script>

	<link rel="import" href="/res/components/map-stores-mexico/map-stores-mexico.html">
	<link rel="import" href="/res/components/font-roboto/roboto.html">
	<link rel="import" href="/res/components/core-icons/core-icons.html">
	<link rel="import" href="/res/components/core-toolbar/core-toolbar.html">
	<link rel="import" href="/res/components/paper-icon-button/paper-icon-button.html">
	<link rel="import" href="/res/components/paper-input/paper-input-decorator.html">
	<link rel="import" href="/res/components/paper-input/paper-input.html">
	<link rel="import" href="/res/components/grid-cards-animated/grid-cards-animated.html">

	<link rel="stylesheet" type="text/css" href="/res/styles.css">
</head>
<body unresolved>
	<core-toolbar style="background: #f1f1f2;">
	<img id="logo1" src="/res/im/LogoCirculo.png">
    	<span flex>Tiendapp</span>
    	<paper-input label="¿Que andas buscando?" floatingLabel style="width:30%; margin-right:4em; margin-bottom:0.7em"></paper-input>
 	</core-toolbar>
  <map-stores-mexico></map-stores-mexico>
  <grid-cards-animated></grid-cards-animated>
</body>
</html>
