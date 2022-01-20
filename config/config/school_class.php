<?php
 class school_class {
    public $id;
    public $class_branch;
    public $subject_count;
    public $student_count;
    public $result_count;
    public $branch_level;
    public $count_std;

     public static function find_all_class(){
         $result_set = self::find_this_query("SELECT * FROM class");
         return $result_set;
     }

     public static function find_class_by_id($id_class){
        $result_set = self::find_this_query("SELECT * FROM classs WHERE class_id = $id_class");
        $class_found = mysqli_fetch_array($result_set);
        return $class_found;
    }

    public static function find_all_class_level(){
        $result_set = self::find_this_query("SELECT * FROM class WHERE branch_level = 'L1 L2 L3' ");
        return $result_set;
    }

    public static function find_class_by_level($level){
        $result_set = self::find_this_query("SELECT * FROM classs WHERE branch_level = $level " );
        $class_found = mysqli_fetch_array($result_set);
        return $class_found;
    }

    public static function find_class_by_branch($branch_value){
        $result_set = self::find_this_query("SELECT * FROM class WHERE class_branch = '{$branch_value}' ");
        return $result_set;
    }
    

    public static function branch_student_count($branch){
        $result_set = self::find_this_query("SELECT * FROM students WHERE student_branch = '$branch' ");
        $count= mysqli_num_rows($result_set);
        return $count;
    }

    public static function level_student_count($branch, $level){
        $result_set = self::find_this_query("SELECT * FROM students WHERE student_branch = '$branch' AND student_level = '$level' ");
        $count= mysqli_num_rows($result_set);
        return $count;
    }

    public static function update_student_count($count, $branch){
        global $database;
        $conn=$database->connection();
        $sql = "UPDATE class SET student_count = '{$count}'
        WHERE class_branch = '$branch'  AND branch_level = 'L1 L2 L3' ";
        $update_std_count = $database->query($sql);
        if(!$update_std_count){
            die("query failed".mysqli_error($conn));
        }
    }

    public static function level_update_student_count($count, $branch, $level){
        global $database;
        $conn=$database->connection();
        $sql = "UPDATE class SET student_count = '{$count}'
        WHERE class_branch = '$branch' AND branch_level = '$level' ";
        $update_std_count = $database->query($sql);
        if(!$update_std_count){
            die("query failed".mysqli_error($conn));
        }
    }

    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
    }

    public  function update(){
        global $database;
        $conn=$database->connection();
        $sql = "UPDATE class SET subject_branch = '{$database->escape_string($this->subject_branch)}',
        branch_level = '{$database->escape_string($this->branch_level)}',
        student_count = '{$database->escape_string($this->student_count)}',
        subject_count = '{$database->escape_string($this->subject_count)}',
        result_count = '{$database->escape_string($this->result_count)}'
        WHERE class_id = {$this->id} ";
        $update_class = $database->query($sql);
        if(!$update_class){
            die("query failed".mysqli_error($conn));
        }
    }

 }

?>
