       

       <section class="col-md-5 col-md-offset-2">
	       	<div class="form" id="message">
					<h5>New Message:</h5>
					<p class="message">
						<input type="name" class="form-control" id="name" value=<?php echo $SESSION_NAME;?> disabled>
						<input type="name" class="form-control" id="iditem" value=<?php echo $item->get_id(); ?> >
						
						<textarea class="form-control" id="message" rows="3" placeholder="Enter message"></textarea>
						
						<div id="outer_message">
							<button type="button" class="btn btn-success" id="button_message">Send</button>
						</div>
						<div class="status_message" id="status_message">
						</div>
					</p>
			</div>
       	</section>
