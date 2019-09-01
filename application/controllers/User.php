<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class User extends CI_controller{

public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');

		
			
	}
public function index(){		
	if($this->session->userdata('type') == 'admin'){
	$listArray['user'] = $this->User_model->selectAll('document');	
	//$this->session->set_flashdata('success','Welcome Back Admin!');
	$this->load->view('new/header');
	$this->load->view('new/admin',$listArray);	
 	$this->load->view('new/footer');
}
elseif($this->session->userdata('type') == 'student') {
   // $this->load->view('s/header');
	
	redirect(base_url('User/studentDashboard'));
 	
	
}else{redirect(base_url('Login'));}
}
	
	public function studentDashboard(){
		// $this->load->view('her');
		if($this->session->userdata('type') == 'student'){
			$studentType = $this->session->userdata('type');
			$course_type = $this->session->userdata('course_type');
			$listArray['user'] = $this->User_model->getdoc('document',array('Usertype'=>$studentType,'course'=>$course_type));
			$listArray['user1'] = $this->User_model->getdoc('document',array('Usertype'=>'admin'));
				//echo "<pre>";print_r($listArray1);exit();
            $this->load->view('student/header');
			$this->load->view('student/studentDashboard',$listArray);
			$this->load->view('new/footer');

		}else{
			redirect(base_url('Login'));
		}
	}
public function file(){
 

	if ($this->session->userdata('type') == 'admin') {
		if (isset($_FILES['files'])) {
		
	$docname = $_FILES['files']['name'];
	$docsize = $_FILES['files']['size'];
	$doctype = $_FILES['files']['type'];
	date_default_timezone_set('Asia/Calcutta');
	$uploadDate = date('d-m-y h:i:s');
    $docPath = "document/";		
    $user_id = $this->session->userdata('user_id');
    $user_type = $this->session->userdata('type');
    $course_type= $this->session->userdata('course_type');
    
    

	if ($_FILES['files']['size'] != 0){
	$listArray = array(
	
    'docname' => $_FILES['files']['name'],
    'docsize' => $_FILES['files']['size'],
    'doctype' => $_FILES['files']['type'],
    'docPath' => $docPath.$docname,
    'UserID' => $user_id,
    'course' => $course_type,
    'usertype' => $user_type,
    'uploadDate' =>$uploadDate
	);
	//echo "<pre>"; print_r($listArray); exit();	
    // echo $listArray['docPath'].$listArray['docname'];exit();
    // $directorypath = $docPath.$docname;
    // echo "$directorypath";
    $result = $this->User_model->insert('document',$listArray);
    // echo "<pre>"; print_r($doc);
	if ($result == true ) {
		$directorypath = $docPath.$docname;
    move_uploaded_file($_FILES["files"]["tmp_name"], $directorypath);
		$this->session->set_flashdata('success','Document Uploaded successfull!');
		redirect(base_url('User/upload'));
		
	}
	else {
		echo "failed";
	}}
	else{
		redirect(base_url('User/upload'));
	}		
	}
	
}
elseif ($this->session->userdata('type') == "student") {
			if (isset($_FILES['files'])) {
		
	$docname = $_FILES['files']['name'];
	$docsize = $_FILES['files']['size'];
	$doctype = $_FILES['files']['type'];
	date_default_timezone_set('Asia/Calcutta');
	$uploadDate = date('d-m-y h:i:s');
    $docPath = "document/";
    $user_id = $this->session->userdata('user_id');
    $user_type = $this->session->userdata('type');
    $course_type= $this->session->userdata('course_type');
    $name = $this->session->userdata('name');
    
    
       if ($_FILES['files']['size'] != 0){
	
	$listArray = array(
	
    'docname' => $_FILES['files']['name'],
    'docsize' => $_FILES['files']['size'],
    'doctype' => $_FILES['files']['type'],
    'docPath' => $docPath.$docname,
    'UserID' => $user_id,
    'course' => $course_type,
    'usertype' => $user_type,
    'uploadDate' =>$uploadDate,
    'name' => $name
	);
    $result = $this->User_model->insert('document',$listArray);
   
	if ($result == true ) {
		
		$directorypath = $docPath.$docname;
        move_uploaded_file($_FILES["files"]["tmp_name"], $directorypath);
        $this->session->set_flashdata('success','Added successfully');
        redirect(base_url('User/studentDashboard'));
	}
	else {
		echo "failed";
	}}
	else{
		redirect(base_url('User/studentDashboard'));
	}	
	}
		redirect(base_url('studentDashboard'));
       

		
	}
	else{
		echo "failed";
	}
}
public function downloadDoc(){	
		if($this->session->userdata('type') == 'admin'){	
			$docID = $this->uri->segment(3);
			$result = array();
			$this->load->helper('download');
			$result = $this->User_model->getUser('document',$docID);
			//echo "<pre>"; print_r($result);exit();
			$docName = $result[0]['docname'];
			$path = 'document/';
			$fullPath = $path.$result[0]['docname'];
			force_download($docName, file_get_contents($fullPath));
		}elseif($this->session->userdata('type') == 'student'){	
			$docID = $this->uri->segment(3);
			$result = array();
			$this->load->helper('download');
			$result = $this->User_model->getdoc('document',array('ID'=>$docID));
			//echo "<pre>";print_r($result);exit();
			$docName = $result[0]['docname'];
			$path = 'document/';
			$fullPath = $path.$result[0]['docname'];
			date_default_timezone_set('Asia/Calcutta');
			$requestDate = date('d-m-y h:i:s');
	        $user_id = $this->session->userdata('user_id');

			$permissionData = $this->User_model->getdoc('permission',array('doc_id'=>$docID,'user_id'=>$user_id));
			//echo "<pre>";print_r($permissionData);
			 //exit();
			if($permissionData[0]['permission'] == '1' && $permissionData[0]['doc_id'] == $docID && $permissionData[0]['user_id'] == $user_id){
					
					$this->User_model->deleteData('permission',array('ID'=>$permissionData[0]['ID']));
					//$this->session->set_flashdata('success', 'download success');
					force_download($docName, file_get_contents($fullPath));


			}else{
				if($permissionData[0]['doc_id'] == $docID && $permissionData[0]['user_id'] == $user_id){
						
						$this->session->set_flashdata('info','Already requested');
						redirect(base_url('User/studentDashboard'));
				}else{
					$permission = array(
						'doc_id' => $docID,
						'doc_name' => $result[0]['docname'],
						'user_id' => $user_id,
						'user_name' => $this->session->userdata('name'),
						'user_type' => $this->session->userdata('type'),
						'user_course' => $this->session->userdata('course_type'),
						'request_date' => $requestDate,
						'permission' => 0
					);
					$result = $this->User_model->insert('permission',$permission);

					$this->session->set_flashdata('success', 'Download request send to Admin');
					//$this->studentDashboard();
					 redirect(base_url('User/studentDashboard'));
				}
			}
			exit();
				
		}else{
			redirect('index.php/Login');
		}
	}



