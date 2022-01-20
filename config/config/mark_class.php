<?php
 class mark {
    public $id;
    public $CC_mark;
    public $TP_mark;
    public $EE_mark;
    public $mark_sum;
    public $get_mgp;
    public $credit;
    public $student_key;
    public $subject_name;
    public $branch;
    public $branch_level;

     public static function find_all_marks(){
         $result_set = self::find_this_query("SELECT * FROM marks");
         return $result_set;
     }

     public static function find_mark_by_key($keys){
        $result_set = self::find_this_query("SELECT * FROM marks WHERE student_key = '$keys' ");
        $mark_found = mysqli_fetch_array($result_set);
        return $mark_found;
    }
    public static function mark_table_count_by_key($keys){
        $result_set = self::find_this_query("SELECT * FROM marks WHERE student_key = '$keys' ");
        $count= mysqli_num_rows($result_set);
        return $count;
    }

    public static function find_mark_by_transition($branch_value, $level_value){

        $result_set = self::find_this_query("SELECT * FROM marks WHERE mark_branch = '{$branch_value}' AND branch_Level = '{$level_value}' ");
        return $result_set;
    }

    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
    }

    public  function get_mgp(){
        $mgp =0;
        if($this->mark_sum != 0){
            if($this->mark_sum<35){
                $mgp=0;
            }
             elseif($this->mark_sum>=35 && $this->mark_sum<40){
                 $mgp=1.0;
             }
             elseif($this->mark_sum>=40 && $this->mark_sum<45){
              $mgp=1.3;
             }
             elseif($this->mark_sum>=45 && $this->mark_sum<50){
              $mgp=1.7;
             }
             elseif($this->mark_sum>=50 && $this->mark_sum<55){
              $mgp=2;
             }
             elseif($this->mark_sum>=55 && $this->mark_sum<60){
              $mgp=2.3;
             }
             elseif($this->mark_sum>=60 && $this->mark_sum<65){
              $mgp=2.7;
             }
             elseif($this->mark_sum>=65 && $this->mark_sum<70){
              $mgp=3;
             }
             elseif($this->mark_sum>=70 && $this->mark_sum<75){
              $mgp=3.3;
             }
             elseif($this->mark_sum>=75 && $this->mark_sum<80){
              $mgp=3.7;
             }
             elseif($this->mark_sum>=80 && $this->mark_sum<=100){
              $mgp=4;
             }
        }
        return $mgp;
    }

    public static function cc_table_test($get_info){
        if(!$get_info){
            echo"0";
        }else{
            echo $get_info['CC_mark'];

        }
    }
    public static function tp_table_test($get_info){
        if(!$get_info){
            echo"0";
        }else{
            echo $get_info['TP_mark'];

        }
    }
    public static function ee_table_test($get_info){
        if(!$get_info){
            echo"0";
        }else{
            echo $get_info['EE_mark'];

        }
    }
    public static function total_table_test($get_info){
        if(!$get_info){
            echo"0";
        }else{
            echo $get_info['mark_sum'];

        }
    }


    public  function create(){
        global $database;
        $conn=$database->connection();
        $sql = "INSERT INTO marks (student_key, subject_name, subject_credit, CC_mark, TP_mark, EE_mark, mark_sum)";
        $sql .= "VALUES ('";
        $sql .= $database->escape_string($this->student_key) . "', '";
        $sql .= $database->escape_string($this->subject_name) . "', '";
        $sql .= $database->escape_string($this->credit) . "', '";
        $sql .= $database->escape_string($this->CC_mark) . "', '";
        $sql .= $database->escape_string($this->TP_mark) . "', '";
        $sql .= $database->escape_string($this->EE_mark) . "', '";
        $sql .= $database->escape_string($this->mark_sum) . "')";
        $create_mark = $database->query($sql);
        if(!$create_mark){
            die("query failed".mysqli_error($conn));
        }
        if($create_mark){
            echo"<div class='alert alert-success d-flex align-items-center' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
            <div class='txt_msg-info'>
                  mark Added
            </div>
          </div>";
        }
    }

    public  function update_mgp(){
        global $database;
        $conn=$database->connection();
        $sql = "UPDATE marks SET mgp = '{$database->escape_string($this->get_mgp)}'
        WHERE student_key = '$this->student_key' ";
        $update_mark = $database->query($sql);
        if(!$update_mark){
            die("query failed".mysqli_error($conn));
        }
    }

    public  function update(){
        global $database;
        $conn=$database->connection();
        $sql = "UPDATE marks SET CC_mark = '{$database->escape_string($this->CC_mark)}',
        TP_mark = '{$database->escape_string($this->TP_mark)}',
        EE_mark = '{$database->escape_string($this->EE_mark)}',
        mark_sum= '{$database->escape_string($this->mark_sum)}'
        WHERE student_key = '$this->student_key' ";
        $update_mark = $database->query($sql);
        if(!$update_mark){
            die("query failed".mysqli_error($conn));
        }
        if($update_mark){
            echo"<div class='alert alert-success d-flex align-items-center' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
            <div class='txt_msg-info'>
                  mark update
            </div>
          </div>";
        }
    }

 }

?>
