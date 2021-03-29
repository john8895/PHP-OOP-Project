<?php

class User
{
    public static function find_all_users()
    {
        global $database;
        $result =$database->query("SELECT * FROM `users`");
//        echo "result:" . $result;
        return $result;
    }

    public static function find_user_by_id($id)
    {
        global $database;
        $result_set = $database->query("SELECT * FROM users WHERE id=" . $id);
        $found_user = mysqli_fetch_array($result_set);
        return $found_user;

    }
}