<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\database\DB;
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
           
        $body = [];
            foreach ($_POST as $key => $value)
            {
                $body[$key] = $value;
            }


        var_dump($body);

        $DB = new DB();

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

