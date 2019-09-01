	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Login extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		
	}	
	public function index(){
		
 $this->load->view('new/index1');
 

}
public function dataValidation(){
	$this->form_validation->set_rules('email','email','required');
	$this->form_validation->set_rules('pass','password','required');
	if ($this->form_validation->run()) 
	{
	    $this->load->model('User_model');
        $dataArray = array(
        'email' => $this->input->post('email'),
        'password' => $this->input->post('pass'));
        $result = $this->User_model->validate('studentdata',$dataArray);
         // echo "<per>"; print_r($result);
         // echo $result[0]['Name']; exit();
        if ($result == true) {
        	$user = array(
				'user_id' => $result[0]['ID'],
				'name' => $result[0]['Name'],
				'email' => $result[0]['Email'],
				'type' => $result[0]['type'],
				'course_type' => $result[0]['course']
			);
            //echo "<pre>";print_r($user);exit();
			$this->session->set_userdata($user);
			$this->session->set_flashdata('success','Welcome Back ADMIN!');
 	         redirect(base_url().'User/index');   
 	            }else{
 	    $this->session->set_flashdata('error','wrong credential');
	    redirect(base_url('Login'));
        }
	}
    
    else {

    	$this->index();
    }


}
public function userLogout(){
		$user = array(
			'user_id' => '',
			'email' => '',
			'type' => ''
		);

		$this->session->unset_userdata($user);
                $this->session->sess_destroy();
		$this->index();
	}
}
?>