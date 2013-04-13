<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Message</title>
	
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.9.1.min.js"></script>

        <script src="<?php echo base_url();?>public/js/jquery.fcbkcomplete.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css" type="text/css" media="screen" charset="utf-8" />
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}


	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	.error
	{
	   color:red;
	}
	</style>

</head>
<body>

<div id="container">
	<h1>Select Your User</h1>

	<div id="body">
<?php echo validation_errors(); ?>

<?php echo form_open('mgc/final_sent',array('id'=>'msg')); ?>



<h5><?php echo $msg;?></h5>
  
  
   <br/>
   <br/>
           <div id="text">
        </div>
       
         To :   <select id="select3" name="select3">
              
            </select>
            <br/>
            <br/>
			 Form :  <select  name="form">
       <?php $this->db->where('user_id',$this->session->userdata('userid')); 
            $query=$this->db->get('user_alise_table');
           foreach($query->result() as $row)
               {
			        echo '<option value="'.$row->alise_name.'">'.$row->alise_name.'</option>';
				}
				?>
   </select>
            <input type="submit" value="Send">
     </form>
        <script type="text/javascript">
            $(document).ready(function(){ 
           				
                $("#select3").fcbkcomplete({
                    json_url: "<?php echo base_url();?>public/data0.txt",
                    addontab: true,                   
                    maxitems: 10,
                    input_min_size: 0,
                    height: 10,
                    cache: true,
                    newel: true,
                    select_all_text: "select",
                });
            });
        </script>
        
        <div id="testme"></div>
       
	</div>

	<p class="footer"><font color="red"> Page rendered in <strong>{elapsed_time}</strong> seconds</font></p>
</div>

</body>
</html>