<?php
class Member extends Database
{
    function get_member($user)
    {
        $sql = "select * from tblaccount where username = '" . $user . "'";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function register($email, $user, $password, $confirm_password)
    {
        // $email = $_POST['Email'];
        // $user = $_POST['user'];
        // $password = $_POST['password'];
        // $confirm_password = $_POST['confirm_pass'];
        if ($password == $confirm_password) {
            $sql = "insert into tblaccount(username, password, email, ImgAvatar, Gioitinh, Ngaysinh, idquyen) 
                    values('" . $user . "','" . $password . "','" . $email . "', DEFAULT, null, null, 2)";
            $sqluser = mysqli_query($this->conn, "select * from tblaccount where username = '" . $user . "'");
            $sqlemail = mysqli_query($this->conn, "select * from tblaccount where email = '" . $email . "'");
            if ($sqluser->num_rows > 0) {
                return '<script> alert ("user đã tồn tại") </script>';
            } elseif ($sqlemail->num_rows > 0) {
                return '<script> alert ("email đã tồn tại") </script>';
            } elseif (mysqli_query($this->conn, $sql)) {
                return true;
            }
        }
    }
    function login($user, $pass)
    {
        $sql = "select * from tblaccount where username = '" . $user . "' and password ='" . $pass . "'";
        $login = mysqli_query($this->conn, "select * from tblaccount where username = '" . $user . "' and password ='" . $pass . "'");
        if (mysqli_num_rows($login) > 0)
        {
            return true;
        }
           

        return false;
    }
}
