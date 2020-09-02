<?php
	session_start();
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true) && $_SESSION['url'] != 'dashboard')
	{

		if (!headers_sent()) {
			header('Location: dashboard');
			exit;
		} else {
	
			echo '<script type="text/javascript">';
			echo 'window.location.href="dashboard";';
			echo '</script>';
			exit;
		}
	}
	if ((!(isset($_SESSION['zalogowany'])) || ($_SESSION['zalogowany']!=true)) && $_SESSION['url'] == 'dashboard')
	{
		if (!headers_sent()) {
			header('Location: login');
			exit;
		} else {
	
			echo '<script type="text/javascript">';
			echo 'window.location.href="login";';
			echo '</script>';
			exit;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafał Hudaszek</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
   	<link rel="stylesheet" href="<?php echo URL; ?>public/css/sty.css">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet"> 
	<script type="text/javascript" src="<?php echo URL; ?>public/js/jQuery.js"></script>
	<?php 
		if($_SESSION['url'] == 'dashboard' || $_SESSION['url'] == 'registration' || $_SESSION['url'] == 'login')
		{
			echo '<script>$(document).ready(function()
				{
					$("#hej").get(0).scrollIntoView();
				});</script>';
		}
	?>
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
<main>
	<section class="front">
	    <div class="container-fluid">
	        <div class="bg"></div>
	        <div class="gb"></div>
        	<div class="row">
        		<div class="col-7 offset-5 col-xl-3 offset-xl-8">
        			<div id="name">Rafał Hudaszek</div>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-11 offset-1 col-xl-6 offset-xl-5">
        			<img src="<?php echo URL; ?>public/img/portfolio.png" id="portfolio" alt="portfolio">
        		</div>
        	</div>
	    </div>
	</section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-3">
            	<img src="<?php echo URL; ?>public/img/rafBlackSmall.jpg" id="face" alt="rafal photo">
            </div>
            <div class="col-12 col-sm-6 col-xl-3 offset-xl-1">
				<div class="text">
					<span style="font-weight: 700;">Witam.</span><br>
					Jestem Rafał, student państwowej
					uczelni AGH.
					  Z aspiracji, specjalista od tworzenia oraz działania aplikacji, z zainteresowań fizyk teoretyk.
				</div>
			</div>

			<div class="col-12 col-sm-6 col-xl-3 offset-xl-1">
				<div class="text">
					<spam style ="font-weight: 700;">Edukacja</spam><br>
					I LO im.<br> 
					Tadeusza Kościuszki w Myślenicach <br>
					<spam style="font-weight: 300;">Profil matematyczno - fizyczny <br>
					( 2014 - 2017 ) </spam>
					<br>
					Akademia Górniczo Hutnicza w Krakowie <br>
					<spam style="font-weight: 300;">Kierunek Informatyka Stosowana 
					<br>( 2017 - aktualnie )</spam>
				</div>
            </div>
        </div>
        <div class="row">
        	<div class="offset-4 col-8 col-xl-4 offset-xl-7">
        		<img src="<?php echo URL; ?>public/img/omnie.png" id="omnie" alt="O mnie">
        	</div>
        </div>
        <img src="<?php echo URL; ?>public/img/Union 6.png" id="union6" alt="line 6">
        <img src="<?php echo URL; ?>public/img/Union 4.png" id="union4" alt="line 4">
    </div>


    <div class="container-fluid">
    	<div class="row">
    		<div class="offset-xl-1 col-xl-3 col-sm-6 col-12">
    			<div class="text">
					<spam style ="font-weight: 700;">Języki w których mam <br>doświadczenie:</spam><br>-Fortran<br>-C<br>-C++14<br>-CSS <br> -HTML <br> <br> 
					<spam style ="font-weight: 700;">Języki w których się rozwijam: </spam><br>-Java 8 <br>-Python 3 <br>-SQL<br>-PHP <br><br>
					<spam style ="font-weight: 700;">Bibloteki:</spam> <br>-jQuery <br>-bootstrap <br>-PDO <br><br><spam style ="font-weight: 700;">FrameWork:</spam> <br>-Spring <br>-Symfony
				</div>
    		</div>
    		<div class="offset-xl-1 col-xl-3 col-sm-6 col-12">
    			<div class="text">
					Front-end, back-end, testing, security, data science. Jestem głodny wiedzy i podejmę się każdej pracy na stanowisku juniorskim.<br><br> Szybko się uczę, jestem zdeterminowany i gotowy do działania. Jako osoba ekstrawertyczna, idealnie pasuje do pracy z zespołem.
				</div>
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-12">
    			<div id="mobile">
					<div class="text">
						<span style="font-weight: 700">Hej!</span><br>
						Jeśli chcesz zagrać w moje gry i zapisać się w tabeli wyników, zapraszam Cię na wersje dekstopową mojej strony!
						<br><br>
						Zapraszam Cię także na mojego githuba gdzie możesz przejrzęć część z moich poprzednich projektów. <br>
						<a href="https://github.com/rafalhudaszek">
							<span style="font-weight: 700;">
								github.com/rafalhudaszek
							</span>
						</a>
					</div>
    			</div>
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-11 offset-1 col-xl-6 offset-xl-5">
        		<img src="<?php echo URL; ?>public/img/technologie.png" id="technologie" alt="technologie">
        	</div>
    	</div>
    	<img src="<?php echo URL; ?>public/img/Union 8.png" id="union8" alt="line 8">
    	<img src="<?php echo URL; ?>public/img/Union 7.png" id="union7" alt="line 7">

    </div>