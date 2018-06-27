<?php
	$index = 0;
	if(get_row_index()){
		$index = get_row_index();
	}
?>
<section id="block-gallery--<?= $gallery_id ?>-<?= $index ?> " class="block-gallery" role="main" >
		<div class="grid__container">
			<div class="grid grid--narrow">
				<?php

				   // $args = array('post_type' => 'gallery');
				   // $category_posts = new WP_Query($args);

				   if($category_posts->have_posts()) : 
				   	$counter = 0;
				      while($category_posts->have_posts()) : 
				         $category_posts->the_post();			    
				?><!-- 
				 --><div class="grid__item one-third palm--one-whole">
					@include( 'templates/cards/gallery-item' )	
				</div><!-- 
				 --><?php
				 		$counter ++;
				         if($counter == 6){break;}
				      endwhile;
				   else: 
				?>
				    Oops, there are no posts.
				<?php
				   endif;
				?>
			</div>
		</div>
</section>