<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ojtcon extends CI_Controller {
 
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    


    public function index()
    {
        $this->load->view('Welcome_message');

    }
    public function wel()
    {
        $this->load->view('login');

    }
    public function login_action()
    {
        
        $this->load->model('Mainojt');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','username','required|alpha');
        $this->form_validation->set_rules('pass','password','required|min_length[6]');
        if($this->form_validation->run())
        {

            $a=array('user_name'=>$this->input->post('name'),
                'password'=>$this->input->post('pass'));
            $this->Mainojt->login_insert($a);
            redirect(base_url().'ojtcon/wel');
    
        }
    }

}

				

