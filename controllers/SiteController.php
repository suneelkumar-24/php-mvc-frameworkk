<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\database\DB;
use app\core\Request;

class SiteController extends Controller
{

    public function home()
    {
        $DB = new DB();
        // $DB->table('users')->select('id','name')->where('createdby',"=",3)->get();
        $users_data = $DB->table('users')->get() ;
        // $users_data = $DB->table('users')->select('id','name')->where('created_by','=',1)->orWhere('created_by',"=",3)->orWhere('created_by','=',44)->where('email','=','suneel@example.com')->orWhere('email','=','testinginmail@yopmail.com')->groupBy('email')->orderBy('id','ASC')->get() ;
        // var_dump($users_data);
    
        // die();
        // $DB->table('users')->select('id','name')->where('created_by','=',1)->orWhere('created_by',"=",3)->orWhere('created_by','=',44)->where('email','=','suneel@example.com')->groupBy('email')->orderBy('email','DESC')->orderBy('id','ASC')->get() ;
        // DB::table('users')->get();
      
        
        
        $params = [
        'name' =>  $users_data, 
        ];

        return $this->render('home',$params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
       $body = $request->getBody();
        print_r($body);
        return "handling submitted data1";
    }

}

