<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Клуб любителей шансона</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
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
	            <div class="carousel">
                    <div class="carousel__content">
                        <div class="item">
                            <img src="images/1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/5.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/6.jpg" alt="">
                        </div>
                    </div>
                    <div class="carousel__nav">
                        <a href="#" class="nav nav--left">Предыдущее</a>
                        <a href="#" class="nav nav--right">Следующее</a>
                    </div>
                </div>
            </div>
			<?php require "blocks/footer.php" ?>
		</div>
		<script src='js/jquery.min.js'></script>
    <script src='js/jquery.transit.min.js'></script>
    <script src="js/index.js"></script>
	</body>
</html>
