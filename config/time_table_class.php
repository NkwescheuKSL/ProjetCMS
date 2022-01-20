<?php
 class time_table {
    public $id;
    public $course_hour;
    public $course_day;
    public $semester;
    public $subject;
    public $teacher;
    public $branch;
    public $amphi;
    public $branch_level;

     public static function find_all_time_table(){
         $result_set = self::find_this_query("SELECT * FROM time_table");
         return $result_set;
     }

     public static function find_time_table_by_id($id_time_table){
        $result_set = self::find_this_query("SELECT * FROM time_table WHERE id = $id_time_table");
        $time_table_found = mysqli_fetch_array($result_set);
        return $time_table_found;
    }

    public static function find_time_table_by_transition($branch_value, $level_value){

        $result_set = self::find_this_query("SELECT * FROM time_table WHERE branch = '{$branch_value}' AND branch_Level = '{$level_value}' ");
        return $result_set;
    }

    public static function find_course($branch_value, $level_value, $hours, $days){

        $result_set = self::find_this_query("SELECT * FROM time_table WHERE branch = '{$branch_value}' AND branch_Level = '{$level_value}' AND course_day ='{$days}' AND course_hour = '{$hours}' ");
        $course_found = mysqli_fetch_array($result_set);
        return $course_found;
    }

    public static function time_table_count(){
        $result_set = self::find_all_time_table();
        $count= mysqli_num_rows($result_set);
        return $count;
    }

    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
    }

    public static function ue_table_test($test){
        if(!$test){
            echo"";
        }else{
            echo $test['subject_code'];
            echo"<br>";
            echo"(";
            echo $test['amphi'];
            echo")";
        }
    }

    public  function update(){
        global $database;
        $conn=$database->connection();
        $sql = "UPDATE time_table SET subject_code = '{$database->escape_string($this->subject_code)}',
        teacher = '{$database->escape_string($this->teacher)}',
        semester = '{$database->escape_string($this->semester)}',
        branch = '{$database->escape_string($this->branch)}',
        branch_level = '{$database->escape_string($this->branch_level)}',
        amphi = '{$database->escape_string($this->amphi)}',
        course_day = '{$database->escape_string($this->course_day)}',
        course_hour = '{$database->escape_string($this->course_hour)}'
        WHERE id = {$this->id} ";
        $update_time_table = $database->query($sql);
        if(!$update_time_table){
            die("query failed".mysqli_error($conn));
        }
    }

 }

?>
