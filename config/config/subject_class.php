<?php
 class subject {
    public $id;
    public $subject_name;
    public $subject_credit;
    public $subject_code;
    public $subject_title;
    public $filiere;
    public $levels;
    public $pdf;
    public $film_img;
    public $semester;
    public $teacher;
    public $subject_branch;
    public $branch_level;

     public static function find_all_subjects(){
         $result_set = self::find_this_query("SELECT * FROM subjects");
         return $result_set;
     }
     public static function find_all_course(){
        $result_set = self::find_this_query("SELECT * FROM course");
        return $result_set;
    }
     public static function find_subject_by_id($id_subject){
        $result_set = self::find_this_query("SELECT * FROM subjects WHERE subject_id = $id_subject");
        $subject_found = mysqli_fetch_array($result_set);
        return $subject_found;
    }

    public static function get_subject_credit($subject){
        $result_set = self::find_this_query("SELECT * FROM subjects WHERE subject_name = '$subject' ");
        $credit_found = mysqli_fetch_array($result_set);
        return $credit_found;
    }

    public static function find_subject_by_transition($branch_value, $level_value){

        $result_set = self::find_this_query("SELECT * FROM subjects WHERE subject_branch = '{$branch_value}' AND branch_Level = '{$level_value}' ");
        return $result_set;
    }

    public static function subject_count(){
        $result_set = self::find_all_subjects();
        $count= mysqli_num_rows($result_set);
        return $count;
    }

    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
    }

	public  function saveRecords($subject_name, $subject_credit, $subject_title, $subject_branch, $branch_level, $semester, $teacher){
        global $database;
	   $conn=$database->connection();
	   mysqli_query($conn,"INSERT INTO subjects (subject_name, subject_credit, subject_title, subject_branch, branch_level, semester, teacher) VALUES('{$subject_name}','{$subject_credit}','{$subject_branch}','{$branch_level}','{$semester}','{$teacher}' )");
	}
    public  function create_course(){
        global $database;
        $conn=$database->connection();
        $sql = "INSERT INTO course (subject_code, fiiliere, subject_pdf, subject_title, subject_level)";
        $sql .= "VALUES ('";
        $sql .= $database->escape_string($this->subject_code) . "', '";
        $sql .= $database->escape_string($this->filiere) . "', '";
        $sql .= $database->escape_string($this->pdf) . "', '";
        $sql .= $database->escape_string($this->subject_title) . "', '";
        $sql .= $database->escape_string($this->levels) . "')";
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
        $sql = "UPDATE subjects SET subject_name = '{$database->escape_string($this->subject_name)}',
        subject_credit = '{$database->escape_string($this->subject_credit)}',
        subject_title = '{$database->escape_string($this->subject_title)}',
        subject_branch = '{$database->escape_string($this->subject_branch)}',
        branch_level = '{$database->escape_string($this->branch_level)}',
        semester = '{$database->escape_string($this->semester)}',
        teacher = '{$database->escape_string($this->teacher)}'
        WHERE subject_id = {$this->id} ";
        $update_subject = $database->query($sql);
        if(!$update_subject){
            die("query failed".mysqli_error($conn));
        }
    }

 }

?>
