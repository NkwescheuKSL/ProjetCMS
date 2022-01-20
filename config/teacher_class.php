<?php
 class teacher {

    public $id;
    public $teacher_name;
    public $teacher_birthday;
    public $teacher_gender;
    public $teacher_city;
    public $teacher_email;
    public $teacher_speciality;
    public $teacher_phone;
    public $teacher_password;

     public static function find_all_teachers(){
         $result_set = self::find_this_query("SELECT * FROM teachers");
         return $result_set;
     }

     public static function find_teacher_by_id($id_teacher){
        $result_set = self::find_this_query("SELECT * FROM teachers WHERE teacher_id = $id_teacher");
        $teacher_found = mysqli_fetch_array($result_set);
        return $teacher_found;
    }


    public static function teacher_count(){
        $result_set = self::find_all_teachers();
        $count= mysqli_num_rows($result_set);
        return $count;
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

    public  function create(){
        global $database;
        $conn=$database->connection();
        $sql = "INSERT INTO teachers (teacher_name, teacher_speciality, teacher_birthday, teacher_gender, teacher_city, teacher_email, teacher_phone, teacher_branch, teacher_level, teacher_password)";
        $sql .= "VALUES ('";
        $sql .= $database->escape_string($this->teacher_name) . "', '";
        $sql .= $database->escape_string($this->teacher_speciality) . "', '";
        $sql .= $database->escape_string($this->teacher_birthday) . "', '";
        $sql .= $database->escape_string($this->teacher_gender) . "', '";
        $sql .= $database->escape_string($this->teacher_city) . "', '";
        $sql .= $database->escape_string($this->teacher_email) . "', '";
        $sql .= $database->escape_string($this->teacher_phone) . "', '";
        $sql .= $database->escape_string($this->teacher_password) . "')";
        $create_teacher = $database->query($sql);
        if(!$create_teacher){
            die("query failed".mysqli_error($conn));
        }
    }

    public  function update(){
        global $database;
        $conn=$database->connection();
        $sql = "UPDATE teachers SET teacher_name = '{$database->escape_string($this->teacher_name)}',
        teacher_birthday = '{$database->escape_string($this->teacher_birthday)}',
        teacher_city = '{$database->escape_string($this->teacher_city)}',
        teacher_email = '{$database->escape_string($this->teacher_email)}',
        teacher_phone = '{$database->escape_string($this->teacher_phone)}',
        teacher_speciality = '{$database->escape_string($this->teacher_speciality)}',
        teacher_password = '{$database->escape_string($this->teacher_password)}'
        WHERE teacher_id = {$this->id} ";
        $update_teacher = $database->query($sql);
        if(!$update_teacher){
            die("query failed".mysqli_error($conn));
        }
    }

 }
?>