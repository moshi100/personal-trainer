
			<section class="col-sm-4" class="row">
				<h4 ><?php echo $item->name; ?></h4>
				<img src="public/img/<?php echo $item->img; ?>" alt="..." class="img-thumbnail img-responsive">
				<p>
					<?php echo $item->slogan; ?>
				</p>
				<br>
				<a href="index.php?p=<?php echo $item->name; ?>">
					<button type="button" class="btn  btn-primary ">
						Continue..
					</button>
				</a>
 			</section>
