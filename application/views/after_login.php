						<div class="tab-container" id="outer-container" >
						 <ul class='etabs'>
						  <li class='tab'><a href="#nested-tab-1">Rotor</a></li>
						  <li class='tab'><a href="#nested-tab-2">Personal</a></li>
						  <li class='tab'><a href="#nested-tab-3">Group</a></li>
						  <li class='tab'><a href="#nested-tab-4">Organization</a></li>
						  <li class='tab'><a href="#nested-tab-5">City</a></li>
						 </ul>
						 <div class="panel-container">
						  <div id="nested-tab-1">
						   <h2>Heading 1</h2>
						   <p>This is the content of the first tab.</p>
						  </div>
						  <div id="nested-tab-2">
						    <div class="tab-container" id="inner-container">
						   <ul class='etabs'>
						   <li class='tab'><a href="#tab-1">Alias</a></li>
						   <li class='tab'><a href="#tab-2">Content</a></li>
						   <li class='tab'><a href="#tab-3">Calender</a></li>
						   <li class='tab'><a href="#tab-4">Media</a></li>
						   </ul>
						   <div class="panel-container">
						   <div id="tab-1">
						   <h3>Create Alias</h3>				    	

									
								<?php echo validation_errors(); ?>

								<?php echo form_open('mgc/create_alise'); ?>

								<h5>Enter Your Alias Name</h5>
								<input type="text" name="alname" value="" size="50" /></br></br>


								<div><input type="submit" value="Submit" /></div>

								</form>
									
						   </div>
						   <div id="tab-2">
						   <h3>Heading B</h3>
						   <p>This is a nested second tab</p>
						   </div>
						   <div id="tab-3">
						   <h3>Heading C</h3>
						   <p>This is a nested third tab</p>
						   </div>
						   </div>
						   <br />
						   </div>
						  </div>
						  <div id="nested-tab-3">
						 
						   <div class="tab-container" id="inner-container">
						   <ul class='etabs'>
						   <li class='tab'><a href="#tab-a">Mange Group</a></li>
					
						   </ul>
						   <div class="panel-container">
						   <div id="tab-a">
						   <h3>Heading A</h3>
						   <p>This is a nested first tab</p>
						   </div>
						   
						   
						   </div>
						   <br />
						   </div>
						  </div>
						    <div id="nested-tab-4">
							    <div class="tab-container" id="inner-container">
						   <ul class='etabs'>
						   <li class='tab'><a href="#tab-1m">Members</a></li>
						   <li class='tab'><a href="#tab-2c">Contents</a></li>
						   <li class='tab'><a href="#tab-3s">Sponsors</a></li>
						   <li class='tab'><a href="#tab-4c">Calender</a></li>
						   <li class='tab'><a href="#tab-5me">Media</a></li>
						   </ul>
						   <div class="panel-container">
						   <div id="tab-1m">
						   <h3>Heading A</h3>
						   <p>This is a nested first tab</p>
						   </div>
						   <div id="tab-2c">
						   <h3>Heading B</h3>
						   <p>This is a nested second tab</p>
						   </div>
						   <div id="tab-3s">
						   <h3>Heading C</h3>
						   <p>This is a nested third tab</p>
						   </div>
						   <div id="tab-4c">
						   <h3>Heading C</h3>
						   <p>This is a nested third tab</p>
						   </div>
						   <div id="tab-5me">
						   <h3>Heading C</h3>
						   <p>This is a nested third tab</p>
						   </div>
						   </div>
							</div>
							</div>
							
							<div id="nested-tab-5">
									   <div class="tab-container" id="inner-container">
						   <ul class='etabs'>
						   <li class='tab'><a href="#tab-1b">Banners</a></li>
						   <li class='tab'><a href="#tab-2s">Sponsors</a></li>
						   <li class='tab'><a href="#tab-3p">Prespective</a></li>
						   <li class='tab'><a href="#tab-4a">Articels</a></li>
						   <li class='tab'><a href="#tab-5ph">Photograph</a></li>
						   <li class='tab'><a href="#tab-6v">Video</a></li>
						   <li class='tab'><a href="#tab-7au">Audio</a></li>
						   </ul>
						   <div class="panel-container">
						   <div id="tab-1b">
						   <h3>Heading A</h3>
						   <p>This is a nested first tab</p>
						   </div>
						   <div id="tab-2s">
						   <h3>Heading B</h3>
						   <p>This is a nested second tab</p>
						   </div>
						   <div id="tab-3p">
						   <h3>Heading C</h3>
						   <p>This is a nested third tab</p>
						   </div>
						   <div id="tab-4a">
						   <h3>Heading C</h3>
						   <p>This is a nested third tab</p>
						   </div>
						   <div id="tab-5ph">
						   <h3>Heading C</h3>
						   <p>This is a nested third tab</p>
						   </div>
						    <div id="tab-6v">
						   <h3>Heading C</h3>
						   <p>This is a nested third tab</p>
						   </div>
						    <div id="tab-7au">
						   <h3>Heading C</h3>
						   <p>This is a nested third tab</p>
						   </div>
						   </div>		 
							</div>
						 </div>
						</div>




<script type="text/javascript">
  $('#outer-container, #inner-container').easytabs();
</script>