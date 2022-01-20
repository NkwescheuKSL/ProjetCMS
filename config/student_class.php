<?php
 class student {

    var $get_branch;
    public $id;
    public $student_key;
    public $student_name;
    public $student_birthday;
    public $student_gender;
    public $student_city;
    public $student_email;
    public $student_phone;
    public $student_branch;
    public $student_level;
    public $student_password;

     public static function find_all_students(){
         $result_set = self::find_this_query("SELECT * FROM students");
         return $result_set;
     }

     public static function find_student_by_id($id_student){
        $result_set = self::find_this_query("SELECT * FROM students WHERE student_id = $id_student");
        $student_found = mysqli_fetch_array($result_set);
        return $student_found;
    }

    public static function find_student_by_transition($branch_value, $level_value){

        $result_set = self::find_this_query("SELECT * FROM students WHERE student_branch = '{$branch_value}' AND student_Level = '{$level_value}' ORDER BY student_name ASC ");
        return $result_set;
    }

    public static function student_count(){
        $result_set = self::find_all_students();
        $count= mysqli_num_rows($result_set);
        return $count;
    }

    public static function male_student_count(){
        $result_set = self::find_this_query("SELECT * FROM students WHERE student_gender = 'male' ");
        $count= mysqli_num_rows($result_set);
        return $count;
    }

    public static function female_student_count(){
        $result_set = self::find_this_query("SELECT * FROM students WHERE student_gender = 'female' ");
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
        $sql = "INSERT INTO students (student_key, student_name, student_birthday, student_gender, student_city, student_email, student_phone, student_branch, student_level, student_password)";
        $sql .= "VALUES ('";
        $sql .= $database->escape_string($this->student_key) . "', '";
        $sql .= $database->escape_string($this->student_name) . "', '";
        $sql .= $database->escape_string($this->student_birthday) . "', '";
        $sql .= $database->escape_string($this->student_gender) . "', '";
        $sql .= $database->escape_string($this->student_city) . "', '";
        $sql .= $database->escape_string($this->student_email) . "', '";
        $sql .= $database->escape_string($this->student_phone) . "', '";
        $sql .= $database->escape_string($this->student_branch) . "', '";
        $sql .= $database->escape_string($this->student_level) . "', '";
        $sql .= $database->escape_string($this->student_password) . "')";
        $create_student = $database->query($sql);
        if(!$create_student){
            die("query failed".mysqli_error($conn));
        }
        if($create_student){
            echo"<div class='alert alert-success d-flex align-items-center' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
            <div class='txt_msg-info'>
                  Student Added
            </div>
          </div>";
        }
    }

    public  function update(){
        global $database;
        $conn=$database->connection();
        $sql = "UPDATE students SET student_key = '{$database->escape_string($this->student_key)}',
        student_name = '{$database->escape_string($this->student_name)}',
        student_birthday = '{$database->escape_string($this->student_birthday)}',
        student_city = '{$database->escape_string($this->student_city)}',
        student_email = '{$database->escape_string($this->student_email)}',
        student_phone = '{$database->escape_string($this->student_phone)}',
        student_password = '{$database->escape_string($this->student_password)}'
        WHERE student_id = {$this->id} ";
        $update_student = $database->query($sql);
        if(!$update_student){
            die("query failed".mysqli_error($conn));
        }
    }

 }
?>