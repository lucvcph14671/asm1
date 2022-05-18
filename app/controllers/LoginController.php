<?php
namespace App\Controllers;

use App\Models\BaseModel;

class LoginController extends BaseModel{

    public function index(){
 
        $this->view("master-clien",[
            "page"=>"login"
        ]);
        
    }

    public function singup(){
 
        $this->view("master-clien",[
            "page"=>"singup"
        ]);
        
    }
}
?>