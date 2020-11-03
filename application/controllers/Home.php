<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public $data = array();
    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        // $this->get_config();
    }


    // public function signin(){
    //     $this->load->view('web/signin-simple');
    // }
    // public function singnup(){
    //     $this->load->view('web/signup-simple');
    // }



    public function index() {

        $this->load->view('web/signin-simple');

    }

    public function finduser(){
        if($_POST){

            $name = $_POST['name'];
            $pass = $_POST['password'];




            $data['result'] = $this->Common_model->get_admin($name,$pass);
            // echo json_encode($data['result'] );
            
        }
    }


    public function main(){
        $this->data['main_content'] = $this->load->view('web/home.php', '', true);
        $this->load->view('web/index',$this->data);
    }

    public function dashboard()
    {
        $this->data['main_content'] = $this->load->view('web/home.php', '', true);

        $this->load->view('web/index',$this->data);
    }

    public function layouts(){
            
        $this->data['main_content'] = $this->load->view('web/layouts.php', '', true);

        $this->load->view('web/index',$this->data);
    }

    public function mailbox()
    {
        $this->data['main_content'] = $this->load->view('web/mailbox.php', '', true);

        $this->load->view('web/index',$this->data);
    }

    public function sitemap()
    {
        $this->data['main_content'] = $this->load->view('web/sitemap.php', '', true);

        $this->load->view('web/index',$this->data);
    }

}
