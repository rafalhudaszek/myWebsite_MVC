<?php 

class Dashboard_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function logout()
	{
		session_destroy();
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
}

?>
