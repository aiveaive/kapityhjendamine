<?php
class LoginController{
    public function index () {
        return view ('login');
    }
    public function login () {
        $username = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
        if (isset($action) && $action === 'login') {
            $error =[];

            if (empty($username)) {
                $error['username'] = 'Sellist kasutajat pole';
            }
            if (empty($password)) {
                $error['password'] = 'Sisesta parool';
            }
            if (empty($error)) {
                $user = $this->auth($username, $password);

                if ($user) {
                    if (($user->role)==='admin'){
                    ($_SESSION["is_logged_in"] = true);
                    ($_SESSION["is_admin"] = true);
                    }
                
                    

                } else {
                    echo 'Vale kasutajanimi või parool';
                }

            }

        }
        print_r($_SESSION);
        print_r($_REQUEST);
    }
    public function auth ($username, $password) {
        global $app;

        $user = $app['database']->getUserByEmail('users', $username );

        if (!empty($user)) {
//            $options = [
//                'cost' => 12,
//           ];
//          echo password_hash("", )
            if ($user->password === $password) {
                return $user;
            }
        }
    }
 //   public function logout () {
 //       session_destroy();
        
    
    }    
