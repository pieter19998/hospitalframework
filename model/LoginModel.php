<?php


function register($name,$lastname,$username,$password,$email)
{


    $db = openDatabaseConnection();
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);

        $sql =("INSERT INTO account(name,lastname,username,password,email) VALUES(:name, :lastname, :username, :password, :email)");
        $query = $db->prepare($sql);
        $query->execute(array(
            ':name' => $name,
            ':lastname' => $lastname,
            ':username' => $username,
            ':password' => $hashpassword,
            ':email' => $email,
        ));

    $db = null;
    die();
}


function login($username,$password)
{
    try {
        $db = openDatabaseConnection();
        $sql = ("SELECT * FROM account WHERE username=:username LIMIT 1");
        $query = $db->prepare($sql);
        $query->execute(array(':username' => $username));
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if ($query->rowCount() > 0) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_session'] = $row['id'];
                return true;
            } else {
                return false;
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

 function logout()
{
    session_destroy();
    unset($_SESSION['user_session']);
    return true;
}



 function is_loggedin()
 {
     if (isset($_SESSION['user_session'])) {
         return true;
     }
 }