public function editStudent(){
	if($this->session->userdata('type') == 'admin'){
	
	$student_id = $this->uri->segment(3);
	 $student_data = array();
    $student_data['users']= $this->User_model->getUser('studentdata',$student_id);
   // echo "<pre>"; print_r($student_data[0]); 

	$student_data['studentdata'] = $this->User_model->selectAll('studentdata');
   $this->load->view('new/header');
	$this->load->view('new/stu_edit',$student_data);	
 	$this->load->view('new/footer');
 	}
else {
	redirect(base_url('Login'));
}


}

public function update(){
	$listArray = array(
	'ID' => $this->input->post('ID'),
    'Name' => $this->input->post('name'),
    'course' => $this->input->post('course'),
    'Cyear' => $this->input->post('cyear'),
    'Email' => $this->input->post('email'),
    'Password' => $this->input->post('password'));
    	
    $result = $this->User_model->updateUser('studentdata',$listArray);
    if ($result == true) {
    	$this->session->set_flashdata('success','Student Updated successfully');
    	// $this->editStudent();
    	redirect(base_url('User/editStudent'));
    }
    else{
    	echo "failed to update";
    }

}
public function addStudent(){
	if($this->session->userdata('type') == 'admin'){
 $this->form_validation->set_rules('name','Name','required');
 $this->form_validation->set_rules('cyear','Year','required');
 $this->form_validation->set_rules('email','Email','required');
 $this->form_validation->set_rules('password','Password','required');
 if ($this->form_validation->run()) {
	$listArray = array(
    'name' => $this->input->post('name'),
    'course' => $this->input->post('course'),
    'cyear' => $this->input->post('cyear'),
    'email' => $this->input->post('email'),
    'password' => $this->input->post('password'),
    'type' => 'student');
	 $run = $this->User_model->insert('studentdata',$listArray);
	
 	if ($run == true) {
 		$this->session->set_flashdata('success','Student Added successfully');
	 	$this->addStudent2();
    }else {
     $this->addStudent2();
    }

    }
	else{
	 $this->addStudent2();
	} 
	}
else {
	$this->session->set_flashdata('error','you have no permision');
	redirect('Login','refresh');
}
}
public function addStudent2(){
	if($this->session->userdata('type') == 'admin'){
	$dataArray['users'] = $this->User_model->selectAll('studentdata');
	//$this->session->set_flashdata('info', 'User listed bellow');
	$this->load->view('new/header');
	$this->load->view('new/stu_add',$dataArray);	
 	$this->load->view('new/footer');
 }else{
 	$this->session->set_flashdata('error','you have no permision');
	redirect(base_url('Login','refresh'))	;	
 }


}
public function Permision(){
	//$this->session->set_flashdata('info', 'User listed bellow');
   $result['data']	= $this->User_model->selectAll('permission');
  // echo "<pre>"; print_r($result);exit();
	$this->load->view('new/header');
	$this->load->view('new/permision',$result);	
 	$this->load->view('new/footer');


}
public function Upload(){
	$listArray['user'] = $this->User_model->selectAll('document');
	$this->load->view('new/header');
	$this->load->view('new/upload',$listArray);	
 	$this->load->view('new/footer');
}


public function delete(){
	$userId = $this->uri->segment(3);
    $user = $this->User_model->getUser('studentdata',$userId);
	$result = $this->User_model->deleteUser('studentdata',$user);
	 if ($result == true) {
	 	$this->session->set_flashdata('success','Student Deleted successfully');
	 	$this->editStudent();
	 }
	 else {
	 	echo "delete failed";
	 }

     }

public function deletedoc(){
	$docid = $this->uri->segment(3);
	$result = $this->User_model->getUser('document',$docid);
	//echo "<pre>"; print_r($result);exit();
	$deletedoc = $this->User_model->deleteUser1('document',$result);
	if ($deletedoc == true) {
		redirect(base_url('User/upload'));
	}else{

	 echo "failed";
	}
}

public function adminGivePermissionForDoc(){
	$per_id = $this->uri->segment(3);
	$this->User_model->updateUser('permission',array('permission'=>'1','ID'=>$per_id));
	$this->session->set_flashdata('success', ' admin give permission');

		redirect(base_url('User/Permision'));	}


	
	
}
?>