<?php

namespace App\Controllers;

    use App\Core\Controller;
    use App\Models\UserModel;

    class MainController extends Controller
    {
        public function home()
        {
            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            $this->set('auth', $auth);
        }

        public function getRegister()
        {
            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            $this->set('auth', $auth);
        }

        public function postRegister()
        {
            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            $this->set('auth', $auth);

            $email = \filter_input(INPUT_POST, 'reg_email', FILTER_SANITIZE_EMAIL);
            $forename = \filter_input(INPUT_POST, 'reg_forename', FILTER_SANITIZE_STRING);
            $surname = \filter_input(INPUT_POST, 'reg_surname', FILTER_SANITIZE_STRING);
            $username = \filter_input(INPUT_POST, 'reg_username', FILTER_SANITIZE_STRING);
            $password1 = \filter_input(INPUT_POST, 'reg_password_1', FILTER_SANITIZE_STRING);
            $password2 = \filter_input(INPUT_POST, 'reg_password_2', FILTER_SANITIZE_STRING);

            if($password1 !== $password2)
            {
                $this->set('message', 'Passwords doesnt match idiot!!!');
                return;
            }

            $passwordLength = strlen($password1);

            if($passwordLength < 7)
            {
                $this->set('message', 'Password must be at least 6 characters!');
                return;
            }

            $userModel = new UserModel($this->getDatabaseConnection());
            $user = $userModel->getByEmail($email);

            if($user)
            {
                $this->set('message', 'Greska, idiote  vec postoji taj email');
                return;
            }

            $user = $userModel->getByUsername($username);
            if($user)
            {
                $this->set('message', 'Greska, idiote  vec postoji taj username!!!!');
                return;
            }


            $passwordHash = \password_hash($password1, PASSWORD_DEFAULT);
            $userId = $userModel->add([
                'username' => $username,
                'password_hash' => $passwordHash,
                'email' => $email,
                'vorename' => $forename,
                'surname' => $surname
            ]);

            if(!$userId)
            {
                $this->set('message', 'Mistake has been made. You didnt register idiot!!');
                return;
            }

            $this->set('message', 'New account has been made. you can login now!!!!!');
            return;

        }

        public function getLogin()
        {
            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            var_dump($auth);

            $this->set('auth', $auth);
        }

        public function postLogin()
        {
            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            $this->set('auth', $auth);

            $username = \filter_input(INPUT_POST, 'login_username', FILTER_SANITIZE_STRING);
            $password = \filter_input(INPUT_POST, 'login_password', FILTER_SANITIZE_STRING);

            $passwordLength = strlen($password);

            if($passwordLength < 7)
            {
                $this->set('message', 'Password must be at least 6 characters!');
                return;
            }



            $userModel = new UserModel($this->getDatabaseConnection());
            $user = $userModel->getByFieldName('username', $username);
            if(!$user)
            {
                $this->set('message', 'Invalid Username');
                return;
            }

            if(!password_verify($password, $user->password_hash))
            {
                sleep(1);
                $this->set('message', 'Invalid PasSWORDDDD!!!!!!!!!');
                return;
            }


            $this->getSession()->put('user_id', $user->user_id);
            $this->getSession()->save();

            $this->redirect('/lanaya');
        }

        public function getLogout()
        {
            $this->getSession()->remove('user_id');
            $this->getSession()->save();

            $this->redirect('/lanaya');
        }
    }
