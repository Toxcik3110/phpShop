<?php

/**
 *
 */
class UserController
{

    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';

        $result = false;

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkName($name)) {
                $errors[] = 'Name must be more than 2 symbols';
            }
            if(!User::checkEmail($email)) {
                $errors[] = 'Wrong email';
            }
            if(!User::checkPassword($password)) {
                $errors[] = 'Password must be more than 6 symbols';
            }
            if(User::checkEmailExists($email)) {
                $errors[] = 'That email already exists';
            }
            if($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }
        require_once(ROOT.'/views/user/register.php');
        return true;
    }


    public function actionLogin() {
        $email = '';
        $password = '';

        if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;
            if(!User::checkEmail($email)) {
                $errors[] = 'Wrong email';
            }
            if(!User::checkPassword($password)) {
                $errors[] = 'Password must be more than 6 symbols';
            }

            $userId = User::checkUserData($email, $password);

            if($userId == false) {
                $errors[] = "Wrong account information";
            } else {
                User::auth($userId);

                header("Location: /test/cabinet/");
            }
        }
        require_once(ROOT.'/views/user/login.php');
        return true;
    }

    public function actionLogout() {
        session_start();
        unset($_SESSION['user']);
        header("Location: /test/catalog");
    }
}


 ?>
