<?php 
Class Mgc_msg extends  CI_Model{

    
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
  
    }
	
	function check_valid_user($user_name,$password)
	{
	     $this->db->where('user_name',$user_name);
	     $this->db->where('user_password',$password);
	     $query=$this->db->get('user_info');
		
		if($query->num_rows()==1)
		{
		   $query=$query->row();
		   $this->session->unset_userdata('userid'); 
		   $this->session->set_userdata('userid',$query->user_id); 
		   return True;
		}
		else
		{ 
		   return false;
		}
		
	}
	function insert_recorde($data,$table_name)
	{
	  $this->db->insert($table_name,$data);
	}
	
	function get_where($org_id,$table_name)
	{
	  $this->db->where('org_id',$org_id);
	  return $this->db->get($table_name);
	}
		
	 
	}



?>