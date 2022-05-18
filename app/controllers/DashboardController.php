<?php
namespace App\Controllers;
use App\Models\BaseModel;
use App\Models\Subject;

class DashboardController extends BaseModel {

    public function dashboard(){
 
        $this->view("master-admin",[
            "page"=>"dashboard"
        ]);
        
    }

    public function giao_vien(){
 
        $this->view("master-admin",[
            "page"=>"giao-vien"
        ]);
        
    }

    public function mon_hoc(){
 
        $this->view("master-admin",[
            "page"=>"mon-hoc"
        ]);
        
    }


    public function mon_hoc_add(){

        if( isset($_POST["btn_submit"]) ){
            
            $model = new Subject();

            $data = [
                'name' => $_POST['name']
            ];
            
            
            $model->insert($data);

        }
 
        $this->view("master-admin",[
            "page"=>"mon-hoc-add"
        ]);
        
    }
}
?>