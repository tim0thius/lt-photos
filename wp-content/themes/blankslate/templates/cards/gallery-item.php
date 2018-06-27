<?php
	$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<div class="card-gallery-item" >
    <div class="card-gallery-item__background" style="background-image:url({{$backgroundImg[0]}});">
    	
    </div>
    <div class="card-gallery-item__details">
    	<h2 class="card-gallery-item__title"><a class="card-gallery-item__link" href="{{ the_permalink()}}"><span class="card-gallery-item__name">{{the_title()}}</span><span class="card-gallery-item__label">family</span></a></h2>
    </div>
</div>