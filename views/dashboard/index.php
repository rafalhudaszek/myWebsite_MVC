<div class="desktop">
	    <div class="container-fluid">
	    	
	    	<img src="<?php echo URL; ?>public/img/Union 8.png" id="union8-2">
	    	<div class="row">
	    		<div class="offset-xl-1 col-xl-2">
	    			<img src="<?php echo URL; ?>public/img/Hej.png" id="hej">
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="offset-xl-1 col-xl-4">
	    			<div class="text" style="margin-top: 5vh; margin-bottom: 5vh; font-size: 24px">
	    				<span style="font-weight: 700;">
	    					Zarejestruj się lub zaloguj, żeby móc <br>w pełni korzystać z moich gier!
	    				</span>
	    			</div>
	    			<div class="text" style="margin-top: 2vh;">
	    				Dzięki rejestracji będziesz mógł/mogła widzieć swoje wyniki na tablicy wyników oraz będziesz mógł/mogła je poprawiać.<br><br>Rejestracja nie jest jednak wymagana.<br> Baw się dobrze!
	    			</div>
	    		</div>
	    		<div class="offset-xl-2 col-xl-3">
	    			<?php
						if(isset($_SESSION['user']))
						{
							echo '<div class="text" style=" text-align: left;">'.'<span style="font-weight: 700;">'.'Witaj '.$_SESSION['user'].'!'.'</span>'.'<br>'.'Teraz będziesz miał możliwość zapisywania swoich wyników.'.'Wylogowanie nastąpi za:</div>';
						}
					?>
						<div id="timer"></div>
					<form action="dashboard/logout" method="post">
						<input id="wylInput" class="button" type="submit" class="button" name="Wyloguj" value="Wyloguj" style="margin-top: 5vh;" />
					</form>
	    		</div>
	    	</div>
	    </div>