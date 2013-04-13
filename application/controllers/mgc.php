<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mgc extends CI_Controller {

   	 public function __construct()
       {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
			
       }
	public function _remap($method, $params = array())
		{
		    
		    if($method=='index' or $method=='login' or $method=='register' or $method=='submit')
            {
			   $method = 'mgc_'.$method;
			   return $this->$method();
			}	
			
			$method = 'mgc_'.$method;
			if (method_exists($this, $method) and $this->session->userdata('login')===True)
			{
				return call_user_func_array(array($this, $method), $params);
			}
			
			show_404();
		}
            

  
       

    
	public function mgc_register()
	{
     
        
		          //Checks to see if the user is logged in
       

                    $this->load->library('recaptcharesponse');

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user_info.user_name]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user_info.user_email]');
		 
		if ($this->form_validation->run() == FALSE )
		{
		   
		   	$this->load->view('common/header');
		   $this->load->view('left');
		   $str=$this->load->view('register',null,true);
		   $this->load->view('cblock_parser',array('data'=>$str,'err'=>''));
		  $this->load->view('right');
		  $this->load->view('common/footer');
		
		}
		else
		{
		       $privatekey = "6LfXvd8SAAAAAAp4PLmxtYZUdElNRFbR98EUnZH4 ";
               $resp = $this->recaptcharesponse->recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$this->input->post("recaptcha_challenge_field"),$this->input->post("recaptcha_response_field"));
               if(!$resp->is_valid)
			   {
					 	  $this->load->view('common/header');
						  $this->load->view('left');
						   $str=$this->load->view('register',null,true);
						   $this->load->view('cblock_parser',array('data'=>$str,'err'=>'incorrect word'));
						  $this->load->view('right');
						  $this->load->view('common/footer');
			   }
			   else
			   {
					$this->db->insert('user_info',array('user_name'=>$this->input->post('username'),'user_email'=>$this->input->post('email'),'user_password'=>$this->input->post('password')));
					redirect('mgc/login');
		      }
		}
	}
	public function mgc_index()
	{
	    
	  
		
		
		$this->load->view('common/header');
	   $this->load->view('left');
	   $this->load->view('cblock');
	  $this->load->view('right');
	  $this->load->view('common/footer');
		//redirect("mgc/login");
	}
	public function mgc_login()
	{
	   
        
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_mgc_check');
		if ($this->form_validation->run() == FALSE)
		{
		                  $this->load->view('common/header');
						  $this->load->view('left');
						   $str=$this->load->view('login',null,true);
						   $this->load->view('cblock_parser',array('data'=>$str,'err'=>''));
						  $this->load->view('right');
						  $this->load->view('common/footer');
			
		}
		else
		{
		                 $this->load->view('common/header');
						  $this->load->view('left');
						   $str=$this->load->view('after_login',null,true);
						   $this->load->view('cblock_parser',array('data'=>$str,'err'=>''));
						  $this->load->view('right');
						  $this->load->view('common/footer');
		  // redirect('mgc/get_my_msg');
		}
		
	}
	public function mgc_sent_msg()
	{
	        
			 
        
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('message', 'Message', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('sent_msg');
		}
		else
		{
	      
		  
	     foreach($this->input->post('select3') as $val)
		 {
		   $this->load->model('mgc_msg');
		   $this->mgc_msg->insert_recorde(array('sender_id'=>$this->input->post('form'),'reciver_id'=>$val,'reading_status'=>1,'m_title'=>$this->input->post('title'),'message_text'=>$this->input->post('message')),'message_tbl');
		 
		 }
		 echo "done";
		}
	}
/*
function create_organization() by ashraful
*/
	public function create_organization()
	{	        
		
        $this->load->helper('file');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('is_unique', 'Alrady Register By Other User Chose Different Name');
        $this->form_validation->set_rules('alname', 'Alise Name', 'required|is_unique[user_alise_table.alise_name]');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('create_organization');
		}
		else
		{
		  $this->load->model('mgc_organization');
		  $data=array('org_id','org_name'=>$this->input->post('org_name'),'org_description'=>$this->input->post('org_description'),'org_logo'=>$this->input->post('org_logo'));
		  $this->mgc_organization->insert_recorde($data,'mgc_organization');
		  echo "Organization Successfully Created.";
		 
		}
	}
/*
	funtion create_organization() end here
*/
	public function  mgc_logout()
	{
	
	    $this->session->sess_destroy();
		redirect('mgc/login');
	}
     public function mgc_get_my_msg()
      {
	  $this->load->helper(array('form', 'url'));
	      $query= $this->db->query("SELECT * From (Select alise_name
				FROM user_alise_table
				WHERE user_id=".$this->session->userdata('userid')." )as a ,(SELECT *
				FROM message_tbl) as b where a.`alise_name`=b.reciver_id");
         $this->load->view('mymsg',array('query'=>$query));
		}	  
	 public function mgc_create_alise()
	 {
	    $this->load->helper(array('form', 'url'));
        
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('is_unique', 'Alrady Register By Other User Chose Different Name');
        $this->form_validation->set_rules('alname', 'Alias Name', 'required|is_unique[user_alise_table.alise_name]');
		
		if ($this->form_validation->run() == FALSE)
		{
			             $this->load->view('common/header');
						  $this->load->view('left');
						   $str=$this->load->view('after_login',null,true);
						   $this->load->view('cblock_parser',array('data'=>$str,'err'=>''));
						  $this->load->view('right');
						  $this->load->view('common/footer');
		}
		else
		{
		  $this->load->model('mgc_msg');
		  $data=array('user_id'=>$this->session->userdata('userid'),'alise_name'=>$this->input->post('alname'));
		  $this->mgc_msg->insert_recorde($data,'user_alise_table');
		  echo "done";
		 
		}
	 }
	public function mgc_afile()  //waring
	{
	   $this->load->helper('file');
	  $this->load->model('mgc_msg');
	  $query=$this->mgc_msg->get_where(0,'user_alise_table');
	  //$this->load->helper('file');
	  $json='';
	  foreach($query->result() as $row)
	  {
	     $json.='{ "key" : "'.$row->alise_name.'" , "value" : "'.$row->alise_name.'" },';
	  }
	  
	  $json=rtrim($json,',');
	  $json ="[".$json."]";
	  $data = 'Some file data';

			if ( ! write_file('./public/data0.txt', $json))
			{
				 echo 'Unable to write the file';
			}
			else
			{
				 echo 'File written!';
			}
	}
	public function mgc_final_sent()
	{
	  
	  print_r($this->input->post());
	}
	public function mgc_check($str)
	{
	  $this->load->model('mgc_msg');
	 
	  if ( $this->mgc_msg->check_valid_user($this->input->post('username'),$str) )
		{
		    $this->session->set_userdata('login',True);
			$this->session->set_userdata('username',$this->input->post('username'));
			return TRUE;
			
		}
		else
		{
		    $this->form_validation->set_message('mgc_check', 'Ivalid  %s  or username');
			return FALSE;
			
		}
	  
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */