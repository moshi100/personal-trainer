	<?php include 'config/helper.php';?>

    <section id="information" class="row">
    
    	<div class="col-md-9">
        	<h1 ><?php echo $item->name; ?></h1>
            <h2 class="text-muted">
            	<?php echo $item->slogan; ?>
            </h2 >
            <p class="lead">
            	<?php echo nl2br($item->text); ?>
			</p>
			<a href="index.php?p=Items" class="col-md-2 col-md-offset-10">
					<button type="button" class="btn btn-primary ">
						Other Guides
					</button>
			</a>
        </div>

        <div class="col-md-3">
       		<img src="public/img/<?php echo $item->img; ?>"  class="img-responsive  img-thumbnail ">
       	</div>
       	
		<?php 
		
			$controller = new selectController();
			$controller->get_message_by_idItem($item->get_id(),"message");
			
			require_once 'application/views/_message.form.php';
		
		?> 
       	
   </section>
