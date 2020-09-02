<?php 

class Registration_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
        session_start();


		if(isset($_POST["email"]))
		{
			$walidacja = true;

			//nickname
			$nick = $_POST["nick"];

			if(ctype_alnum($nick) == false)
			{
				$walidacja = false;
				$_SESSION["e_nick"] = "Nick moze składac sie tylko z liter i cyfr";
			}

			if(( strlen($nick)<3) || (strlen($nick) > 8))
			{
				$walidacja = false;
				$_SESSION["e_nick"] = "Nick jest za długi bądź za krótki";
			}

			//email

			$email = $_POST["email"];
			$emailA = filter_var($email, FILTER_SANITIZE_EMAIL);
			if((filter_var($emailA, FILTER_VALIDATE_EMAIL)==false) || ($emailA != $email))
			{
				$walidacja = false;
				$_SESSION["e_email"] = "Podaj poprawny adres e-mail"; 
			}

			//haslo

			$haslo1 = $_POST["haslo1"];
			$haslo2 = $_POST["haslo2"];

			if((strlen($haslo1) < 8) || (strlen($haslo1) > 20))
			{
				$walidacja = false;
				$_SESSION["e_haslo"] = "haslo musi miec od 8 do 20 znaków"; //e_haslo???	
			}


			if($haslo1 != $haslo2)
			{
				$walidacja = false;
				$_SEESION["e_haslo"] = "hasla musza być takie same"; 
			}

			

			$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
			try
			{
				/*$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
				if($polaczenie->connect_errno != 0)
				{
					throw new Exception(mysqli_connect_errno());
				}
				else
				{*/
				$tmp = $this->db->prepare("SELECT id FROM uzytkownicy WHERE email=:email");
				$tmp->execute(array(
					':email' => $_POST['email']
					));
				if($tmp->rowCount() > 0)
				{
					$walidacja = false;
					$_SESSION["e_email"] = "Taki email juz istnieje"; 
				}

				$tmp = $this->db->prepare("SELECT id FROM uzytkownicy WHERE user=:login");
				$tmp->execute(array(
					':login' => $_POST['nick']
					));
				if($tmp->rowCount() > 0)
				{
					$walidacja = false;
					$_SESSION["e_nick"] = "Taki nick juz istnieje"; 
				}
				

				if($walidacja == true)
				{
					$tmp = $this->db->prepare("INSERT into uzytkownicy values(NULL,'$nick', '$haslo_hash', '$email', 0, 0, 0)");
					$tmp->execute();
					$_SEESION['zalogowany'] = false;	
					$_SESSION["udanarejestracja"] = true;
					$_SESSION["user"] = $nick;
					$_SESSION["loginDate"] = date("Y-m-d H:i:s");
					$_SESSION["duration"] =  5;
					$_SESSION["endTime"] = date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes', strtotime($_SESSION["loginDate"])));
					unset($_SESSION['e_nick']);
					unset($_SESSION['e_email']);
					unset($_SESSION['e_haslo']);
					if(!headers_sent()) 
					{
						header('Location: ../dashboard');
						exit;
					} 
					else 
					{
						echo '<script type="text/javascript">';
						echo 'window.location.href="../dashboard";';
						echo '</script>';
						exit;
					}
				}
				else
				{
					$_SESSION["nieUdanaRejestracja"] = false;
					if (!headers_sent()) 
					{
						header('Location: ../registration');
						exit;
					} 
					else 
					{
						echo '<script type="text/javascript">';
						echo 'window.location.href="../registration";';
						echo '</script>';
						exit;
					}
				}
			}
			catch(Exception $e)
			{
				echo '<span style="color: red;"Bład serwera!></span>';
			}

		}
	}
}

?>
