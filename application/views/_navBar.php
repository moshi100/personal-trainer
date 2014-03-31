			<nav class="navbar navbar-default 
	  					navbar-fixed-top 
	  					navbar-inverse" role="navigation"> 

	  			<div class="navbar-header">
	  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			              <span class="sr-only">Toggle navigation</span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
		            </button>
             		<a class="navbar-brand" href="index.php?p=home">
             			<?php echo $defaultTitle;?>
					</a>
             		
          		</div>
         
           		<!-- Collect the nav links, forms, and other content for toggling -->
           		<div class="collapse navbar-collapse navbar-ex1-collapse ">
                 	<ul class="nav navbar-nav navbar-lert  "  id="menu_items">
	               		<li class="<?php echo $home;?> navbar-left"><a href="index.php?p=home">Home</a></li>
	                	<li class="<?php echo $items;?> navbar-left"> <a href="index.php?p=Items">Guides</a></li>
	               		<li class="<?php echo $aboutme;?> navbar-left"><a href="index.php?p=About Me">About</a></li>
	                	<li class="<?php echo $contactus;?> navbar-left"><a href="index.php?p=contactus">Contact</a></li>
					</ul>
					
					<div class="navbar-right" id="guest" style="display: <?php echo $display_guest;?>;">
						<button type="button" id="link_registration" class="btn btn-default navbar-btn  btn-inverse  navbar-left  btn-xs ">
							Register
						</button>
          				<button type="button" id="link_connection" class="btn btn-default navbar-btn  navbar-left btn-xs btn-primary">
          					Sign in
          				</button>
					</div>
					<div class="navbar-right" id="user" style="display: <?php echo $display_user;?>;">
						<button type="button" id="link_logout" class="btn btn-default navbar-btn  btn-inverse  navbar-left  btn-xs ">
							Logout
						</button>
          				<button type="button" id="" class="btn btn-default navbar-btn  navbar-left btn-xs btn-primary">
          					<?php echo $SESSION_NAME;?>
          				</button>
					</div>
					
          		</div>
          		
          		<div class="col-md-2 col-md-offset-7" id="row">
					<?php 
						require_once 'application/views/_connection.form.php';
						require_once 'application/views/_registration.form.php';
					?>
          		</div>

			</nav>

		