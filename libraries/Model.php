<?php

class Model
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function __destruct()
    {
        $this->db->close();
    }

}

?>



<?php
/*
class Model
{
    public function __construct()
    {
        echo 'tu bedzie baza danych';
        //database
        
        require_once "model/connecting.php";
        $conn = new mysqli($host, $db_user, $db_password, $db_name);
        if($conn->connect_errno != 0)
        {
            require_once 'controllers/error.php';
            $firstController = new Error("that URL dont exist");
        }
        else
        {
            echo 'dobre polaczenie';
        }
    }

    public function __destruct()
    {
        $conn->close();
    }

}
*/
?>