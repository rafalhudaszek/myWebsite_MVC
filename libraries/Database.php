<?php

class Database extends PDO
{
	public function __construct()
	{
		parent::__construct('mysql:dbname=rafalhud_portfolio; host=localhost', 'rafalhud_raf', '7778451223abA');
	}
}


?>
