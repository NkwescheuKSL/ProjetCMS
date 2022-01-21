<?php
 class admin {

    public $email;
    public $password;

     public static function find_all_admins(){
         $result_set = self::find_this_query("SELECT * FROM admin");
         return $result_set;
     }

     public static function find_admin_by_id($id_admin){
        $result_set = self::find_this_query("SELECT * FROM admin WHERE admin_id = $id_admin");
        $admin_found = mysqli_fetch_array($result_set);
        return $admin_found;
    }

    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
    }

    public  function escape_string($string){

        $escape_string = mysqli_real_escape_string($this->connection, $string);
        return $escape_string;
    }
/*
function connecter()
					{
						try
						{
							$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
							$bdd = new PDO('mysql:host=localhost;dbname=school_manage', 'root', '', $pdo_options);
							//echo "Connexion reussi";
							$bdd->query("SET NAMES UTF8");
							return $bdd;
						}
						catch (Exception $e)
						{
								die('Erreur : ' . $e->getMessage());
						}

					}
					
				function adminLogin($email,$password){
					$bdd = connecter();
					$req = $bdd->prepare("SELECT * FROM admin WHERE email = '$email' AND password = '$password' ");
					$p = $req->execute();
					$param = $req->fetch();
					if(!$param)
					{
						header("Location:http://localhost/Projet(system_management)/login.php?/");
						exit();
					}
				}
*/
	


 }
?>