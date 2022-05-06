<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{

    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        // return 'hi';
        $registerModel = new RegisterModel();
        if($request->isPost())
        {
            // return $request->getBody();
           
        $body = [];
        if($_SERVER['REQUEST_METHOD']=='get')
        {
            foreach ($_GET as $key => $value)
            {
                $body[$key] = filter_input(INPUT_GET,$key,FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if($_SERVER['REQUEST_METHOD']=='post')
        {
            echo 'post';
            foreach ($_POST as $key => $value)
            {
                $body[$key] = filter_input(INPUT_POST,$key,FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        
         
        die();

            if($registerModel->validate() && $registerModel->register())
            {
                return 'Success';
            }
            // echo '<pre>';
            // var_dump($registerModel->errors);
            // echo '</pre>';
            // exit;
          
            return $this->render('register',['model' => $registerModel]);
        }
        $this->setLayout('auth');
        return $this->render('register',['model' => $registerModel]);
    }

    public function create()
    {
        return $this->render('create');
    }

}

