<?php
namespace App\Controllers;
use App\Models\Contact;
class HomeController extends Controller{

    public function index(){
        $ContactModel = new Contact();
        return $ContactModel->All();
        return $this->view('Home',[
            'tittle'=> 'Home',
            'description' => 'PaginaPrincipal'
        ]);;
    }

}
?>