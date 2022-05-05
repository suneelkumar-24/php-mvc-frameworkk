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
            $registerModel->loadData($request->getBody());

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


}

