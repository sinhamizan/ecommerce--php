<?php

class adminLogin{
    private $conn;

    function __construct(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "root";
        $dbname = "php-ecom";

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    }

    function admin_login_data($data){
        $admin_email = $data['admin-email'];
        $admin_pass = $data['admin-pass'];

        $query = "SELECT * FROM adminLogin WHERE admin_email='$admin_email' AND admin_pass='$admin_pass'";

        if(mysqli_query($this->conn, $query)){
            $result = mysqli_query($this->conn, $query);
            $admin_info = mysqli_fetch_assoc($result);

            if($admin_info){
                header('location:dashboard.php');

                session_start();
                $_SESSION['admin_id'] = $admin_info['id'];
                $_SESSION['admin_email'] = $admin_info['admin_email'];
            }
        }else{
            $msg = "Admin Not Found!";
            return $msg;
        }
    }
}















?>