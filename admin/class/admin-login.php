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

    function admin_logout(){
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_email']);
    }


    function add_category($data){
        $ctg_name = $data['ctg_name'];
        $ctg_description = $data['ctg_description'];
        $ctg_status = $data['ctg_status'];

        $qs = "INSERT INTO category(ctg_name, ctg_description, ctg_status) VALUE('$ctg_name', '$ctg_description', $ctg_status)";

        if(mysqli_query($this->conn, $qs)){
           $msg = "Category Added Successfully.";
           return $msg;
        }else{
            $msg = "Category Not Added Successfully.";
           return $msg;
        }
    }


    function manage_category(){
        $qs = "SELECT * FROM category";

        if(mysqli_query($this->conn, $qs)){
            $ctg_info = mysqli_query($this->conn, $qs);
            return $ctg_info;
        }
    }
}















?>