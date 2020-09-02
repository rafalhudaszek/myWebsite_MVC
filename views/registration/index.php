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
	    			<form action="registration/run" method="post">	
						<input id="rejNick" type="text" name="nick" placeholder="login" style="margin-top: 10vh;" />
						<?php
						if(isset($_SESSION['e_nick']))
						{

							echo '<div class="error" style="padding: 0.25vw;padding-left:1vw;">'.$_SESSION['e_nick'].'</div>';
							//unset($_SESSION['e_nick']);
						}
						else
						{
							echo '<div class="error" style="padding: 0.8vw;padding-left:1vw;"></div>';
						}
						?>

						<input id="rejEmail" type="text" name="email"  placeholder="email"/>
						<?php
						if(isset($_SESSION['e_email']))
						{

							echo '<div class="error" style="padding: 0.25vw;padding-left:1vw;">'.$_SESSION['e_email'].'</div>';
							//unset($_SESSION['e_nick']);
						}
						else
						{
							echo '<div class="error" style="padding: 0.8vw;padding-left:1vw;"></div>';
						}
						?>

						<input id="rejHaslo1" type="password" name="haslo1" placeholder="haslo"/>
						<?php
						if(isset($_SESSION['e_haslo']))
						{

							echo '<div class="error" style="padding: 0.25vw;padding-left:1vw;">'.$_SESSION['e_haslo'].'</div>';
							//unset($_SESSION['e_nick']);
						}
						else
						{
							echo '<div class="error"style="padding: 0.8vw;padding-left:1vw;"></div>';
						}
						?>



						<input id="rejHaslo2" type="password" name="haslo2"  placeholder="powtórz haslo"/>

						

						<input id="rejInput" type="submit" value="Zarejestruj się" style="margin-top:4vh; margin-bottom:2vh;"/><br>
						<a href="login">Masz już konto?</a>
					</form>
	    		</div>
	    	</div>
	    </div>