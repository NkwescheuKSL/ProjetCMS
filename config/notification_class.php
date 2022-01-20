<?php
 class notification {

    public $id;
    public $notify_title;
    public $notify_text;
    public $notify_date;

    public static function find_all_notifications(){
        $result_set = self::find_this_query("SELECT * FROM notifications ORDER BY notify_id DESC");
        return $result_set;
    }

    public static function notification_count(){
        $result_set = self::find_all_notifications();
        $count= mysqli_num_rows($result_set);
        return $count;
    }

    public  function escape_string($string){
        $escape_string = mysqli_real_escape_string($this->connection, $string);
        return $escape_string;
    }

    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
    }

    public  function create(){
        global $database;
        $conn=$database->connection();
        $sql = "INSERT INTO notifications (notify_title, notify_date, notify_text)";
        $sql .= "VALUES ('{$database->escape_string($this->notify_title)}',
        now(),
        '{$database->escape_string($this->notify_txt) }')";
        $save_mail = $database->query($sql);
        if(!$save_mail){
            die("query failed".mysqli_error($conn));
        }
    }

    public  function update($count){
        global $database;
        $conn=$database->connection();
        $sql = "UPDATE others SET
        other_count = '{$database->escape_string($count)}'
        WHERE other_id = 1 ";
        $update_notify = $database->query($sql);
        if(!$update_notify){
            die("query failed".mysqli_error($conn));
        }
    }
 }
?>