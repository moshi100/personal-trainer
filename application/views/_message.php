
       <section class="col-md-5 col-md-offset-2" id="show_message">
	       	<div class="form" id="message">
				
				<b class="col-sm-9"><?php echo $message->name;?></b>
				<small class="col-sm-3"><?php echo $message->date;?></small>
				
				<p class="col-md-10 col-md-offset-1" style="padding: 2px">
					<?php echo nl2br($message->message); ?>
				</p>
				
			</div>
       	</section>
