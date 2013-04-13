<!-- Left side bar 	-->
	<aside id="sidebar">
		<div id="themify-feature-posts-3" class="widget feature-posts">
			<h4 class="widgettitle">Filter</h4>
			Select Category:
			<select id="" name="">
			<option id="">keyword</option>
			<option id="">keyword</option>
			<option id="">keyword</option>
			</select>
			<form method="get" id="searchform" action="#/">
			<input value="Search" class="placeholder" name="s" id="s" placeholder="Search" type="text">
			</form>	
		</div>		
		<div id="themify-most-commented-2" class="widget themify-most-commented">
			<h4 class="widgettitle"><?php if($this->session->userdata('username')!=''){  echo $this->session->userdata('username'); } else { echo "Anonymous";}?></h4>
			<ul class="feature-posts-list">
			<?php 
			if($this->session->userdata('allalias')!='')
			{
			foreach($this->session->userdata('allalias') as $row)
			      {
				      echo '<li><a href="#">'.$row['alise_name'].'</a></li>';
				  }
			}
			else
			{
			    echo '<li><a href="#">No Alias</a></li>';
			
			}
		   
		   ?>
				
			</ul>
		</div>
		<div id="themify-most-commented-2" class="widget themify-most-commented">
			<h4 class="widgettitle">Organization </h4>
			<ul class="feature-posts-list">
				<li><a href="#">Pinakatay</a></li>
				<li><a href="#">Puma Training</a></li>
				<li><a href="#">Ultimate Eskrima</a></li>
				<li><a href="#">American Workforce</a></li>
				
			</ul>
		</div>
		
		
	</aside>
	<!-- /Left sidebar end -->