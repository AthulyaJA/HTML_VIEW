<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  amsctrl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function hello()
	{
		$this->load->view('hello');
	}
	public function stu_reg()
	{
		$this->load->view('student_registration');
	}
	public function reg_access()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("name","username",'required');
		$this->form_validation->set_rules("fname","username",'required');
		$this->form_validation->set_rules("address","useraddress",'required');
		$this->form_validation->set_rules("dist","userdis",'required');
		$this->form_validation->set_rules("pincode","userpincode",'required');
		$this->form_validation->set_rules("phoneno","userphno",'required');
		$this->form_validation->set_rules("dob","userdob",'required');
		$this->form_validation->set_rules("gender","usergender",'required');
		$this->form_validation->set_rules("education","usereductn",'required');
		$this->form_validation->set_rules("course","usereductn",'required');
		$this->form_validation->set_rules("email","useremail",'required');
		$this->form_validation->set_rules("password","userpassword",'required');
		if($this->form_validation->run())
	{
		
		$pass=$this->input->post("password");
		$encpass1=$this->Mainmodel->encpass1($pass);
		$a=array("s_name"=>$this->input->post("name"),
			"fathername"=>$this->input->post("fname"),
		"address"=>$this->input->post("address"),
		"gender"=>$this->input->post("gender"),
		"district"=>$this->input->post("dist"),
		"pincode"=>$this->input->post("pincode"),
		"education"=>$this->input->post("education"),
		"mobileno"=>$this->input->post("phoneno"),
		"dob"=>$this->input->post("dob"),
		"course"=>$this->input->post("course"),
		);
		$b=array("user_name"=>$this->input->post("email"),
		"password"=>$encpass1,"user_type"=>'1');
		$this->Mainmodel->reg_access($a,$b);
		redirect(base_url().'amsctrl/stu_reg');
	
	}

	
}

public function stud_profile()
        {
            $this->load->model('Mainmodel');
            $id=$this->session->loginid;
           $data['user_data']=$this->Mainmodel->view($id);
            $this->load->view('student_updation',$data);

        }

public function update_det()
        {  

        $b=array("s_name"=>$this->input->post("name"),
			"fathername"=>$this->input->post("fname"),
		"address"=>$this->input->post("address"),
		"gender"=>$this->input->post("gender"),
		"district"=>$this->input->post("dist"),
		"pincode"=>$this->input->post("pincode"),
		"education"=>$this->input->post("education"),
		"mobileno"=>$this->input->post("phoneno"),
		"dob"=>$this->input->post("dob"),
		"course"=>$this->input->post("course"),
		);
        $c=array("email"=>$this->input->post("email"));
       
        $this->load->model('Mainmodel');
            if($this->input->post("update"))
            {
            	 $id=$this->session->loginid;
            	
                $this->Mainmodel->updatedetails1($b,$c,$id);
               
                redirect(base_url().'amsctrl/stud_profile');
            }
               
    }
    public function log()
    {
        $this->load->view('login');
    }
    
 
 
    public function loginAction()
    {
            $this->load->library('form_validation');
            $this->load->model('Mainmodel');
            $this->form_validation->set_rules("user_name","email",'required');
            $this->form_validation->set_rules("password","password",'required');
            if($this->form_validation->run())
        { 
            
            $this->load->model('Mainmodel');
                        $email=$this->input->post("user_name");
                        $password=$this->input->post("password");
                        $rslt=$this->Mainmodel->newpasslog($email,$password);
                            if($rslt)
                        {
                            $id=$this->Mainmodel->getuserid($email);
                            $user=$this->Mainmodel->getuser($id);
                            $this->load->library(array('session'));
                            $this->session->set_userdata(array('id'=>(int)$user->id,
                            'status'=>$user->status,
                            'user_type'=>$user->user_type));
 
                            if($_SESSION['status']=='0' && $_SESSION['usertype']=='0')
                        {
                            redirect('amstrl/reg_access','refresh');
                        }
                            else if($_SESSION['status']=='1' && $_SESSION['usertype']=='1')
                        {
                            redirect('amstrl/register','refresh');
                        }
                            else if($_SESSION['status']=='1' && $_SESSION['usertype']=='2')
                        {
                            redirect('amstrl/','refresh');
                        }
                        
 
                        else
                        {                               
                        echo "Waitting for approval";
                    }
                }
            
                else{
                    echo "invalid user";
                }
            }
            else{
                redirect(base_url().'amsctrl/');
            }
    
        }
 

 public function complaint_reg()


 {


 	$this->load->view('complaint_reg');
 }
public function stu_complaint()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		
		$this->form_validation->set_rules("not","usernam",'required');
		if($this->form_validation->run())
	{
		
		$id=$this->session->loginid;
		$stu_id=$this->session->stud_id;
		
		$a=array("complaint"=>$this->input->post("not"),
			"cm_date"=>date('y-m-d'),
			'loginid'=>$stu_id);
		$this->Mainmodel->notiteach($a);
		redirect(base_url().'');

		
   
}

}
public function notiview()
{

	$this->load->view('complaint_view_table');
}
public function view_notification()
{

	$this->load->model('Mainmodel');
	$data['b']=$this->Mainmodel->addone();
	$this->load->view('complaint_view_table',$data);
}
}