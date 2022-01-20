<?php 

class database{

	var $host="localhost";
	var $user="root";
	var $pass="";
	var $db="school_manage";
    
	public function connection()
	{
	$connect=mysqli_connect($this->host,$this->user,$this->pass,$this->db); 
	return $connect;
	}

    public function query($sql){
        $result = mysqli_query($this->connection(), $sql);
     return $result;
    }
    private function confirm_result($result){
        if(!$result){
            die("query failed");
        }
    }
    public function escape_string($string){
        $escape = mysqli_real_escape_string($this->connection(), $string);
     return $escape;
    }

    public function the_insert_id(){
         
        return mysqli_insert_id($this->connection());
    }
}

$database = new database();
?>