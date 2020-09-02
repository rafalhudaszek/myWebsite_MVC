<div class="desktop">
	    <div class="container-fluid">
	    	<h2 id="pageThree" style="font-size: 1rem;">
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
	    			<form method="post" action="login/run">
						<input id="logNick" type="text" name="login" placeholder="login" style="margin-top: 15vh;">

						<input id="logHaslo" type="password" name="haslo" placeholder="haslo" style="margin-top: 4vh;"/>
						<input id="zalInput" type="submit" value="Zaloguj sie" style="margin-top: 4vh; margin-bottom:2vh;"/><br>
						<a href="registration">Nie masz konta?</a>
						<div class="error">
							<?php
								if(isset($_SESSION['blad']))
								{
									echo $_SESSION['blad'];
								}
							?>
						</div>
					</form>
	    		</div>
	    	</div>
	    </div>