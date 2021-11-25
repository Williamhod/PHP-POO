<?php

namespace App\Controllers;

use App\Models\User;
use App\Validation\Validator;

class UserController extends Controller
{

    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginPost()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required', 'min:3'],
            'password' => ['required']
        ]);

        if ($errors) {
            $_SESSION['errors'][] = $errors;
            header('Location: login.html');
            exit;
        }


        $user = (new User($this->getDB()))->getByUsername($_POST['username']);

      
        if(!$user){
            $errors = array('erreur de connexion' => array('L\'identifiant ou le mot de passe est érronée.'));
            $_SESSION['errors'][] = $errors;
            return header('Location: login.html');
        }

        if (password_verify($_POST['password'], $user->password)) {

            $_SESSION['auth'] = (int)$user->admin;
            return header('Location: admin.html?success=true');
        } else {
            $errors = array('erreur de connexion' => array('L\'identifiant ou le mot de passe est érronée.'));
            $_SESSION['errors'][] = $errors;
            return header('Location: login.html');
        }
    }

    public function logout()
    {
        session_destroy();

        return header('location: /');
    }
}
