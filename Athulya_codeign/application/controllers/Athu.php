<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Athu extends CI_Controller {

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



public function not()
{

	$this->load->view('not');
}
public function noti()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		
		$this->form_validation->set_rules("not","usernam",'required');
		if($this->form_validation->run())
	{
		
		$id=$this->session->loginid;
		
		$a=array("noti"=>$this->input->post("not"),
			"ct_date"=>date('y-m-d'),
			'loginid'=>$id);
		$this->Mainmodel->notiteach($a);
		redirect(base_url().'Athu/view_notificatio');
}
}
public function notiview()
{

	$this->load->view('notiview');
}
public function view_notification()
{
    
	$this->load->model('Mainmodel');
	$data['b']=$this->Mainmodel->addone();
	$this->load->view('notiview',$data);

}
public function view_notificatio()
{
     $id=$this->session->loginid;
	$this->load->model('Mainmodel');
	$data['b']=$this->Mainmodel->addone($id);
	$this->load->view('deletnoti',$data);
}


 public function deletedetail()
   {
   $this->load->model('Mainmodel');
   $id=$this->uri->segment(3);
   $this->Mainmodel->deletedetail($id);
   /*redirect(base_url().'Athu/view_notificatio');*/

	}
	

}
?>