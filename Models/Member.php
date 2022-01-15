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
    function getID()
    {
        $sql = "select * from tblaccount where username = '" . $_SESSION['user'] . "'";
        $result = mysqli_query($this->conn, $sql);
        if ($result->num_rows > 0)
            while ($row = $result->fetch_assoc()) {
                return $row['idMember'];
            }
        return null;
    }
    function getName($user)
    {
        $sql = "select * from tblaccount where username = '" . $user . "'";
        $result = mysqli_query($this->conn, $sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc())
                return $row['MemberName'];
        }
    }
    function getEmail()
    {
        $sql = "select * from tblaccount where username = '" . $_SESSION['user'] . "'";
        $result = mysqli_query($this->conn, $sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc())
                return $row['email'];
        }
    }
    function AVT()
    {
        $sql = "select * from tblaccount where username = '" . $_SESSION['user'] . "'";
        $result = mysqli_query($this->conn, $sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc())
                return $row['ImgAvatar'];
        }
    }
    function BGR()
    {
        $sql = "select * from tblaccount where username = '" . $_SESSION['user'] . "'";
        $result = mysqli_query($this->conn, $sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc())
                return $row['ImgBia'];
        }
    }
    function getGT()
    {
        $sql = "select * from tblaccount where username = '" . $_SESSION['user'] . "'";
        $result = mysqli_query($this->conn, $sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc())
                return $row['Gioitinh'];
        }
    }
    function getNS()
    {
        $sql = "select * from tblaccount where username = '" . $_SESSION['user'] . "'";
        $ns = '';
        $result = mysqli_query($this->conn, $sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc())
                if ($row['Ngaysinh'] != null)
                    $ns = $row['Ngaysinh'];
        }
        return $ns;
    }

    function update_AVT($path)
    {
        $sql = "update tblaccount set ImgAvatar = '" . $path . " where username ='" . $_SESSION['user'] . "'";
        mysqli_query($this->conn, $sql);
    }
    function update_BGR($path)
    {
        $sql = "update tblaccount set ImgBia = '" . $path . " where username ='" . $_SESSION['user'] . "'";
        mysqli_query($this->conn, $sql);
    }
    function update($name, $email, $ns, $gt)
    {
        $sql = "update tblaccount set MemberName =N'" . $name . "',email ='" . $email . "',Ngaysinh ='" . $ns . "', Gioitinh =N'" . $gt . "' where username = '" . $_SESSION['user'] . "'";
        mysqli_query($this->conn, $sql);
        
    }
}
