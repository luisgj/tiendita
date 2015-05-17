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
	<core-toolbar style="background: #8ED0E8;">
		<img id="logo1" src="/res/img/LogoCirculo.png">
    	<img id="logo2" src="/res/img/LogoTiendapp.png">
    	<input id="input1" type="text" name="" value="" placeholder="¿QUÉ SE TE ANTOJA?">
    	<img id="menu" src="/res/img/Menu.png">
    	<img id="userlogin" src="/res/img/LogIn.png">
 	</core-toolbar>
 	<paper-shadow class="card" style="padding:5px" z="3">
      <map-stores-mexico></map-stores-mexico>
    </paper-shadow>
  <grid-cards-animated></grid-cards-animated>
</body>
</html>
