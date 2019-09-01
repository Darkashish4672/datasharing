<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_model{
	
        public function  insert($tableName,$dataArray)
        	{
        	 $query = $this->db->insert($tableName,$dataArray); 
        	
        	 if ($query == true) {
        	 	return true;
        	 }
        	 else {
        	 	return false;
        	 }
            }	
            
        public function selectAll($tableName){
        		return $users = $this->db->get("$tableName")->result_array();
         	}
        public function getUser($tableName,$userId)
            {
             //echo $userId;
            	 //$this->db->select('*');
            	$this->db->from($tableName);
        		$this->db->where('id',$userId);
            //$this->db->limit(1);
        		$user = $this->db->get()->result_array(); 
            //echo "<pre>"; print_r($user);exit();      
        		return $user;

        		

        	}
        public function updateUser($tableName,$dataArray)
           {
           	    //echo "<pre>";print_r($dataArray);exit();
           	    $this->db->where('ID',$dataArray['ID']);
                $query = $this->db->update($tableName,$dataArray);
                if ($query) {
                	return true;

                }
                else{
                	return false;
                }


           }
        public function deleteUser($tableName,$data)
           {
           
           
           	           // $this->db->select('*');
           	           // $this->db->from('studentdata');
            //echo "<pre>";print_r($data);exit();
                      $this->db->where('ID', $data['0']['ID']);
             $query = $this->db->delete('studentdata');
           	    if ($query) {
           	    	return true;
           	    }
           	    else {
           	    	return false;
           	    }
           }
        public function adminData($dataArray){
              $this->db->insert('admin',$dataArray);
          	 echo "<pre>";
             print_r($dataArray);

          }
        public function validate($tableName,$dataArray){
                   
               $query = $this->db->select('*')
                                 ->from($tableName)
         	                       ->where($dataArray)
         	                       ->limit(1)
         	                       ->get();
         	// $result = $query->result_array();
         	// echo "<pre>"; print_r($result);

         	if ($query->num_rows()>0) {
         		return $query->result_array();
         		// print_r(result)
         	}else {
         		return  false;
         		
         	}
         }

         


  public function deleteUser1($tableName,$data)
           {
          //echo "<pre>"; print_r($data);exit();
            // echo $tableName; exit();
             $this->db->select('*');
             $this->db->from('$tableName');
            $this->db->where('ID',$data[0]['ID']);

             
             $query = $this->db->delete($tableName);
                if ($query) {
                  return true;
                }
                else {
                  return false;
                }
           }

public function getdoc($tableName,$data){
  
            $this->db->select('*');
            $this->db->FROM($tableName);
            $this->db->where($data);  
            //$this->db->where('course',$data1);
            //$this->db->where('usertype',$data2);
           //echo "<pre>"; print_r($data);exit();
            $users = $this->db->get();
            // echo "<pre>"; print_r($users);exit();
            
            if ($users->num_rows()>0){
              return $users->result_array();# code...
            }else{
              return false;
            }
          }
          public function deleteData($tablName, $id){
    $this->db->where($id)->delete($tablName);
    return 1;
  }
  
        }



?>