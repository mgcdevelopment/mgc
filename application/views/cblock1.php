
	<!-- Body content -->
	<div id="content">	
	<div id="banner-rotor"> Banner rotor</div>	
			<!-- loops-wrapper -->
			<div class="loops-wrapper list-thumb-image">
			
				<article class="post">								  
					<div class="post-content">
					
										
						<div id="container">						
                           <?php if($err!=''){ echo $err; } ?>
						    <form action="<?php echo base_url('index.php/mgc/register');?>" method="post">
						
					
                       <?php echo $data;?>

                        <?php echo $me;?>
                  <input type='submit' value='submit' />
    </form>


													

							<p class="footer"><font color="red"> Page rendered in <strong>{elapsed_time}</strong> seconds</font></p>
						</div>
						
						
					</div>
					<!-- /.post-content -->
				</article>
				<!-- /.post -->		
				
											
			</div>
			<!-- /loops-wrapper -->
			<div id="banner-rotor">Perspective Rotor</div>			 
		
	</div>
	<!-- /#content -->

		
	

		
