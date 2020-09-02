<?php 

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{

		session_start();
		if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
		{
			if (!headers_sent()) 
			{
				header('Location: ../index');
				exit;
			} 
			else 
			{
				echo '<script type="text/javascript">';
				echo 'window.location.href="../index";';
				echo '</script>';
				exit;
			}
		}


		$login = $_POST["login"];
		$haslo = $_POST["haslo"];

		$login = htmlentities($login, ENT_QUOTES, "UTF-8");	

		$tmp = $this->db->prepare("SELECT * FROM uzytkownicy WHERE user=:login");
		$tmp->execute(array(
			':login' => $_POST['login']
		));

		$ilosc_wierszy = $tmp->rowCount();

		if($ilosc_wierszy > 0)
		{
			$wiersz = $tmp->fetch( PDO::FETCH_ASSOC );
			
			if(password_verify($haslo, $wiersz["pass"]))
			{
				$_SESSION["zalogowany"] = true;

				
				$_SESSION["id"] = $wiersz["id"]; 
				$_SESSION["user"] = $wiersz["user"];
				$_SESSION["loginDate"] = date("Y-m-d H:i:s");
				$_SESSION["duration"] =  5;
				//$_SESSION["endTime"] = date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes', strtotime($_SESSION["loginDate"])));
				
				unset($_SESSION["blad"]);
				//$rezultat->free_result(); //zwalnianie pobranych danych
				if (!headers_sent()) {
					header('Location: ../dashboard');
					exit;
				} else {
			
					echo '<script type="text/javascript">';
					echo 'window.location.href="../dashboard";';
					echo '</script>';
					exit;
				}
				
			}
			else
			{
				$_SESSION["blad"] = 'Niepoprawne haslo';
				if (!headers_sent()) {
					header('Location: ../login');
					exit;
				} else {
			
						echo '<script type="text/javascript">';
						echo 'window.location.href="../login";';
						echo '</script>';
						exit;
				}
			}
		}
		else
		{
			$_SESSION["blad"] = 'Niepoprawny login';
			if (!headers_sent()) 
			{
				header('Location: ../login');
				exit;
			} 
			else 
			{
		
				echo '<script type="text/javascript">';
				echo 'window.location.href="../login";';
				echo '</script>';
				exit;
			}
		}
	}
}

?>
