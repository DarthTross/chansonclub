<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Клуб любителей шансона</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/calc.css">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<style>
			@font-face {
			font-family: 'Azoft Sans';
			src: url('fonts/Azoft Sans.ttf'); }
			@font-face{
			font-family: 'NRP';
			src: url('fonts/NRP.ttf');
			}
		</style>
	</head>
	<body id="AVG">
		<?php require 'blocks/header.php' ?>
    <div id="BASE">
      <div class="calculator">
    <!-- CALCULATOR FORM -->
      <form class="calculator__form">
        <!-- CALCULATOR ROW -->
        <div class="calculator__row">
            <input class="calculator__display" id="display" type="text" disabled />
        </div>
        <!-- CALCULATOR ROW -->
        <div class="calculator__row">
            <button type="button" value="c" class="calculator__key calculator__clear">C</button>
            <button type="button" value="<--" class="calculator__key calculator__backspace">Del</button>
            <button type="button" value="^3" class="calculator__key calculator__power">^3</button>
            <button type="button" value="+" class="calculator__key calculator__button">+</button>
        </div>
        <!-- CALCULATOR ROW -->
        <div class="calculator__row">
            <button type="button" value="9" class="calculator__key calculator__button">9</button>
            <button type="button" value="8" class="calculator__key calculator__button">8</button>
            <button type="button" value="7" class="calculator__key calculator__button">7</button>
            <button type="button" value="-" class="calculator__key calculator__button">-</button>
        </div>
        <!-- CALCULATOR ROW -->
        <div class="calculator__row">
            <button type="button" value="6" class="calculator__key calculator__button">6</button>
            <button type="button" value="5" class="calculator__key calculator__button">5</button>
            <button type="button" value="4" class="calculator__key calculator__button">4</button>
            <button type="button" value="*" class="calculator__key calculator__button">*</button>
        </div>
        <!-- CALCULATOR ROW -->
        <div class="calculator__row">
            <button type="button" value="3" class="calculator__key calculator__button">3</button>
            <button type="button" value="2" class="calculator__key calculator__button">2</button>
            <button type="button" value="1" class="calculator__key calculator__button">1</button>
            <button type="button" value="/" class="calculator__key calculator__button">/</button>
        </div>
        <!-- CALCULATOR ROW -->
        <div class="calculator__row">
            <button type="button" value="0" class="calculator__key calculator__button">0</button>
            <button type="button" value="." class="calculator__key calculator__button">.</button>
            <button type="button" value="=" class="calculator__key calculator__key--equal">=</button>
        </div>
    </form>
  </div>
</div>
		<?php require "blocks/footer.php" ?>
		</div>
    <script async src='js/calc.js'></script>
	</body>
</html>
